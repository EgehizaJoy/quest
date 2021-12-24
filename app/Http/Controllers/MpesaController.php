<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\Cart;
use App\Models\Product;
Use Auth;
use App\Models\User;


class MpesaController extends Controller
{
	public function lipaNaMpesaPassword(){
		$timestamp = Carbon::rawParse('now')->format('YmdHms');
		$passkey = "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
		$businessShortCode = 174379;
		$mpesaPassword = base64_encode($businessShortCode.$passkey.$timestamp);
		return $mpesaPassword;
	}
	
	public function newAccessToken(){
		$consumer_key = "rCqfz666VAH0GcUb6Ivd5Zs6jDIaegNC";
		$consumer_secret = "9lz25y0G1otfScX6";
		$credentials = base64_encode($consumer_key.":".$consumer_secret);
		$url='https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';
		
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Basic '.$credentials,'Content-Type:applicatin/json'));
		curl_setopt($curl, CURLOPT_HEADER, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$curl_response = curl_exec($curl);
		$access_token=json_decode($curl_response);
		curl_close($curl);
		return $access_token->access_token;
	}
	
	public function stkPush(Request $request,$amount){
	
		
		
		$user = $request->user; //Displays on the checkout form
        $amount = $request->amount;
		$phone = $request->phone;
		$formatedPhone = substr($phone,1);
		$code = "254";
		$phoneNumber = $code.$formatedPhone; //concatinates the country code and the phone number
		
		
		$url = 'https://sandbox.safaricom.co.ke/mpesa/c2b/v1/simulate';
		$curl_post_data = [
		'BusinessShortCode' => 174379,
		'Password'=>$this->lipaNaMpesaPassword(), //The Method we made at the beginning
		'Timestamp'=>Carbon::rawParse('now')->format('YmdHms'),
		'TransactionType'=>'CustomerBuyGoodsOnline',
		'Amount'=> 1, 
		'PartyA'=> $phoneNumber,
		'PartyB'=>174379,
		'PhoneNumber'=> $phoneNumber,
		'CallBackURL'=> 'https://a3ad-41-203-217-225.ngrok.io/api/stk/push/callback/url', 
		'AccountReference'=> "Life Is Spiritual",
		'TransactionDesc'=> "Lipa na M-pesa"
		];
		
		$data_string = json_encode($curl_post_data);
		
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url); 
		curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Authorization:Bearer '.$this->newAccessToken())); //make sure of the space
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
		$curl_response = curl_exec($curl);
		\Log::info($curl_response);

		return redirect('/confirm');
	//	return back();
		
	}
	
	public function MpesaRes(Request $request){

		\Log::info($request);
		

		
		$response = json_decode($request->getContent());
		$resData =  $response->Body->stkCallback->CallbackMetadata;
        $reCode =$response->Body->stkCallback->ResultCode;
        $resMessage =$response->Body->stkCallback->ResultDesc;
        $amountPaid = $resData->Item[0]->Value;
        $mpesaTransactionId = $resData->Item[1]->Value;
        $paymentPhoneNumber =$resData->Item[4]->Value;
        
	
			
        //replace the first 254 with 0
        $formatedPhone = str_replace("254","0",$paymentPhoneNumber);

	
		$payment = new Payment;

		
        $payment->amount = $amountPaid;
        $payment->mpesa_trans_id = $mpesaTransactionId;
        $payment->phone = $formatedPhone;
		
        $payment->save();
	
		\Log::info("Transaction ".$mpesaTransactionId." of amount ".$amountPaid." from phone number ".$formatedPhone." has been completed successfully");
		
		
		
	}
	

}

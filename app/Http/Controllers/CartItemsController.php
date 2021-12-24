<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Session;

class CartItemsController extends Controller
{
    function cartList()
    {
        $userId=Session::get('user')['id'];
       $products= DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
       ->select('products.*','cart.id as cart_id','cart.qty as cart_qty','cart.product_id as product_id')
     // ->sum('products.price')
        ->get();
     
        return view('checkout',['products'=>$products]);
    }

    function removeCart($id)
    {
        Cart::destroy($id);
        return back();
    }
}

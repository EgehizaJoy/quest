<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cart;

class CartController extends Controller
{
    function addToCart(Request $req)
    {
        
        {
           $cart= new Cart;
           $cart->user_id=$req->user_id;
           $cart->qty=$req->qty;
           $cart->product_id=$req->product_id;
           $cart->save();
           return back();

        }
       
    }
    
    
}

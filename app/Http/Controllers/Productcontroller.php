<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


use Illuminate\Support\Facades\File;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Validator; 
use Illuminate\Support\Facades\DB;
use Session;
use App\Models\Product;
use App\Models\Cart;


class Productcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminp', ['products'=>Product::paginate(10)
    ]);
    }

    public function products(){

    	return view('products')
        ->with([
            'products' =>Product::all(),
           
        ]);
    }

    function det($id)
    {
        $data =Product::find($id);
        return view('det',['product'=>$data])
        ->with([
            'products' =>Product::all(),
           
        ]);
        ;
    }


    function detail($id)
    {
        $data =Product::find($id);
        return view('detail',['product'=>$data])
        ->with([
            'products' =>Product::all(),
           
        ]);
        ;
    }

    static function cartItem()
    {
     $userId=Session::get('user')['id'];
     return Cart::where('user_id',$userId)->count();
    }
    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::create($request->except(['_token']));
         
    
        if ($request->hasFile('image')) {
         $request->file('image')->store('public/images');
         
         // ensure every image has a different name
         $file_name = $request->file('image')->hashName();
         
         // save new image $file_name to database
         $product->update(['image' => $file_name]);
     }
     
      //  $user->roles()->sync($request->roles);
      //  $request->session()->flash('success','you created the user');
 
      return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);

       // $request->session()->flash('success','you deleted the user');

        return redirect()->back();
    }
}

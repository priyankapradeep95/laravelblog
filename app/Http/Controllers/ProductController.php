<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;
use Auth;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::all();
      return view('product.index')->with(['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validatedData = $request->validate([
        'name' => 'required|min:3',
        'price' => 'required',
    ]);
        $product = new Product;

        $product->user_id = Auth::user()->id;
         $product->name = $request->name;
        $product->price = $request->price;

        $product->save();
        
        return redirect()->back()->with('status', 'Product added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $product = Product::find($id);
      
      
          return view('product.show',['product' => $product]);
        
     
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
     return view('product.edit',['product' => $product]);
       
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
        
         $validatedData = $request->validate([
        'name' => 'required|min:3',
        'price' => 'required',
    ]);
      
         $product = Product::find($id);
       
       
         $product->name = $request->name;
        $product->price = $request->price;

        $product->save();
        
        return redirect()->back()->with('status', 'Product edited!');
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
       return redirect()->back()->with('status', 'Product deleted!');
    }
}

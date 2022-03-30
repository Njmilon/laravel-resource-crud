<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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
        return view('crud.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('crud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'productTitle' =>'required|max:20',
            'productPrice' =>'required|max:5',
            'productColor' =>'required',
            'productDescription' =>'required|max:250',
        ]);
        Product::create([
            'title'=>$request->productTitle,
            'price'=>$request->productPrice,
            'color'=>$request->productColor,
            'description'=>$request->productDescription,
        ]);
        return redirect()->route('products.index')->with('message','Product Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        // $editProduct = Product::find($product);
        return view('crud.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        
        $request->validate([
            'productTitle' =>'required|max:20',
            'productPrice' =>'required|max:5',
            'productColor' =>'required',
            'productDescription' =>'required|max:250',
        ]);
    
        $product->update([
            'title'=>$request->productTitle,
            'price'=>$request->productPrice,
            'color'=>$request->productColor,
            'description'=>$request->productDescription,
        ]);
    
        return redirect()->route('products.index')->with('message','Product Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
    
        return redirect()->route('products.index')->with('message','Product Deleted Successfully');
    }
}

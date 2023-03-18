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
        $products = Product::latest();
        return view('product.index',compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    public function store(Request $request)
    {
        $request->validte([

            'name'=>['required'],
            'price'=>['required'],
            'details'=>['required']
        ]);
        /*

        $product = new Product;
        $product->name=$request->name;
        $product->price=$request->price;
        $product->details=$request->details;

        $product->save();
*/

        $product = Product::create($request->all());
        return redirect()->route('product.index')->with('success','added success fully');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product.show',compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('product.edit',compact('product'));

    }

    public function update(Request $request, Product $product)
    {
        $request->validte([

            'name'=>'required',
            'price'=>'required',
            'details'=>'required'
        ]);

        $product = Product::update($request->all());
        return redirect()->route('product.index')->with('success','successfully updated ');

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
    }
}

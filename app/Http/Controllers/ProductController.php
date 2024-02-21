<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('layouts.app');
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addproduct');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

         $img_name = time().".".$request->image->extension();
         $request->image->move(public_path('products'),$img_name);
        $product = new Product();
        $product->image = $img_name;
       $product->name=$request->name;
       $product->product_id=$request->product_id;
       $product->category_id=$request->category_id;
       $product->unique_id=$request->unique_id;
       $product->created_by=$request->created_by;
       $product->updated_by=$request->updated_by;
       $product->is_active=$request->is_active;
       $product->save();
     //   dd($addproduct);
        return back()->withSuccess("product details addedd successfully");
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $products = Product::all();
     
        return view('productlist',['products'=>$products]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
      $newproducts =  $product->update($request->all());
      return response()->json($newproducts);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          $product = Product::find($id);
          $product->delete();
          return response()->json('deleted successfully');
    }
}

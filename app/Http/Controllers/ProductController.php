<?php
//welcome
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = Product::create($request->all());

        return response()->json($product);
        
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $product = Product::find($id);
        return response()->json($product);
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

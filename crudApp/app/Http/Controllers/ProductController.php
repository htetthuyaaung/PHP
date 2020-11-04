<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;

class ProductController extends Controller
{
  
    public function index()
    {
        return Product::all();

    }

  
    public function store(ProductStoreRequest $request)
    {
        // $request->validate([
        //     'name'=>'required|String',
        //     'price'=>'required|numeric',
        //     'description'=>'required'
        // ],[
        //     'name.required' => 'နာမည်ထည့်ပါ။',
        //     'name.string' => 'နာမည်ကို စာသားဖြင့်ရေးပါ။'
        // ]);
      $product =  Product::create($request->only('name', 'price', 'description'));
      return $product;
    }

  
    public function show(Product $product)
    {
        // $product = Product::find($id);
        return $product;

    }

   
    public function update(ProductUpdateRequest $request, Product $product)
    {
        // $request->validate([
        //     'name' => 'nullable|String',
        //     'price' => 'nullable|numeric',
        //     'description' => 'nullable'
        // ]);
        // $product = Product::find($id);
        $product->update($request->only('name', 'price', 'description'));
        return $product;
    }

   
    public function destroy(Product $product)
    {
        // $product = Product::find($id);
        $product->delete();
        return $product;
    }
}

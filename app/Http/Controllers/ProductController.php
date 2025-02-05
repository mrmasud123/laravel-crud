<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function loadProducts(){
        $data=Product::all();
        return view('products.products',compact('data'));
    }
    public function loadProductCreationPage(){
        return view('products.create-product');
    }

    public function createProduct(Request $request){
        $cat=Product::create(
            [
                'product_name'=>$request->product_name
            ]
        );
        if($cat){
            return redirect()->route('merchant.products')->with('success', "Product inserted");
        }
    }
}

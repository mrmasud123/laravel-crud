<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function loadCategory(){
        
        $data=Category::all();
        return view('category.category', compact('data'));   
    }

    public function loadCategoryCreationPage(){
        return view('category.create-category');
    }

    public function createCategory(Request $request){
        $cat=Category::create(
            [
                'category_name'=>$request->category_name
            ]
        );
        if($cat){
            return redirect()->route('merchant.category')->with('success', "Category inserted");
        }
    }
}

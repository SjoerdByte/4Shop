<?php

namespace App\Http\Controllers;

use App\Models\Order_rule;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::all();

        return view('categories.index')
            ->with(compact('categories'))
            ->with(compact('products'));
    }

    public function show(Category $category)
    {
        $categories = Category::all();
        $products = Product::where('category_id',$category->id)->get();

        return view('categories.index')
            ->with(compact('categories'))
            ->with(compact('products'));
    }

}

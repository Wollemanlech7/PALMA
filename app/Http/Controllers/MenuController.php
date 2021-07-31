<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; 
use App\Models\Category;


class MenuController extends Controller
{
    public function menuProducts() {
        $objProducts = Product::where('quantity', '>', 0)->get();

        return view('index', [
            'products' =>$objProducts,

        ]);
    }

    public function getCategories() {
        $objCategories = Category::all();

        return response()->json(['categories' =>$objCategories]);
    }
}



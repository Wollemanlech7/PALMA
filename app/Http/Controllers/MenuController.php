<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; 
use App\Models\Category;


class MenuController extends Controller
{
    public function menuProducts() {
        return view('index');
    }

    public function getCategories() {
        $objCategories = Category::all();
        $objProducts = Product::where('quantity', '>', 0)->get();

        return response()->json([
            'products' =>$objProducts,
            'categories' =>$objCategories
        ]);
    }
}



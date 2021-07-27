<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; 
use App\Models\Category;

class MenuController extends Controller
{
    public function menuProducts() {
        $objProducts = Product::where('quantity', '>', 0)->get();
        $objCategories = Category::all();

        return view('index', [
            'products' =>$objProducts,
            'categories' =>$objCategories

        ]);
    }
}

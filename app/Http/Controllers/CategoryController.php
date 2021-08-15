<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CategoryController extends Controller
{
    public function index($id) {
        return view("categories", [
            "id"=>$id
        ]);
    }

    public function getItemsCategory(Request $request) {
        $products=Product::where('category_id', $request->id)->get();
        return response()->json(['products'=>$products]);
    }
    
}

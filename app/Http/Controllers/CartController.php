<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class CartController extends Controller
{
    public function index() {
        // return session('_CART');
        return view('cart', ["items" => session('_CART') ]);
    }

    public function addItem($itemId) {
        $arrayItems = array();

        if (session('_CART') != null ) {
             $arrayItems = session('_CART');      
        }
        $item = Product::where("id", $itemId)->first();
        array_push($arrayItems, array(
            'id' => $item->id, 
            'name' => $item->name,
            'cost' => $item->cost,
            'description' => $item->description,
            'img' => $item->img,
            'category_id' => $item->category_id,
            'company_id' => $item->company_id
            
        ));
        session(["_CART" => $arrayItems]);

        return response()->json(['items' => session("_CART")]);
    }

    public function viewItem() {

    }
}



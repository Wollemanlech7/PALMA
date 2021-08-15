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

    public function addItem($itemId, Request $request) {
        $objCart = array();
        $isDuplicate=false; 
        $index=null;
        if (session('_CART') != null ) {
            $objCart=session("_CART");
        
            foreach ($objCart as $key => $item) {
                if ($item ['id'] == $itemId) {
                    $isDuplicate=true; 
                    $index=$key;
                }
            }  
            
            if ($isDuplicate) {
                $objCart[$index]['quantity']+=1;
            } else{
                $item = Product::where("id", $itemId)->first();
                array_push($objCart, array(
                    'id' => $item->id, 
                    'name' => $item->name,
                    'cost' => $item->cost,
                    'description' => $item->description,
                    'img' => $item->img,
                    'category_id' => $item->category_id,
                    'company_id' => $item->company_id,
                    'quantity'=> 1
                )); 
            }
          

        } else {

            $item = Product::where("id", $itemId)->first();
            array_push($objCart, array(
                'id' => $item->id, 
                'name' => $item->name,
                'cost' => $item->cost,
                'description' => $item->description,
                'img' => $item->img,
                'category_id' => $item->category_id,
                'company_id' => $item->company_id,
                'quantity'=> 1
            )); 
        } 
        session(["_CART" => $objCart]);
        
        return response()->json(['items' => session("_CART")]);
    }

    public function get(){
        return response()->json(['items' => session("_CART")]);
    }

    public function deleteItemCart($itemIndex){
        //acceder variable de seison 
        $cart=session("_CART");

        //eliminar el elemento segun el index o indice 
        array_splice($cart, $itemIndex, 1); 

        //guardar el nuevo array en le variable de sesion
        session(['_CART'=>$cart]);

        //retornar un mensj de exito 
        return response()->json(["sucess"=>true]);

    } 
}

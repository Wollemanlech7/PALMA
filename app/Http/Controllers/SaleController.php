<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class SaleController extends Controller
{
    public function index() {
        $data=User::with([
            'typeUser'
        ])->get();

         return response()->json($data);
    }
}

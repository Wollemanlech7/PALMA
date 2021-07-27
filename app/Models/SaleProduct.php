<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleProduct extends Model
{
    use HasFactory;

    public function characteristic() {
        return $this->belongsTo(Characteristic::class);
    }

    public function sale(){
        return $this->belongsTo(Sale::class);
    }

    public function products() {
        return $this->belongsTo(Products::class);
    }


}

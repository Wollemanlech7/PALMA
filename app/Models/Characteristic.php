<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model
{
    use HasFactory;

    public function saleProduct() {
        return $this->hasOne(SaleProduct::class);
    }

    public function product() {
        return $this->belongsTo(Product::class);
    }
}

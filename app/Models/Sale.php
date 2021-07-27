<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    public function status() {
        return $this->belongsTo(Status::class);
    }

    public function saleProducts() {
        return $this->belongsTo(SaleProducts::class);
    }

    public function users() {
        return $this->hasOne(User::class);
    }
}





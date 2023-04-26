<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // protected $table ='product_models';
    protected $fillable = [
        'name',
        'description',
        'stock',
        'purcharse_price',
        'sale_price',
    ];
}

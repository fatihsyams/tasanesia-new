<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
     protected $fillable = [
        'name',
        'email',
        'no_handphone',
        'name_product',
        'quantity_product',
        'address_product',
        'description_product',
    ];
}

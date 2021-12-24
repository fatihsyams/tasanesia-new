<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'category_subs_id',
        'name',
        'images',
        'price',
        'quantity',
        'description',
        'status',     
    ];
    protected $with = ['category_sub'];

    public function category_sub()
    {
        return $this->belongsTo(CategorySubs::class);
    }

    public function sub_category()
    {
        return $this->belongsTo(CategorySubs::class, 'category_subs_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

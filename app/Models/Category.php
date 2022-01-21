<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

   protected $fillable =
  [
    'name', 'images', 'description'
  ];

  public function product()
  {
    return $this->hasMany(Product::class);
  }

  public function category_subs()
  {
    return $this->hasMany(CategorySubs::class, 'category_id')->orderBy('name', 'asc');
  }
}

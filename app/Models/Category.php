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

  public function category_subs()
  {
    return $this->hasMany(CategorySub::class);
  }
}

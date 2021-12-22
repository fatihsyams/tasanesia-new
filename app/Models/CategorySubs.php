<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategorySubs extends Model
{
    use HasFactory;
     protected $fillable = [
    'category_id',
    'name', 'images', 'description'
  ];

  // public function category()
  // {
  //   return $this->belongsTo(Category::class);
  // }

  public function categories()
  {
    return $this->belongsToMany(Category::class);
  }
}

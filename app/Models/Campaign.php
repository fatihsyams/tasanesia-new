<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'author',
        'images',
        'description',
        'description_2',    
        'description_3',    
        'description_4',    
        'description_5',    

    ];

     public function user()
    {
        return $this->belongsTo(User::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
    'name',
    'photo',
    'status',
    'price',
    'size',
  ];

  public function category()
  {
    return $this->belongsTo(Category::class);
  }
}

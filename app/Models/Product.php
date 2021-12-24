<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['product_Name','details','InStock',
    'Type','capacity','source','price','description',
     'nutrition','vitamins','minerals','image'];
    protected $table = 'products';
}

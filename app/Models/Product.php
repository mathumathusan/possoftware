<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'name',
        'category_id',
        'unique_id',
        'image',
        'created_by',
        'updated_by',
        'is_active',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $table = "products";

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'publish',
        'product_status',
        'product_reference',
        'categories_id',
    ];

    public function sizes(){
        return $this->belongsToMany(Size::class, 'pivot', 'product_id', 'size_id');
    }

    public function categorie(){
        return $this->belongsTo(Categories::class, 'categories_id');
    }
}

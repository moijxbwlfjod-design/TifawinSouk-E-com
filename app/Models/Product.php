<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    protected $fillable = ['name', 'reference', 'slug', 'price', 'stock', 'categorie_id', 'image_path'];
    use HasFactory;

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
}

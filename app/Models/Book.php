<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'author', 'description', 'image', 'price', 'url_link', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

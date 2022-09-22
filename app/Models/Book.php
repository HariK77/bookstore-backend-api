<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        "id",
        "title",
        "author",
        "genre",
        "description",
        "isbn",
        "image",
        "published",
        "publisher",
    ];

    public function scopeSearch($query, $searchTerm)
    {
        $query->where('title', 'LIKE', "%{$searchTerm}%");
        $query->orWhere('author', 'LIKE', "%{$searchTerm}%");
        $query->orWhere('genre', 'LIKE', "%{$searchTerm}%");
        $query->orWhere('isbn', 'LIKE', "%{$searchTerm}%");
        $query->orWhere('publisher', 'LIKE', "%{$searchTerm}%");
        $query->orWhere('published', 'LIKE', "%{$searchTerm}%");
        return $query;
    }
}

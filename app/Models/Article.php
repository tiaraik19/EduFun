<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Category;
use App\Models\Author;



class Article extends Model
{
    use HasFactory;

    protected $fillable= [
        'title', 
        'picture', 
        'description', 
        'date',
        'category_id', 
        'author_id'
    ];

    public function category(): BelongsTo #1 article belongs to 1 category
    {
        return $this->belongsTo(Category::class);
    }

    public function author(): BelongsTo #1 article milik sebuah author
    {
        return $this->belongsTo(Author::class);
    }

}


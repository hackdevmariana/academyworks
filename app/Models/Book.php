<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'author_id',
        'publication_date',
        'language',
        'isbn',
        'pages',
        'cover_image',
        'description',
        'editorial',
        'link_to_buy',
    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }
}

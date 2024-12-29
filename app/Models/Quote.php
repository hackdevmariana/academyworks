<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = ['quote', 'slug', 'language', 'quote_author_id'];

    public function author()
    {
        return $this->belongsTo(QuoteAuthor::class, 'quote_author_id');
    }
}

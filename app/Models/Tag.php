<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public function quotes()
    {
        return $this->belongsToMany(Quote::class);
    }

    public function books()
    {
        return $this->belongsToMany(Book::class);
    }
}
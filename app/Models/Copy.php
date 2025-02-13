<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copy extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'name',
        'url',
        'text',
        'language',
    ];
    
}

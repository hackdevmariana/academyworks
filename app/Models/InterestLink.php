<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InterestLink extends Model
{
    use HasFactory;

    protected $fillable = ['text', 'url', 'language']; 
}

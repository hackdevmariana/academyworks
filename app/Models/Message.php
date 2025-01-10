<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject',
        'name',
        'email',
        'message',
        'user_id', // Este campo debe existir si hay una relación con User
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

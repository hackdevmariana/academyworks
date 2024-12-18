<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class MenuItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_id',
        'parent_id',
        'title',
        'slug',
        'url',
        'order',
        'is_active',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($menuItem) {
            if (empty($menuItem->slug)) {
                $menuItem->slug = Str::slug($menuItem->title);
            }
        });
    }

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }

    public function parent()
    {
        return $this->belongsTo(MenuItem::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(MenuItem::class, 'parent_id')->orderBy('order');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Str;

class Speaker extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'biography',
        'slug',
        'photo',
        'photo_url',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            if (empty($model->slug)) {
                $model->slug = Str::slug("{$model->name} {$model->surname}");
            }
        });
    }

    public function getDisplayNameAttribute(): string
    {
        return "{$this->name} {$this->surname}";
    }
    /**
     * Relación uno a muchos con SocialProfile.
     */
    public function socialProfiles()
    {
        return $this->morphMany(SocialProfile::class, 'owner');
    }
    public function videos()
    {
        return $this->belongsToMany(Video::class, 'speaker_video', 'speaker_id', 'video_id');
    }


}

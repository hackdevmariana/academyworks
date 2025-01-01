<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetaTag extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug',
        'route_name',
        'title',
        'charset',
        'lang',
        'canonical',
        'meta_description',
        'meta_keywords',
        'author',
        'copyright',
        'cache_control',
        'expires',
        'robots',
        'referrer',
        'og_title',
        'og_description',
        'og_image',
        'og_type',
        'og_url',
        'og_site_name',
        'og_locale',
        'twitter_card',
        'twitter_title',
        'twitter_description',
        'twitter_image',
        'twitter_site',
        'twitter_creator',
        'schema_name',
        'schema_description',
        'schema_image',
        'additional_meta',
    ];
}

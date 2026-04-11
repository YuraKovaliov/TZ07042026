<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
     protected $fillable = [
        'title',
        'slug',
        'content',
        'is_published',
        'published_at'
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime',
    ];

   protected static function booted()
{
    static::creating(function ($post) {
        $post->slug = Str::slug($post->title);
    });

    static::updating(function ($post) {
        $post->slug = Str::slug($post->title);
    });
}


}

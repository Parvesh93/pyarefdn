<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class FounderStory extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'story_image',
        'original_scan',
        'source_name',
        'story_date',
        'founder_name',
        'is_featured',
        'sort_order',
        'status',
    ];

    protected $casts = [
        'story_date' => 'date',
        'is_featured' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($story) {
            if (empty($story->slug) && !empty($story->title)) {
                $story->slug = Str::slug($story->title) . '-' . strtolower(Str::random(5));
            }
        });

        static::updating(function ($story) {
            if (empty($story->slug) && !empty($story->title)) {
                $story->slug = Str::slug($story->title) . '-' . strtolower(Str::random(5));
            }
        });
    }
}
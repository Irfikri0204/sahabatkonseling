<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'title',
        'thumbnail',
        'excerpt',
        'body',
        'slug',
        'id_author',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_author');
    }

    protected static function booted()
    {
        static::creating(function ($post) {
            $post->excerpt = Str::limit(strip_tags($post->body), 200);
            if (empty($post->slug)) {
                $post->slug = Str::slug($post->title);
            }
            $post->id_author ??= Auth::id();
        });

        static::updating(function ($post) {
            $post->excerpt = Str::limit(strip_tags($post->body), 200);
            if (empty($post->slug)) {
                $post->slug = Str::slug($post->title);
            }
        });
    }
}

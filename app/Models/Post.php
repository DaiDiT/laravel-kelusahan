<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
    	'user_id',
        'body'
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    public function likes()
    {
    	return $this->hasMany(Like::class);
    }

    public function scopeFilter($query)
    {
        if (request('tag')) {
            return $query->where('body', 'like', '%#' . request('tag') . '%');
        } else {
            return $query->where('body', 'like', '%' . request('search') . '%');
        }
    }

    public function likeCountShortened()
    {
        $count = $this->likes->count();

        if ($count < 1000) {
            return $count;
        } elseif ($count < 1000000) {
            return floor($count / 1000) . ' RB';
        } else {
            return floor($count / 1000000) . ' JT';
        }
    }

    public function likeCountFormatted()
    {
        $count = $this->likes->count();

        return number_format($count, 0, ',', '.');
    }

    public function commentCountShortened()
    {
        $count = $this->comments->count();

        if ($count < 1000) {
            return $count;
        } elseif ($count < 1000000) {
            return floor($count / 1000) . ' RB';
        } else {
            return floor($count / 1000000) . ' JT';
        }
    }

    public function commentCountFormatted()
    {
        $count = $this->comments->count();

        return number_format($count, 0, ',', '.');
    }
}
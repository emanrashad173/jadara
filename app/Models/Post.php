<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;


class Post extends Model
{
    use HasFactory;
    
    protected $guarded = ['created_at'];

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;
use App\Traits\Image;



class Article extends Model
{
    use HasFactory , Image;

    protected $guarded = ['created_at'];

    protected $append = 'image';

    public function setImageAttribute($value)
    {
        if ($value) {
            if (isset($this->attributes['image']) && $this->attributes['image']) {
                if (file_exists(storage_path('app/public/uploads/article/'. $this->attributes['image']))) {
                    \File::delete(storage_path('app/public/uploads/article/'. $this->attributes['image']));
                }
            }
            if(is_string($value)){
                $image = $value;
            }else{
                $image = $this->upload_single_file($value,'app/public/uploads/article/');
            }
            $this->attributes['image'] = $image;
        }
    }

    public function getimageAttribute()
    {
        $image =  isset($this->attributes['image']) && $this->attributes['image'] ? url('storage/uploads/article/'.$this->attributes['image']):asset('default_images/default.jpeg');
        return $image;
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}

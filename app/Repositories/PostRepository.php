<?php

namespace App\Repositories;

use App\Models\Post;

class PostRepository 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
        $posts = Post::with('comments')->get();
        return $posts;  
    }

   
    /**
     * Store a newly created resource in storage.
     *
     * @param  $data
     */
    public function store($data)
    {
        //
        $post = Post::create($data);
        return $post->fresh();
    }

  
}

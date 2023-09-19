<?php

namespace App\Repositories;

use App\Models\Article;

class ArticleRepository 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
        $articles = Article::with('comments')->get();
        return $articles;  
    }

   
    /**
     * Store a newly created resource in storage.
     *
     * @param  $data
     */
    public function store($data)
    {
        //
        $article = Article::create($data);
        return $article->fresh();
    }

  
}

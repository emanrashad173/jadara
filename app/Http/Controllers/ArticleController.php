<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Services\ArticleService;
use App\Http\Requests\ArticleRequest;



class ArticleController extends Controller
{
    /**
     * @var ArticleService
     */
    protected $articleService;

    public function __construct(ArticleService $articleService)
    {
         $this->articleService = $articleService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles = $this->articleService->getAll();
        return response()->json([
            'status' => true,
            'data' => $articles,
          ]);  
    }

   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\ArticleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        //
        $article = $this->articleService->storeData($request);
        return response()->json([
            'status' => true,
            'data' => $article,
          ]);
    }

   
}

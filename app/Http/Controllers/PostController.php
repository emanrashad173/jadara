<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Services\PostService;


class PostController extends Controller
{

    /**
     * @var PostService
     */
    protected $postService;

    public function __construct(PostService $postService)
    {
         $this->postService = $postService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = $this->postService->getAll();
        return response()->json([
            'status' => true,
            'data' => $posts,
          ]);  
  }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\PostRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        //
        $post = $this->postService->storeData($request);
        return response()->json([
            'status' => true,
            'data' => $post,
          ]);
    }

}

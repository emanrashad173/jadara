<?php

namespace App\Services;

use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class PostService 
{
    /**
     * @var PostRepository
     */
    protected $PostRepository;

    public function __construct(PostRepository $PostRepository)
    {
         $this->PostRepository = $PostRepository;
    }

  /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
        //
        return $this->PostRepository->getAll();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  $data
     * @return \Illuminate\Http\Response
     */
    public function storeData($data)
    {
        //
        return $this->PostRepository->store($data);
    }

    
}

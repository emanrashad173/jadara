<?php

namespace App\Services;

use App\Repositories\ArticleRepository;
use Illuminate\Http\Request;

class ArticleService 
{
    /**
     * @var ArticleRepository
     */
    protected $ArticleRepository;

    public function __construct(ArticleRepository $ArticleRepository)
    {
         $this->ArticleRepository = $ArticleRepository;
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
        return $this->ArticleRepository->getAll();
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
        return $this->ArticleRepository->store($data);
    }

    
}

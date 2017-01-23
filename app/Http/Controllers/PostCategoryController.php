<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PostCategoryRepository;
use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\Eloquent\Repositories;
use session;

class PostCategoryController extends Controller
{
    protected $postCategoryRepository;

    /**
     * [__construct description]
     *
     * @param PostCategoryRepository $postCategory void
     */
    public function __construct(PostCategoryRepository $postCategoryRepository)
    {
        return $this->postCategoryRepository = $postCategoryRepository;

    }

    /**
     * List categories
     *
     * @return array categories
     */
    public function index()
    {
        $postCategory = $this->postCategoryRepository->all();
        return view('postCategory/view', compact('postCategory'));

    }
}

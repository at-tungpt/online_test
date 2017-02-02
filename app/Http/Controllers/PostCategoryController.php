<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PostCategoryRepository;
use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\Eloquent\Repository;
use session;

class PostCategoryController extends Controller
{
    protected $postCategory;

    /**
     * Function__construct description
     *
     * @param postCategory $postCategory void
     */
    public function __construct(PostCategoryRepository $postCategory)
    {
        return $this->postCategory = $postCategory;
    }

    /**
     * List all categories
     *
     * @return array categories
     */
    public function index()
    {
        $postCategories = $this->postCategory->all();
        return view('postCategory/view', compact('postCategories'));
    }
}

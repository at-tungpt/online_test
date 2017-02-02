<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PostRepository;
use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\Eloquent\Repository;
use session;

class PostController extends Controller
{
    protected $postMedia;

    /**
     * Function__construct description
     *
     * @param postCategory $postMedia void
     */
    public function __construct(PostRepository $postMedia)
    {
        return $this->postMedia = $postMedia;
    }

    /**
     * List all categories
     *
     * @return array categories
     */
    public function index()
    {
        $postMedia = $this->postMedia->getAll();
        return view('post/view', compact('postMedia'));
    }
}

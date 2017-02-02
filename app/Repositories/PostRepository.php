<?php

namespace App\Repositories;

use App\Repositories\Eloquent\Repository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use session;

class PostRepository extends Repository
{
    protected $postRepository;

    /**
     * Relationship
     *
     * @return void relationship of Post category
     */
    public function model()
    {
        return 'App\Models\Post';
    }

    /**
     * Get all post media
     *
     * @return array media
     */
    public function getAll()
    {
        return $this->model->paginate();
    }
}

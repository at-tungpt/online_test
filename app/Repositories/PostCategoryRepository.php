<?php

namespace App\Repositories;

use App\Repositories\Eloquent\Repository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use session;

class PostCategoryRepository extends Repository
{
    protected $postCategory;

    /**
     * Relationship
     *
     * @return void relationship of Post category
     */
    public function model()
    {
        return 'App\Models\PostCategory';
    }
}

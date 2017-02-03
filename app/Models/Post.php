<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['name', 'title', 'description', 'image', 'video', 'user_id', 'post_category_id'];
    /**
     * Relationship of user
     *
     * @return int id of user
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Relationship of postCategory
     *
     * @return int id of post category
     */
    public function postCategory()
    {
        return $this->belongsTo('App\Models\PostCategory');
    }
}

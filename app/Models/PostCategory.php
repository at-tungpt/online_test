<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    protected $table = 'post_categories';

    protected $fillable = ['name', 'post_category_id', '_lft', '_rgt', 'parent_id'];

   /**
    * Get the name of category
    *
    * @return array List category
    */
    public function name()
    {
        return hasMany('App/Models/PostCategory');
    }
}

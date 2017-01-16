<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = ['name', 'title', 'description', 'image', 'video', 'user_id', 'post_category_id'];
}

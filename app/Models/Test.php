<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'tests';

    protected $fillable = ['name', 'test_time', 'score', 'subject_category_id', 'level'];
}

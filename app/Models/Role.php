<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = ['id', 'role'];

    /**
     * Get role of use
     *
     * @return user [description]
     */
    public function user()
    {
        return $this->hasMany('App\Model\User');
    }
}

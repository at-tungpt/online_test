<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = "roles";

    protected $fillable = ['name'];

    /**
     * Get role of use
     *
     * @return user [description]
     */
    public function users()
    {
        return $this->hasMany('App\Model\User');
    }
}

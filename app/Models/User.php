<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name', 'email', 'password', 'gender', 'birthday', 'number_phone', 'avatar', 'role_id', 'test_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
    * Get role of user
    *
    * @return role Information role a user
    */
    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }

    /**
    * Get the test of user
    *
    * @return test List test
    */
    public function name()
    {
        return $this->belongsTo('App\Models\Test');
    }
}

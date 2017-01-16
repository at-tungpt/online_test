<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialAccount extends Model
{
    protected $table = 'social_accounts';

    protected $fillable = ['user_id', 'provider_user_id', 'provider'];

    /**
     * Relationship of user
     *
     * @return user_id description
     */
    public function users()
    {
        return $this->hasOne('App/Models/User', 'user_id');
    }
}

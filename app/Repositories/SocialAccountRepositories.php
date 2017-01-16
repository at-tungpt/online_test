<?php

namespace App\Repositories;

use Laravel\Socialite\Contracts\User as ProviderUser;
use App\Models\User;
use App\Models\SocialAccount;

class SocialAccountRepositories
{
    /**
    * Create a user or ger a user
    *
    * @param ProviderUser $providerUser [description]
    *
    * @return user                     Information of user
    */
    public function createOrGetUser(ProviderUser $providerUser)
    {
        $account = SocialAccount::whereProvider('facebook')
        ->whereProviderUserId($providerUser->getId())
        ->first();

        if ($account) {
            return $account->user;
        } else {
            $account = new SocialAccount([
                'provider_user_id' => $providerUser->getId(),
                'provider' => 'facebook'
                ]);
            $user = User::whereEmail($providerUser->getEmail())->first();
            if (!$user) {
                $user = User::create([
                    'email' => $providerUser->getEmail(),
                    'name' => $providerUser->getName(),
                    'role_id' => config('define.ROLESTUDENT'),
                    ]);
            }
            return $user;
        }
    }
}

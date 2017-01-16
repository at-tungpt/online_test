<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\Eloquent\Repository;
use App\Repositories\SocialAccountRepositories;
use Socialite;

class SocialAccountController extends Controller
{
    /**
     * Redirect to facebook
     *
     * @return void facebook page
     */
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Redirecrt to home
     *
     * @param SocialAccountRepository $service Execute register or login social account
     *
     * @return void Home page
     */
    public function callback(SocialAccountRepositories $service)
    {
        $user = $service->createOrGetUser(Socialite::driver('facebook')->user());
        auth()->login($user);
        return redirect()->to('/home');
    }
}

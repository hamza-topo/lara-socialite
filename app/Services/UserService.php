<?php

namespace App\Services;

use App\User;
use Hash;
use Auth;

class UserService
{

    public static function loginFacebookProvider($user_provider)
    {
        //$user  =   User::where(['email' => $user_provider->getEmail()])->first();
        $user  =   User::firstOrCreate(
            [
                'email' => $user_provider->getEmail()
            ],
            [
                'name' => $user_provider->getName(),
                'password' => Hash::make($user_provider->getName()), 
                'email' => $user_provider->getEmail(),]
        );
        return $user;
    }
}

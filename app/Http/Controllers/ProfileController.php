<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ProfileController extends Controller
{

    /**
     * @param Auth $auth
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getMyProfile(Guard $guard): View
    {
        return view('my-elstel.profile', ['user' => $guard->user()]);
    }
}

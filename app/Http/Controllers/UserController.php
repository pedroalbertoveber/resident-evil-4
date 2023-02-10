<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Repositories\AuthRepository;
use App\Http\Requests\SingInRequest;
use App\Http\Requests\SingUpRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(private AuthRepository $repository)
    {}

    public function register()
    {
        return view('auth.create');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function signUp(SingUpRequest $request) 
    {
        $user = $this->repository->signUp($request);

        return to_route('home')
            ->with('success', 'Welcome, '. $user->name . '!');
    }

    public function signIn(SingInRequest $request)
    {
        $this->repository->signIn($request);

        return to_route('home')
            ->with('success', 'Welcome back!');
    }

    public function logOut()
    {
        $this->repository->logOut();
        return to_route('users.login');
    }
}

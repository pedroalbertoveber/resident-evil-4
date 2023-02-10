<?php

namespace App\Http\Repositories;

use App\Http\Repositories\AuthRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Requests\SingUpRequest;
use App\Http\Requests\SingInRequest;

class EloquentAuthRepository implements AuthRepository {
  
  public function signUp(SingUpRequest $request): User 
  {
    return DB::transaction(function () use ($request) {
      $data = $request->except('_token');

      // transforming e-mail to lowercase
      $data['email'] = strtolower($data['email']);

      // hashing password
      $data['password'] = Hash::make($data['password']);

      // creating user
      $user = User::create($data);
      Auth::login($user);

      return $user;
    });
  }

  public function signIn(SingInRequest $request): bool
  {
    $allowed = false;

    $data = $request->only(['email', 'password']);

    // transforming e-mail to lowercase
    $data['email'] = strtolower($data['email']);

    if(!Auth::attempt($data)) {
      $allowed = false;
    } else {
      $allowed = true;
    }

    return $allowed;
  }

  public function logOut():void
  {
    Auth::logout();
  }
}
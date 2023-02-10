<?php

namespace App\Http\Repositories;

use App\Http\Requests\SingInRequest;
use App\Http\Requests\SingUpRequest;
use App\Models\User;

interface AuthRepository {
  public function signUp (SingUpRequest $request): User;

  public function signIn (SingInRequest $request): bool;

  public function logOut(): void;
}
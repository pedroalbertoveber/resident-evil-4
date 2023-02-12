<?php

namespace App\Http\Repositories;

use App\Http\Requests\CharacterRequest;
use App\Models\Character;

interface CharacterRepository {
  public function index ();

  public function store (CharacterRequest $request): Character;
}
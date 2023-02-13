<?php

namespace App\Http\Repositories;

use App\Http\Requests\CharacterRequest;
use App\Models\Character;
use Illuminate\Http\Request;

interface CharacterRepository {
  public function index (Request $request);

  public function show(int $id): Character;
  
  public function store (CharacterRequest $request): Character;

  public function update(CharacterRequest $request, int $id): Character;

  public function delete(int $id): void;
}
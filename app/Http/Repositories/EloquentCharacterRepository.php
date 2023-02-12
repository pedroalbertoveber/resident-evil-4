<?php

namespace App\Http\Repositories;

use App\Http\Repositories\CharacterRepository;
use App\Http\Requests\CharacterRequest;
use App\Models\Character;
use Illuminate\Support\Facades\DB;


class EloquentCharacterRepository implements CharacterRepository {
  
  public function index()
  {
    $characters = Character::all();
    return $characters;
  }

  public function store(CharacterRequest $request) {
    return DB::transaction(function () use ($request) {

      $data = $request->except(['_token']);
      
      if ($request->hasFile('image')) {
        $image = $data['image']
          ->store('characters_images', 'public');
      }

      $newCharacter = Character::create([
        'name' => $data['name'],
        'resume' => $data['resume'],
        'image' => $image,
      ]);

      return $newCharacter;
    });
  }
 
}
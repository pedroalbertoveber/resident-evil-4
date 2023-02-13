<?php

namespace App\Http\Repositories;

use App\Http\Repositories\CharacterRepository;
use App\Http\Requests\CharacterRequest;
use App\Models\Character;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class EloquentCharacterRepository implements CharacterRepository {
  
  public function index(Request $request)
  {
    if ($request->name) {
      $characters = Character::where('name', $request->name)->get();
  }

    $characters = Character::all();
    return $characters;
  }

  public function store(CharacterRequest $request): Character 
  {
    return DB::transaction(function () use ($request) {

      $data = $request->except(['_token']);

      if ($request->hasFile('image')) {
        
        $image = $data['image']
          ->store('character', 'public');
      }

      $newCharacter = Character::create([
        'name' => $data['name'],
        'resume' => $data['resume'],
        'image' => $image,
      ]);

      return $newCharacter;
    });
  }

  public function show(int $id): Character
  {
    $character = Character::findOrFail($id);

    return $character;
  }

  public function update(CharacterRequest $request, int $id): Character
  {
    return DB::transaction(function () use ($request, $id) {
      $data = $request->except(['token']);

      $character = Character::where('id', $id)->first();

      if ($request->hasFile('image')) {

        $image = $data['image']
          ->store('character', 'public');

        $character->image = $image;
      } 

      $character->name = $data['name'];
      $character->resume = $data['resume'];

      $character->update();

      return $character;
    });
  }

  public function delete(int $id): void
  {
    $character = Character::findOrFail($id);
    $character->delete();
  }
 
}
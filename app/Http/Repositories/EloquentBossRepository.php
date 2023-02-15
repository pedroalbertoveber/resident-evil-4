<?php

namespace App\Http\Repositories;

use App\Http\Requests\BossRequest;
use App\Models\Area;
use App\Models\Boss;
use Illuminate\Support\Facades\DB;
use App\Http\Repositories\BossRepository;

class EloquentBossRepository implements BossRepository {

  public function getAreas()
  {
    $areas = Area::all('id', 'name');
    return $areas;
  }

  public function store(BossRequest $request): Boss
  {
    return DB::transaction(function () use ($request) {
      $data = $request->except(['_token']);

      $image = $data['image']->store('boss', 'public');

      $boss = Boss::create([
        'image' => $image,
        'name' => $data['name'],
        'description' => $data['description'],
        'area_id' => $data['area_id'],
      ]);

      return $boss;
    });
  }

  public function show(int $id): Boss
  {
    $boss = Boss::findOrFail($id);
    return $boss;
  }

  public function update(BossRequest $request, int $id): Boss
  {
    return DB::transaction(function () use ($request, $id) {
      $data = $request->except(['_token']);
      $boss = Boss::findOrFail($id);

      if ($request->hasFile('image')) {
        $image = $data['image']->store('boss', 'public');

        $boss->image = $image;
      }

      $boss->name = $data['name'];
      $boss->area_id = $data['area_id'];
      $boss->description = $data['description'];

      $boss->update();
      return $boss;
    });
  }

  public function delete(int $id): Boss
  {
    $boss = Boss::findOrFail($id);
    $boss->delete();

    return $boss;
  }

}
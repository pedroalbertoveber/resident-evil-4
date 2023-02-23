<?php 

namespace App\Http\Repositories;

use App\Http\Repositories\EnemyRepository;
use App\Http\Requests\EnemyRequest;
use App\Models\Area;
use App\Models\Enemy;
use Illuminate\Support\Facades\DB;

class EloquentEnemyRepository implements EnemyRepository{

  public function store(EnemyRequest $request): Enemy
  {
    return DB::transaction(function () use ($request) {
      $data = $request->except('_token');
      $image = $data['image']->store('enemy', 'public');

      $enemy = Enemy::create([
        'name' => $data['name'],
        'difficulty' => $data['difficulty'],
        'image' => $image,
      ]);    

      $enemy->areas()->sync($data['areas']);

      return $enemy;
    });
  }

  public function update(EnemyRequest $request, int $id): Enemy
  {
    return DB::transaction(function () use ($request, $id) {
      $data = $request->except('_token');

      $enemy = Enemy::findOrFail($id);

      if ($request->hasFile('image')) {
        $image = $data['image']->store('public', 'enemy');
        $enemy->image = $image;
      }

      $enemy->name = $data['name'];
      $enemy->areas()->sync($data['areas']);

      $enemy->update();

      return $enemy;
    });
  }

  public function edit(int $id)
  {
    $areas = Area::all('name', 'id');
    $enemy = Enemy::findOrFail($id);

    $selectedAreas = [];

    foreach($enemy->areas as $area) {
      $selectedAreas[] = $area->id;
    }

    return [ 
      $enemy,
      $areas,
      $selectedAreas,
    ];
  }

  public function delete(int $id): void
  {
    $enemy = Enemy::findOrFail($id);
    $enemy->delete();
  }

  public function create()
  {
    $areas = Area::all('name', 'id');
    return $areas;
  }

}
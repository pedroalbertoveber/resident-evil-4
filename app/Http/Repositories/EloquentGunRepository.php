<?php 

namespace App\Http\Repositories;
use App\Http\Repositories\GunRepository;
use App\Http\Requests\GunRequest;
use App\Models\Gun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EloquentGunRepository implements GunRepository {

  public function index(Request $request)
  {
    if($request->name) {
      $guns = Gun::where('name', $request->name)->get();
      return $guns;
    }

    $guns = DB::table('guns')
      ->orderBy('type', 'asc')
      ->get();
      
    return $guns;
  }

  public function store(GunRequest $request): Gun
  {
    return DB::transaction(function () use ($request){
      $data = $request->except(['_token']);

      $image = $data['image']
        ->store('guns', 'public');

      $gun = Gun::create([
        'image' => $image,
        'name' => $data['name'],
        'type' => $data['type'],
        'action' => $data['action'],
        'ammunition' => $data['ammunition'],
        'fire_power' => $data['fire_power'],
        'fire_speed' => $data['fire_speed'],
        'reload_speed' => $data['reload_speed'],
        'capacity' => $data['capacity'],
        'initial_price' => $data['initial_price'],
      ]);

      return $gun;
    });
  }

  public function show(int $id): Gun
  {
    $gun = Gun::findOrFail($id);
    return $gun;
  }

  public function update(GunRequest $request, int $id): Gun
  {
    return DB::transaction(function () use ($request, $id) {
      $data = $request->except(['_token']);
      $gun = Gun::findOrFail($id);

      if ($request->hasFile('image')) {
        $image = $data['image']->store('guns', 'public');
        $gun->image = $image;
      }

      $gun->name = $data['name'];
      $gun->type = $data['type'];
      $gun->action = $data['action'];
      $gun->ammunition = $data['ammunition'];
      $gun->fire_power = $data['fire_power'];
      $gun->fire_speed = $data['fire_speed'];
      $gun->reload_speed = $data['reload_speed'];
      $gun->capacity = $data['capacity'];
      $gun->initial_price = $data['initial_price'];

      $gun->update();
      return $gun;
    });
  }

  public function delete(int $id):void
  {
    $gun = Gun::findOrFail($id);
    $gun->delete();
  }

}
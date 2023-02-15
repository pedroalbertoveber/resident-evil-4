<?php

namespace App\Http\Repositories;
use App\Http\Requests\AreaRequest;
use App\Models\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EloquentAreaRepository implements AreaRepository {

  public function store(AreaRequest $request): Area
  {
    return DB::transaction(function () use ($request) {
      $data = $request->except(['_token']);

      $image = $data['image']->store('areas', 'public');

      $area = Area::create([
        'name' => $data['name'],
        'image' => $image,
        'description' => $data['description'],
      ]);

      return $area;
    });
  }

  public function index(Request $request)
  {
    if ($request->name) {
      $areas = Area::where('name', $request->name)->get();
    }

    $areas = Area::All();
    return $areas;
  }
  
  public function show(int $id): Area
  {
    $area = Area::where('id', $id)->with('chapters')->first();

    return $area;
  }

  public function update(AreaRequest $request, int $id): Area
  {
    return DB::transaction(function () use ($request, $id){
      $data = $request->except(['_token']);
      $area = Area::findOrFail($id);

      if ($request->hasFile('image')) {
        $image = $data['image']->store('areas', 'public');
        $area->image = $image;
      }

      $area->name = $data['name'];
      $area->description = $data['description'];

      $area->update();
      return $area;
    });  
  }

  public function delete(int $id): void
  {
    $area = Area::findOrFail($id);
    $area->delete();
  }
}
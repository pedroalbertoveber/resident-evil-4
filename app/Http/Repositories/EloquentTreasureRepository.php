<?php 

namespace App\Http\Repositories;
use App\Http\Requests\TreasureRequest;
use App\Models\Treasure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EloquentTreasureRepository implements TreasureRepository {

  public function index(Request $request)
  {
    if ($request->name){
      $trasures = Treasure::where('name', $request->name)->get();
      return $trasures;
    }

    $trasures = Treasure::all();
    return $trasures;
  }

  public function store(TreasureRequest $request): Treasure
  {
    return DB::transaction(function () use ($request){
      $data = $request->except(['_token']);

      $image = $data['image']
        ->store('trasure','public');
      
      $treasure = Treasure::create([
        'image' => $image,
        'name' => $data['name'],
        'areas' => $data['areas'],
        'rarity' => $data['rarity'],
        'price' => $data['price'],
      ]);

      return $treasure;
    });
  }

  public function show(int $id): Treasure
  {
    $treasure = Treasure::findOrFail($id);
    return $treasure;
  }

  public function update(TreasureRequest $request, int $id): Treasure
  {
    return DB::transaction(function () use ($request, $id) {
      $data = $request->except(['_token']);

      $tresure = Treasure::findOrFail($id);

      if ($request->hasFile('image')) {
        $image = $data['image']
          ->store('treasure', 'public');
        
        $tresure->image = $image;
      }

      $tresure->name = $data['name'];
      $tresure->rarity = $data['name'];
      $tresure->price = $data['price'];
      $tresure->areas = $data['areas'];

      $tresure->update();
      return $tresure;
    });
  }

  public function delete(int $id):void
  {
    $treasure = Treasure::findOrFail($id);
    $treasure->delete();
  }

}
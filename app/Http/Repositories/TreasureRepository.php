<?php 

namespace App\Http\Repositories;
use App\Http\Requests\TreasureRequest;
use App\Models\Treasure;

interface TreasureRepository {

  public function store(TreasureRequest $request): Treasure;

  public function show(int $id): Treasure;

  public function update(TreasureRequest $request, int $id): Treasure;

  public function delete(int $id): void;

}
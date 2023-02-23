<?php

namespace App\Http\Repositories;
use App\Http\Requests\EnemyRequest;
use App\Models\Enemy;

interface EnemyRepository{

  public function store(EnemyRequest $request): Enemy;

  public function edit(int $id);
  
  public function update(EnemyRequest $request, int $id): Enemy;

  public function delete(int $id): void;

  public function create();

}

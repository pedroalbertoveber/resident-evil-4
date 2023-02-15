<?php

namespace App\Http\Repositories;
use App\Http\Requests\BossRequest;
use App\Models\Boss;

interface BossRepository {
  
  public function getAreas();

  public function store(BossRequest $request): Boss;

  public function show(int $id): Boss;

  public function update(BossRequest $request, int $id): Boss;

  public function delete(int $id): Boss;

}
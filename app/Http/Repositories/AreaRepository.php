<?php

namespace App\Http\Repositories;
use App\Http\Requests\AreaRequest;
use App\Models\Area;
use Illuminate\Http\Request;

interface AreaRepository {

  public function index(Request $request);
  public function store(AreaRequest $request): Area;

  public function show(int $id): Area;

  public function update(AreaRequest $request, int $id): Area;

  public function delete(int $id):void;
}
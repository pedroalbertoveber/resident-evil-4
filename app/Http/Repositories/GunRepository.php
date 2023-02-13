<?php

namespace App\Http\Repositories;
use App\Http\Requests\GunRequest;
use App\Models\Gun;
use Illuminate\Http\Request;

interface GunRepository {

  public function index(Request $request);

  public function store(GunRequest $request): Gun;

  public function show(int $id): Gun;

  public function update(GunRequest $request, int $id): Gun;

  public function delete(int $id):void;

}
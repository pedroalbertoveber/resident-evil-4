<?php

namespace App\Http\Repositories;
use App\Http\Requests\ChapterRequest;
use App\Models\Chapter;
use Illuminate\Http\Request;

interface ChapterRepository {
  public function index(Request $request);

  public function store(ChapterRequest $request): Chapter;

  public function create();

  public function edit(int $id): array;

  public function update(ChapterRequest $repository, int $id): Chapter;

  public function show(int $id): array;

  public function delete(int $id): void;
}
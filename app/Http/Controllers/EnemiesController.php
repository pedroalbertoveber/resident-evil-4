<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Repositories\EnemyRepository;
use App\Http\Requests\EnemyRequest;

class EnemiesController extends Controller
{
    public function __construct(private EnemyRepository $repository)
    {}

    public function create()
    {
        $areas = $this->repository->create();

        return view('enemies.create')
            ->with('areas', $areas);
    }

    public function edit(int $id)
    {
        [$enemy, $areas, $selectedAreas] = $this->repository->edit($id);
        return view('enemies.edit', compact('enemy', 'areas', 'selectedAreas'));
    }

    public function store(EnemyRequest $request)
    {
        $this->repository->store($request);
        return to_route('areas.index')->with('success', 'Enemy added successfully!');
    }

    public function update(EnemyRequest $request, int $id)
    {
        $this->repository->update($request, $id);
        return to_route('areas.index')->with('success', 'Enemy updated successfully!');
    }

    public function delete(int $id)
    {
        $this->repository->delete($id);
        return to_route('areas.index')->with('success', 'Enemy removed successfully!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Repositories\BossRepository;
use App\Http\Requests\BossRequest;

class BossesController extends Controller
{
    public function __construct(private BossRepository $repository)
    {}

    public function create()
    {
        $areas = $this->repository->getAreas();

        return view('bosses.create')
            ->with('areas', $areas);
    }

    public function edit(int $id)
    {
        $areas = $this->repository->getAreas();
        $boss = $this->repository->show($id);

        return view('bosses.edit', compact(['areas', 'boss']));
    }

    public function store(BossRequest $request)
    {
        $boss = $this->repository->store($request);
        return to_route('areas.show', $boss->area_id)
            ->with('success', 'Boss ' . $boss->name . ' added successfully!');
    }

    public function show(int $id)
    {
        $boss = $this->repository->show($id);

        return view('bosses.show')
            ->with('boss', $boss);
    }

    public function update(BossRequest $request, int $id)
    {
        $boss = $this->repository->update($request, $id);
        return to_route('areas.show', $boss->area_id)
            ->with('success', 'Boss ' . $boss->name . ' updated successfully!');
    }

    public function delete(int $id)
    {
        $boss = $this->repository->delete($id);

        return to_route('areas.show', $boss->area_id)
            ->with('success', 'Boss ' . $boss->name . ' removed successfully!');
    }
}

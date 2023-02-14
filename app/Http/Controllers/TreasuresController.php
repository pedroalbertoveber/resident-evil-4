<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Repositories\TreasureRepository;
use App\Http\Requests\TreasureRequest;
use Illuminate\Http\Request;

class TreasuresController extends Controller
{
    public function __construct(private TreasureRepository $repository)
    {}

    public function index(Request $request)
    {
        $treasures = $this->repository->index($request);
        return view('treasures.index')
            ->with('treasures', $treasures);
    }

    public function create()
    {
        return view('treasures.create');
    }

    public function store(TreasureRequest $request)
    {
        $treasure = $this->repository->store($request);
        return to_route('treasures.index')
            ->with('success', 'Treasure ' . $treasure->name . ' created successfully!');
    }

    public function show(int $id)
    {
        $treasure = $this->repository->show($id);
        return view('treasures.show')
            ->with('treasure', $treasure);
    }

    public function edit(int $id)
    {
        $treasure = $this->repository->show($id);
        return view('treasures.edit')
            ->with('treasure', $treasure);
    }

    public function update(TreasureRequest $request, int $id)
    {
        $treasure = $this->repository->update($request, $id);

        return to_route('treasures.index')
        ->with('success', 'Treasure ' . $treasure->name . ' updated successfully!');
    }

    public function delete(int $id)
    {
        $this->repository->delete($id);
        return to_route('treasures.index')
            ->with('success', 'Treasure removed successfully!');
    }
}

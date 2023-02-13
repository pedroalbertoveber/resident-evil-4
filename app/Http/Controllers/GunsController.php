<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Repositories\GunRepository;
use App\Http\Requests\GunRequest;
use Illuminate\Http\Request;

class GunsController extends Controller
{
    public function __construct(private GunRepository $repository)
    {}

    public function index(Request $request)
    {
        $guns = $this->repository->index($request);

        return view('guns.index')
            ->with('guns', $guns);
    }

    public function create()
    {
        return view('guns.create');
    }

    public function store(GunRequest $request)
    {
        $gun = $this->repository->store($request);

        return to_route('guns.index')
            ->with('success', 'Gun ' . $gun->name . ' created successfully!');
    }

    public function edit(int $id)
    {
        $gun = $this->repository->show($id);

        return view('guns.edit')
            ->with('gun', $gun);
    }

    public function update(GunRequest $request, int $id)
    {
        $gun = $this->repository->update($request, $id);

        return to_route('guns.index')
            ->with('success', 'Gun ' . $gun->name . ' updated successfully!');
    }

    public function show(int $id)
    {
        $gun = $this->repository->show($id);
        return view('guns.show')
            ->with('gun', $gun);
    }

    public function delete(int $id)
    {
        $this->repository->delete($id);

        return to_route('guns.index')
            ->with('success', 'Gun removed successfully!');
    }
}

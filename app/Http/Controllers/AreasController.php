<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Repositories\AreaRepository;
use App\Http\Requests\AreaRequest;
use Illuminate\Http\Request;

class AreasController extends Controller
{
    public function __construct(private AreaRepository $repository) {}

    public function index(Request $request)
    {
        $areas = $this->repository->index($request);

        return view('areas.index')
            ->with('areas', $areas);
    }
    public function create()
    {
        return view('areas.create');
    }

    public function store(AreaRequest $request)
    {
        $area = $this->repository->store($request);

        return to_route('areas.index')
            ->with('success', 'Area ' . $area->name . ' has been created successfully!');
    }

    public function edit(int $id)
    {
        $area = $this->repository->show($id);

        return view('areas.edit')
            ->with('area', $area);
    }

    public function show($id)
    {
        $area = $this->repository->show($id);

        return view('areas.show')
            ->with('area', $area);
    }

    public function update(AreaRequest $request, int $id)
    {
        $area = $this->repository->update($request, $id);

        return to_route('areas.index')
            ->with('success', 'Area ' . $area->name . ' Updated successfully!');
    }

    public function delete(int $id)
    {
        $this->repository->delete($id);

        return to_route('areas.index')
            ->with('success', 'Area removed successfully!');
    }
}

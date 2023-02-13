<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Repositories\CharacterRepository;
use App\Http\Requests\CharacterRequest;
use App\Models\Character;
use Illuminate\Http\Request;

class CharactersController extends Controller
{
    public function __construct(private CharacterRepository $repository) {}

    public function index(Request $request) 
    {
        $characters = $this->repository->index($request);

        return view('characters.index')
            ->with('characters', $characters);
    }

    public function create() 
    {   
        return view('characters.create');
    }

    public function store(CharacterRequest $request)
    {
        $character = $this->repository->store($request);

        return to_route('characters.index')
            ->with('success', 'Character '. $character . ' created successfully!');
    }

    public function show(int $id)
    {
        $character = $this->repository->show($id);
        return view('characters.show')
            ->with('character', $character);
    }

    public function edit(int $id)
    {
        $character = $this->repository->show($id);

        return view('characters.edit')
            ->with('character', $character);
    }

    public function update(CharacterRequest $request, int $id)
    {
        $character = $this->repository->update($request, $id);

        return to_route('characters.index')
            ->with('success', 'Character ' . $character->name . ' Updated successfully!');
    }

    public function delete(int $id)
    {
        $this->repository->delete($id);
        return to_route('characters.index')
            ->with('success', 'Character removed successfully!');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Repositories\CharacterRepository;
use App\Http\Requests\CharacterRequest;
use App\Models\Character;
use Illuminate\Http\Request;

class CharactersController extends Controller
{
    function __construct(private CharacterRepository $repository) {}

    function index(Request $request) 
    {
        if ($request->name) {
            $characters = Character::where('name', $request->name)->get();
        }

        $characters = Character::all();

        return view('characters.index')
            ->with('characters', $characters);
    }

    function create() 
    {
        return view('characters.create');
    }

    function store(CharacterRequest $request)
    {
        $character = $this->repository->store($request);

        return to_route('characters.index')
            ->with('success', 'Character '. $character . ' created successfully!');
    }
}

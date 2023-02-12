<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\RepositoriesRepositories\CharacterRepository;
use App\Models\Character;
use Illuminate\Http\Request;

class CharactersController extends Controller
{

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
}

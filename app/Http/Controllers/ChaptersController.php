<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Repositories\ChapterRepository;
use App\Http\Requests\ChapterRequest;
use Illuminate\Http\Request;

class ChaptersController extends Controller
{
    public function __construct(private ChapterRepository $repository)
    {}

    public function index(Request $request)
    {
        if(!$request->query('chapter')){
            return to_route('home', ['chapter' => '1']);
        }

        $selected = $request->query('chapter');

        $chapters = $this->repository->index($request);
        return view('home', compact('chapters', 'selected' ));
    }

    public function create()
    {
        $areas = $this->repository->create();

        return view('chapters.create')
            ->with('areas', $areas);
    }

    public function store(ChapterRequest $request)
    {
        $chapter = $this->repository->store($request);
        return to_route('home')
            ->with('success', "Chapter $chapter->chapter - $chapter->sub_chapter created successfully!");
    }

    public function show(int $id)
    {
        [$chapter, $area] = $this->repository->show($id);

        return view('chapters.show', compact('chapter', 'area'));
    }

    public function update(ChapterRequest $request, int $id)
    {
        $chapter = $this->repository->update($request, $id);

        return to_route('home', ['chapter' => $chapter->chapter ])
            ->with('success', "Chapter $chapter->chapter - $chapter->sub_chapter updated successfully!");
    }

    public function edit(int $id)
    {
        [$areas, $chapter] = $this->repository->edit($id);
        
        return view('chapters.edit', compact('areas', 'chapter'));
    }

    public function delete(int $id)
    {
        $this->repository->delete($id);

        return to_route('home')
            ->with('success', 'Chapter removed successfully!');
    }

}

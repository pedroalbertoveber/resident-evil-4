<?php

namespace App\Http\Repositories;
use App\Http\Requests\ChapterRequest;
use App\Models\Area;
use App\Models\Chapter;
use Illuminate\Support\Facades\DB;

class EloquentChapterRepository implements ChapterRepository {

  public function index()
  {
    $chapters = DB::table('chapters')
      ->orderBy('chapter', 'asc')
      ->orderBy('sub_chapter', 'asc')
      ->get();
    
    return $chapters;
  }

  public function store(ChapterRequest $request): Chapter
  {
    return DB::transaction(function () use ($request) {
      $data = $request->except(['_token']);
      
      if ($request->hasFile('image')) {
        $image = $data['image']->store('chapter', 'public');
      } else {
        $image = null;
      }

      $chapter = Chapter::create([
        'chapter' => $data['chapter'],
        'sub_chapter' => $data['sub_chapter'],
        'area_id' => $data['area_id'],
        'description' => $data['description'],
        'image' => $image,
      ]);

      return $chapter;

    });
  }

  public function create()
  {
    $areas = Area::all('name', 'id');
    return $areas;
  }

  public function edit(int $id): array
  {
    $areas = $areas = Area::all('id', 'name');
    $chapter = Chapter::findOrFail($id);

    return [
      $areas,
      $chapter,
    ];
  }

  public function update(ChapterRequest $request, int $id): Chapter
  {
    return DB::transaction(function () use ($request, $id) {
      $data = $request->except(['_token']);
      $chapter = Chapter::findOrFail($id);

      if($request->hasFile('image')) {
        $image = $data['image']->store('chapter', 'public');

        $chapter->image = $image; 
      }

      $chapter->chapter = $data['chapter'];
      $chapter->sub_chapter = $data['sub_chapter'];
      $chapter->area_id = $data['area_id'];

      $chapter->update();
      return $chapter;
    });
  } 

  public function show(int $id): array
  {
    $chapter = Chapter::findOrFail($id);
    $area = Area::findorFail($chapter->area_id);
    
    return [
      $chapter,
      $area->name,
    ];
  }

  public function delete(int $id):void
  {
    $chapter = Chapter::findOrFail($id);
    $chapter->delete();
  }
}
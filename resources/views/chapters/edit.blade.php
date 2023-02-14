<x-layout title="Edit Chapter {{ $chapter->chapter }} - {{ $chapter->sub_chapter }}">
  <section class="w-full">
    <figure class="thumbnail">
      <img src="/img/church-bg.jpg" alt="Church" class="thumbnail-img">
      <h1 class="thumbnail-title">Edit Chapter: {{ $chapter->chapter }} - {{ $chapter->sub_chapter }}</h1>
    </figure>
    <form class="form-default mt-4" action="{{ route('chapters.update', $chapter->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <div class="form-group">
        <label for="image" class="label-default">Image</label>
        <input type="file" name="image" id="image" class="input-default cursor-pointer" accept="image/jpg, image/jpeg, image/png">
      </div>
      <div class="separater">
        <div class="form-group">
          <label for="chapter" class="label-default">Chapter:</label>
          <input type="number" name="chapter" id="chapter" class="input-default" min="1" max="5" required value="{{ $chapter->chapter}}">
        </div>
        <div class="form-group">
          <label for="sub_chapter" class="label-default">Sub-Chapter:</label>
          <input type="number" name="sub_chapter" id="sub_chapter" class="input-default" min="1" max="5" required value="{{ $chapter->sub_chapter }}">
        </div>
      </div>
      <div class="form-group">
        <label for="resume" class="label-default">Area:</label>
        <ul class="py-2 flex items-center justify-start">
          @foreach ($areas as $area)
            <li class="mr-8 text-lg">
              <input type="radio" name="area_id" value="{{$area->id}}" class="cursor-pointer" @if ($area->id === $chapter->area_id) checked @endif > {{ $area->name}}
            </li>
          @endforeach
        </ul>
      </div>
      <div class="form-group">
        <label for="description" class="label-default">Chapter description:</label>
        <textarea name="description" id="description" cols="30" rows="5" class="textarea-default">{{ $chapter->description }}</textarea>
      </div>
      <button class="btn-default" type="submit">Submit</button>
    </form>
  </section>
</x-layout>
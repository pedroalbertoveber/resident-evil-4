<x-layout title="Create Chapter">
  <section class="w-full">
    <figure class="thumbnail">
      <img src="/img/church-bg.jpg" alt="Church" class="thumbnail-img">
      <h1 class="thumbnail-title">Create a Chapter</h1>
    </figure>
    <form class="form-default mt-4" action="{{ route('chapters.store') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="form-group">
        <label for="image" class="label-default">Image</label>
        <input type="file" name="image" id="image" class="input-default cursor-pointer" accept="image/jpg, image/jpeg, image/png">
      </div>
      <div class="separater">
        <div class="form-group">
          <label for="chapter" class="label-default">Chapter:</label>
          <input type="number" name="chapter" id="chapter" class="input-default" min="1" max="5" required>
        </div>
        <div class="form-group">
          <label for="sub_chapter" class="label-default">Sub-Chapter:</label>
          <input type="number" name="sub_chapter" id="sub_chapter" class="input-default" min="1" max="5" required>
        </div>
      </div>
      <div class="form-group">
        <label for="resume" class="label-default">Area:</label>
        <ul class="py-2 flex items-center justify-start">
          @foreach ($areas as $area)
            <li class="mr-8 text-lg">
              <input type="radio" name="area_id" value="{{$area->id}}" class="cursor-pointer"> {{ $area->name}}
            </li>
          @endforeach
        </ul>
      </div>
      <div class="form-group">
        <label for="description" class="label-default">Chapter description:</label>
        <textarea name="description" id="description" cols="30" rows="5" class="textarea-default"></textarea>
      </div>
      <button class="btn-default" type="submit">Submit</button>
    </form>
  </section>
</x-layout>
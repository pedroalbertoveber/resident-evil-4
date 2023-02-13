<x-layout title="Edit Character">
  <section class="w-full">
    <figure class="thumbnail">
      <img src="/img/characters-bg.jpg" alt="All characters" class="thumbnail-img">
      <h1 class="thumbnail-title">Edit Character: {{ $character->name }}</h1>
    </figure>
    <form class="form-default mt-4" enctype="multipart/form-data" action="{{ route('characters.update', $character->id) }}" method="POST">
      @csrf
      @method('PUT')

      <div class="form-group">
        <label for="image" class="label-default">Image</label>
        <input type="file" name="image" id="image" class="input-default cursor-pointer" accept="image/jpg, image/jpeg, image/png">
      </div>
      <div class="form-group">
        <label for="name" class="label-default">Name:</label>
        <input type="text" name="name" id="name" class="input-default" required value="{{ $character->name }}">
      </div>
      <div class="form-group">
        <label for="resume" class="label-default">Resume:</label>
        <textarea name="resume" id="resume" cols="30" rows="5" class="textarea-default" style="resize: none">
          {{ $character->resume }}
        </textarea>
      </div>
      <button class="btn-default" type="submit">Edit</button>
    </form>
    <p class="mt-4 block max-w-[600px] mx-auto">Don't want to edit {{ $character->name }}? <a href="{{ route('characters.index') }}" class="link-default">Click here</a></p>
  </section>
</x-layout>
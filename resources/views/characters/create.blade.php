<x-layout title="New Character">
  <section class="w-full">
    <figure class="thumbnail">
      <img src="/img/characters-bg.jpg" alt="All characters" class="thumbnail-img">
      <h1 class="thumbnail-title">Create Character</h1>
    </figure>
    <form class="form-default mt-4" action="{{ route('characters.store') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="form-group">
        <label for="image" class="label-default">Image</label>
        <input type="file" name="image" id="image" class="input-default cursor-pointer" required accept="image/jpg, image/jpeg, image/png">
      </div>
      <div class="form-group">
        <label for="name" class="label-default">Name:</label>
        <input type="text" name="name" id="name" class="input-default" required>
      </div>
      <div class="form-group">
        <label for="resume" class="label-default">Resume:</label>
        <textarea name="resume" id="resume" cols="30" rows="5" class="textarea-default" style="resize: none"></textarea>
      </div>
      <button class="btn-default" type="submit">Submit</button>
    </form>
    <p class="mt-4 block max-w-[600px] mx-auto">Don't want to create a new character? <a href="{{ route('characters.index') }}" class="link-default">Click here</a></p>
  </section>
</x-layout>
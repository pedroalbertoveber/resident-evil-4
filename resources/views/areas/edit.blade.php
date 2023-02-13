<x-layout title="Edit Area">
  <section class="w-full">
    <figure class="thumbnail">
      <img src="/img/castle-bg.png" alt="areas" class="thumbnail-img">
      <h1 class="thumbnail-title">Edit Area {{ $area->name }}</h1>
    </figure>
    <form class="form-default mt-4" method="POST" action="{{ route('areas.update', $area->id) }}" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <div class="form-group">
        <label for="image" class="label-default">Image</label>
        <input type="file" name="image" id="image" class="input-default cursor-pointer" accept="image/jpg, image/jpeg, image/png">
      </div>
      <div class="form-group">
        <label for="name" class="label-default">Name:</label>
        <input type="text" name="name" id="name" class="input-default" required value="{{ $area->name }}">
      </div>
      <div class="form-group">
        <label for="description" class="label-default">Descrption:</label>
        <textarea name="description" id="description" cols="30" rows="5" class="textarea-default" style="resize: none">
          {{ $area->description }}
        </textarea>
      </div>
      <button class="btn-default" type="submit">Edit</button>
    </form>
    <p class="mt-4 block max-w-[600px] mx-auto">Don't want to edit area {{ $area->name }}? <a href="{{ route('areas.index') }}" class="link-default">Click here</a></p>
  </section>
</x-layout>
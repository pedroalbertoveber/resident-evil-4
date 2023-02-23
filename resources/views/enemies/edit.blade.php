<x-layout title="Edit Enemy">
  <section class="w-full">
    <figure class="thumbnail">
      <img src="/img/enemies.jpg" alt="enemies" class="thumbnail-img">
      <h1 class="thumbnail-title">Edit Enemy: {{ $enemy->name }}</h1>
    </figure>
  <form class="form-default mt-4" action="{{ route('enemies.update', $enemy->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <div class="form-group">
        <label for="image" class="label-default">Image</label>
        <input type="file" name="image" id="image" class="input-default cursor-pointer" accept="image/jpg, image/jpeg, image/png">
      </div>
      <div class="form-group">
        <label for="name" class="label-default">Name:</label>
        <input type="text" name="name" id="name" class="input-default" required value="{{ $enemy->name }}">
      </div>

      <div class="form-group">
        <label class="label-default">Areas:</label>
        <ul class="w-full flex flex-col items-start md:flex-row md:gap-4">
          @foreach ($areas as $area)
            <li class="text-lg font-bold"><input class="mr-1 cursor-pointer" type="checkbox" value="{{ $area->id }}" name="areas[]" @if (in_array($area->id, $selectedAreas)) checked @endif>{{ $area->name }}</li>
          @endforeach
        </ul>
      </div>

      <div class="form-group">
        <label for="difficulty" class="label-default">Difficulty:</label>
        <select name="difficulty" id="difficulty" class="input-default">
          <option value="Normal">Normal</option>
          <option value="Hard">Hard</option>
          <option value="Insane">Insane</option>
        </select>
      </div>

      <button class="btn-default" type="submit">Submit</button>
    </form>
    <p class="mt-4 block max-w-[600px] mx-auto">Don't want to create a new enemy? <a href="{{ route('areas.index') }}" class="link-default">Click here</a></p>
  </section>
</x-layout>
<x-layout title="New Treasure">
  <section class="w-full">
    <figure class="thumbnail">
      <img src="/img/pesetas-bg.jpg" alt="All treasures" class="thumbnail-img">
      <h1 class="thumbnail-title">Edit Treasure: {{$treasure->name}}</h1>
    </figure>
    <form class="form-default mt-4" action="{{ route('treasures.update', $treasure->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <div class="form-group">
        <label for="image" class="label-default">Image</label>
        <input type="file" name="image" id="image" class="input-default cursor-pointer" accept="image/jpg, image/jpeg, image/png">
      </div>
      <div class="form-group">
        <label for="name" class="label-default">Name:</label>
        <input type="text" name="name" id="name" class="input-default" required value="{{ $treasure->name }}">
      </div>

      <div class="form-group">
        <label class="label-default">Areas:</label>
        <ul class="w-full flex flex-col items-start md:flex-row md:gap-4">
          <li class="text-lg font-bold"><input class="mr-1 cursor-pointer" type="checkbox" value="Village" name="areas[]" @if (in_array("Village", $treasure->areas)) checked @endif>Village</li>
          <li class="text-lg font-bold"><input class="mr-1 cursor-pointer" type="checkbox" value="Castle" name="areas[]" @if (in_array("Castle", $treasure->areas)) checked @endif>Castle</li>
          <li class="text-lg font-bold"><input class="mr-1 cursor-pointer" type="checkbox" value="Island" name="areas[]" @if (in_array("Island", $treasure->areas)) checked @endif>Island</li>
        </ul>
      </div>

      <div class="separater">
        <div class="form-group">
          <label for="rarity" class="label-default">Rarity:</label>
          <select name="rarity" id="rarity" class="input-default">
            <option value="Ordinary" @if ($treasure->rarity === 'Ordinary') checked @endif>Ordinary</option>
            <option value="Rare" @if ($treasure->rarity === 'Rare') checked @endif>Rare</option>
          </select>
        </div>

        <div class="form-group mt-4 sm:mt-0">
          <label for="price" class="label-default">Price (pts):</label>
          <input type="number" step="0.1" name="price" class="input-default" placeholder="Price (pts)" value="{{ $treasure->price }}">
        </div>
      </div>
      <button class="btn-default" type="submit">Edit</button>
    </form>
    <p class="mt-4 block max-w-[600px] mx-auto">Don't want to edit {{ $treasure->name }}? <a href="{{ route('treasures.index') }}" class="link-default">Click here</a></p>
  </section>
</x-layout>
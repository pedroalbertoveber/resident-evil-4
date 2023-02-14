<x-layout title="New Treasure">
  <section class="w-full">
    <figure class="thumbnail">
      <img src="/img/pesetas-bg.jpg" alt="All treasures" class="thumbnail-img">
      <h1 class="thumbnail-title">Create a Treasure</h1>
    </figure>
    <form class="form-default mt-4" action="{{ route('treasures.store') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="form-group">
        <label for="image" class="label-default">Image</label>
        <input type="file" name="image" id="image" class="input-default cursor-pointer" required accept="image/jpg, image/jpeg, image/png">
      </div>
      <div class="form-group">
        <label for="name" class="label-default">Name:</label>
        <input type="text" name="name" id="name" class="input-default" required value="{{ old('name') }}">
      </div>

      <div class="form-group">
        <label class="label-default">Areas:</label>
        <ul class="w-full flex flex-col items-start md:flex-row md:gap-4">
          <li class="text-lg font-bold"><input class="mr-1 cursor-pointer" type="checkbox" value="Village" name="areas[]">Village</li>
          <li class="text-lg font-bold"><input class="mr-1 cursor-pointer" type="checkbox" value="Castle" name="areas[]">Castle</li>
          <li class="text-lg font-bold"><input class="mr-1 cursor-pointer" type="checkbox" value="Island" name="areas[]">Island</li>
        </ul>
      </div>

      <div class="separater">
        <div class="form-group">
          <label for="rarity" class="label-default">Rarity:</label>
          <select name="rarity" id="rarity" class="input-default">
            <option value="Ordinary">Ordinary</option>
            <option value="Rare">Rare</option>
          </select>
        </div>

        <div class="form-group mt-4 sm:mt-0">
          <label for="price" class="label-default">Price (pts):</label>
          <input type="number" step="0.1" name="price" class="input-default" placeholder="Price (pts)" value="{{ old('price') }}">
        </div>
      </div>
      <button class="btn-default" type="submit">Submit</button>
    </form>
    <p class="mt-4 block max-w-[600px] mx-auto">Don't want to create a new character? <a href="{{ route('characters.index') }}" class="link-default">Click here</a></p>
  </section>
</x-layout>
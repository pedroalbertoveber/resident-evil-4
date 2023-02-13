<x-layout title="New Gun">
  <section class="w-full">
    <figure class="thumbnail">
      <img src="/img/gun-bg.jpg" alt="All guns" class="thumbnail-img">
      <h1 class="thumbnail-title">Create a Gun</h1>
    </figure>
    <form class="form-default mt-4" action="{{ route('guns.store') }}" method="POST" enctype="multipart/form-data">
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
        <label class="label-default">Type:</label>
        <ul class="w-full flex flex-col items-start md:flex-row md:gap-4">
          <li class="text-lg font-bold"><input class="mr-1 cursor-pointer" type="radio" value="Handgun" name="type">Handgun</li>
          <li class="text-lg font-bold"><input class="mr-1 cursor-pointer" type="radio" value="Shotgun" name="type">Shotgun</li>
          <li class="text-lg font-bold"><input class="mr-1 cursor-pointer" type="radio" value="Submachine gun" name="type">Submachine gun</li>
          <li class="text-lg font-bold"><input class="mr-1 cursor-pointer" type="radio" value="Rifle" name="type">Rifle</li>
          <li class="text-lg font-bold"><input class="mr-1 cursor-pointer" type="radio" value="Special" name="type">Special</li>
        </ul>
      </div>
      <div class="separater">
        <div class="form-group">
          <label for="action" class="label-default">Action:</label>
          <select name="action" id="action" class="input-default">
            <option value="Auto">Auto</option>
            <option value="Semi-Auto">Semi-Auto</option>
            <option value="Pump-Action">Pump-Action</option>
          </select>
        </div>
        <div class="form-group mt-4 sm:mt-0">
          <label for="ammunition" class="label-default">Weapon ammunition:</label>
          <select name="ammunition" id="ammunition" class="input-default">
            <option value="9mm">9mm</option>
            <option value=".12">.12</option>
            <option value="TMP Ammo">TMP Ammo</option>
            <option value="Rifle Ammo">Rifle Ammo</option>
            <option value="Magnum Ammo">Magnum Ammo</option>
            <option value="Mines">Mines</option>
            <option value="Rocket">Rocket</option>
            <option value="Arrows">Arrows</option>
            <option value="Anti-viral">Anti-viral</option>
          </select>
        </div>
      </div>
      <div class="separater">
        <div class="form-group">
          <label for="fire_power" class="label-default">Fire Power:</label>
          <input type="number" step='0.1' name="fire_power" id="fire_power" class="input-default" value="{{ old('fire_power') }}" placeholder="Fire Power">
        </div>
        <div class="form-group">
          <label for="fire_speed" class="label-default">Fire Speed:</label>
          <input type="number" name="fire_speed" step="0.01" id="fire_speed" class="input-default" value="{{ old('fire_speed') }}" placeholder="Fire Speed shoots/s">
        </div>
      </div>
      <div class="separater">
        <div class="form-group">
          <label for="reload_speed" class="label-default">Reload Time (s):</label>
          <input type="number" name="reload_speed" id="reload_speed" class="input-default" value="{{ old('reload_speed') }}" step="0.01" placeholder="Reload Time (s)">
        </div>
        <div class="form-group">
          <label for="capacity" class="label-default">Capacity:</label>
          <input type="number"  step="1" name="capacity" id="capacity" min="1" max="250" class="input-default" value="{{ old('fire_power') }}" placeholder='Capacity'>
        </div>
      </div>
      <div class="form-group">
        <label for="initial_price" class="label-default">Initial Price (pts)</label>
        <input type="number" name="initial_price" id="initial_price" step="0.01" class="input-default" placeholder="Initial Price (pts)">
      </div>
      <button class="btn-default" type="submit">Submit</button>
    </form>
    <p class="mt-4 block max-w-[600px] mx-auto">Don't want to create a new character? <a href="{{ route('characters.index') }}" class="link-default">Click here</a></p>
  </section>
</x-layout>
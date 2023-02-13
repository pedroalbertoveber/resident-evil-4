<x-layout title="Edit {{ $gun->name }}">
  <section class="w-full">
    <figure class="thumbnail">
      <img src="/img/gun-bg.jpg" alt="All guns" class="thumbnail-img">
      <h1 class="thumbnail-title">Edit Gun: {{ $gun->name }}</h1>
    </figure>
    <form class="form-default mt-4" action="{{ route('guns.update', $gun->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <div class="form-group">
        <label for="image" class="label-default">Image</label>
        <input type="file" name="image" id="image" class="input-default cursor-pointer" accept="image/jpg, image/jpeg, image/png">
      </div>
      <div class="form-group">
        <label for="name" class="label-default">Name:</label>
        <input type="text" name="name" id="name" class="input-default" required value="{{ $gun->name }}">
      </div>
      <div class="form-group">
        <label class="label-default">Type:</label>
        <ul class="w-full flex flex-col items-start md:flex-row md:gap-4">
          <li class="text-lg font-bold"><input class="mr-1 cursor-pointer" type="radio" value="Handgun" name="type" @if ($gun->type === 'Handgun') checked @endif>Handgun</li>
          <li class="text-lg font-bold"><input class="mr-1 cursor-pointer" type="radio" value="Shotgun" name="type" @if ($gun->type === 'Shotgun') checked @endif>Shotgun</li>
          <li class="text-lg font-bold"><input class="mr-1 cursor-pointer" type="radio" value="Submachine gun" name="type" @if ($gun->type === 'Submachine gun') checked @endif>Submachine gun</li>
          <li class="text-lg font-bold"><input class="mr-1 cursor-pointer" type="radio" value="Rifle" name="type" @if ($gun->type === 'Rifle') checked @endif>Rifle</li>
          <li class="text-lg font-bold"><input class="mr-1 cursor-pointer" type="radio" value="Special" name="type" @if ($gun->type === 'Special') checked @endif>Special</li>
        </ul>
      </div>
      <div class="separater">
        <div class="form-group">
          <label for="action" class="label-default">Action:</label>
          <select name="action" id="action" class="input-default">
            <option value="Auto" @if ($gun->action === 'Auto') selected @endif>Auto</option>
            <option value="Semi-Auto" @if ($gun->action === 'Semi-Auto') selected @endif>Semi-Auto</option>
            <option value="Pump-Action" @if ($gun->action === 'Pump-Action') selected @endif>Pump-Action</option>
          </select>
        </div>
        <div class="form-group mt-4 sm:mt-0">
          <label for="ammunition" class="label-default">Weapon ammunition:</label>
          <select name="ammunition" id="ammunition" class="input-default">
            <option value="9mm" @if ($gun->ammunition === '9mm') selected @endif>9mm</option>
            <option value=".12" @if ($gun->ammunition === '.12') selected @endif>.12</option>
            <option value="TMP Ammo" @if ($gun->ammunition === 'TMP Ammo') selected @endif>TMP Ammo</option>
            <option value="Rifle Ammo" @if ($gun->ammunition === 'Rifle Ammo') selected @endif>Rifle Ammo</option>
            <option value="Magnum Ammo" @if ($gun->ammunition === 'Magnum Ammo') selected @endif>Magnum Ammo</option>
            <option value="Mines" @if ($gun->ammunition === 'Mines') selected @endif>Mines</option>
            <option value="Rocket" @if ($gun->ammunition === 'Rocket') selected @endif>Rocket</option>
            <option value="Arrows" @if ($gun->ammunition === 'Arrows') selected @endif>Arrows</option>
            <option value="Anti-viral" @if ($gun->ammunition === 'Anti-viral') selected @endif>Anti-viral</option>
          </select>
        </div>
      </div>
      <div class="separater">
        <div class="form-group">
          <label for="fire_power" class="label-default">Fire Power:</label>
          <input type="number" step='0.1' name="fire_power" id="fire_power" class="input-default" value="{{ $gun->fire_power }}" placeholder="Fire Power">
        </div>
        <div class="form-group">
          <label for="fire_speed" class="label-default">Fire Speed:</label>
          <input type="number" name="fire_speed" step="0.01" id="fire_speed" class="input-default" value="{{ $gun->fire_speed }}" placeholder="Fire Speed shoots/s">
        </div>
      </div>
      <div class="separater">
        <div class="form-group">
          <label for="reload_speed" class="label-default">Reload Time (s):</label>
          <input type="number" name="reload_speed" id="reload_speed" class="input-default" value="{{ $gun->reload_speed }}" step="0.01" placeholder="Reload Time (s)">
        </div>
        <div class="form-group">
          <label for="capacity" class="label-default">Capacity:</label>
          <input type="number"  step="1" name="capacity" id="capacity" min="1" max="250" class="input-default" value="{{ $gun->capacity }}" placeholder='Capacity'>
        </div>
      </div>
      <div class="form-group">
        <label for="initial_price" class="label-default">Initial Price (pts)</label>
        <input type="number" name="initial_price" id="initial_price" step="0.01" class="input-default" placeholder="Initial Price (pts)" value="{{ $gun->initial_price}}">
      </div>
      <button class="btn-default" type="submit">Edit</button>
    </form>
    <p class="mt-4 block max-w-[600px] mx-auto">Don't want to edit {{ $gun->name }}? <a href="{{ route('guns.index') }}" class="link-default">Click here</a></p>
  </section>
</x-layout>
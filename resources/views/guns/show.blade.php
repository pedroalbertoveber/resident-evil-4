<x-layout title="{{ $gun->name }}">
  <section class="w-full">
    <figure class="thumbnail">
      <img src="/img/gun-bg.jpg" alt="All guns" class="thumbnail-img">
      <h1 class="thumbnail-title">{{ $gun->name }}</h1>
    </figure>
    <div class="py-8 w-full flex flex-col sm:flex sm:flex-row">
      <img src="{{ asset('storage/' . $gun->image)}}" alt="{{ $gun->name }}" class="object-cover w-full sm:w-1/2 rounded-lg">
      <div class="w-full sm:w-1/2 p-4 py-0 flex flex-col items-start">
        <h2 class="py-2 text-2xl font-bold">{{ $gun->name }}</h2>
        <p class="mb-2 text-lg"><strong class="mr-2 font-bold">Type:</strong>{{ $gun->type }}</p>
        <p class="mb-2 text-lg"><strong class="mr-2 font-bold">Ammunition:</strong>{{ $gun->ammunition }}</p>
        <p class="mb-2 text-lg"><strong class="mr-2 font-bold">Fire Power:</strong>{{ $gun->fire_power }}</p>
        <p class="mb-2 text-lg"><strong class="mr-2 font-bold">Fire Speed:</strong>{{ $gun->fire_speed }} rounds/s</p>
        <p class="mb-2 text-lg"><strong class="mr-2 font-bold">Reload time:</strong>{{ $gun->reload_speed}}s</p>
        <p class="mb-2 text-lg"><strong class="mr-2 font-bold">Initial Price:</strong>{{ $gun->initial_price}}pts</p>
      </div>
    </div>
    <x-actions type="guns" :id="$gun->id" />
    <p>Do you want to go back to all characters? <a href="{{ route('guns.index') }}" class='link-default'>Click here</a></p>
  </section>
</x-layout>
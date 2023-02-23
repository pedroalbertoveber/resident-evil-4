<x-layout title="Characters">
  <section class="w-full">
    <figure class="thumbnail">
      <img src="/img/characters-bg.jpg" alt="All characters" class="thumbnail-img">
      <h1 class="thumbnail-title">{{ $character->name }}</h1>
    </figure>
    <div class="py-8 w-full flex flex-col sm:flex sm:flex-row">
      <img src="{{ asset('storage/' . $character->image)}}" alt="{{ $character->name }}" class="object-cover w-full sm:w-1/2 rounded-lg">
      <div class="w-full sm:w-1/2 sm:px-4 py-0 flex flex-col items-start">
        <h2 class="py-2 text-2xl font-bold">{{ $character->name }}</h2>
        <p class="text-lg mb-4">{{ $character->resume }}</p>

      </div>
    </div>
    @auth
    <x-actions type="characters" :id="$character->id" />
    @endauth
    <p>Do you want to go back to all characters? <a href="{{ route('characters.index') }}" class='link-default'>Click here</a></p>
  </section>
</x-layout>
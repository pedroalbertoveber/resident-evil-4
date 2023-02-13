<x-layout title="Characters">
  <section class="w-full">
    <figure class="thumbnail">
      <img src="/img/characters-bg.jpg" alt="All characters" class="thumbnail-img">
      <h1 class="thumbnail-title">{{ $character->name }}</h1>
    </figure>
    <div class="py-8 w-full">
      <img src="{{ asset('storage/' . $character->image)}}" alt="{{ $character->name }}" class="object-cover w-full rounded-lg">
      <h2 class="py-2 font-bold text-2xl">{{ $character->name }}</h2>
      <article>
        <p>{{ $character->resume }}</p>
      </article>
    </div>
    <x-actions type="characters" :id="$character->id" />
    <p>Do you want to go back to all characters? <a href="{{ route('characters.index') }}" class='link-default'>Click here</a></p>
  </section>
</x-layout>
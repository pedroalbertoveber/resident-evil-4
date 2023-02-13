<x-layout title="Area {{ $area->name }}">
  <section class="w-full">
    <figure class="thumbnail">
      <img src="/img/castle-bg.png" alt="areas" class="thumbnail-img">
      <h1 class="thumbnail-title">{{ $area->name }}</h1>
    </figure>
    <div class="py-8 w-full">
      <img src="{{ asset('storage/' . $area->image)}}" alt="{{ $area->name }}" class="object-cover w-full rounded-lg">
      <h2 class="py-2 font-bold text-2xl">{{ $area->name }}</h2>
      <article>
        <p>{{ $area->description }}</p>
      </article>
    </div>
    <x-actions type="areas" :id="$area->id" />
    <p>Do you want to go back to all characters? <a href="{{ route('areas.index') }}" class='link-default'>Click here</a></p>
  </section>
</x-layout>
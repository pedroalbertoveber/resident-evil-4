<x-layout title="Boss: {{$boss->name}}">
  <section class="w-full">
    <figure class="thumbnail">
      <img src="/img/characters-bg.jpg" alt="All characters" class="thumbnail-img">
      <h1 class="thumbnail-title">{{ $boss->name }}</h1>
    </figure>
    <div class="py-8 w-full flex flex-col sm:flex sm:flex-row">
      <img src="{{ asset('storage/' . $boss->image)}}" alt="{{ $boss->name }}" class="object-cover w-full sm:w-1/2 rounded-lg">
      <div class="w-full sm:w-1/2 sm:px-4 py-0 flex flex-col items-start">
        <h2 class="py-2 text-2xl font-bold">Boss: {{ $boss->name }}</h2>
        <p class="text-lg mb-4"><strong>Description: </strong>{{$boss->description}}</p>
      </div>
    </div>
    @auth
    <x-actions type="bosses" :id="$boss->id" />
    @endauth
    <p>Do you want to go back to area? <a href="{{ route('areas.show', $boss->area_id) }}" class='link-default'>Click here</a></p>
    
  </section>
</x-layout>
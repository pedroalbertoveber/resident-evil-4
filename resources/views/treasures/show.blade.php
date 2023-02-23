<x-layout title="{{ $treasure->name }}">
  <section class="w-full">
    <figure class="thumbnail">
      <img src="/img/pesetas-bg.jpg" alt="All treasures" class="thumbnail-img">
      <h1 class="thumbnail-title">Create a Treasure</h1>
    </figure>
    <div class="py-8 w-full flex flex-col sm:flex sm:flex-row">
      <img src="{{ asset('storage/' . $treasure->image)}}" alt="{{ $treasure->name }}" class="object-cover w-full sm:w-1/2 rounded-lg">
      <div class="w-full sm:w-1/2 p-4 py-0 flex flex-col items-start">
        <h2 class="py-2 text-2xl font-bold">{{ $treasure->name }}</h2>
        <p class="text-lg mb-1"><strong>Price: </strong>{{$treasure->price}}pts</p>
        <p class="text-lg mb-4"><strong>Rarity: </strong>{{$treasure->rarity}}</p>
        <p class="text-lg mb-2 font-bold">You can find it in:</p>
        <ul>
          @foreach($treasure->areas as $area)
            <li class="text-lg mb-1">
              <i class="bi bi-pin-map-fill mr-1"></i> {{$area}}
            </li>
          @endforeach
        </ul>
      </div>
    </div>
    @auth
    <x-actions type="treasures" :id="$treasure->id" />
    @endauth
    <p>Do you want to go back to all treasures? <a href="{{ route('treasures.index') }}" class='link-default'>Click here</a></p>
  </section>
</x-layout>
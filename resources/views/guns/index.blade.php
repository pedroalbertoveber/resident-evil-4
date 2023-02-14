<x-layout title="Guns">
  <section class="w-full">
    <figure class="thumbnail">
      <img src="/img/gun-bg.jpg" alt="All guns" class="thumbnail-img">
      <h1 class="thumbnail-title">Weapons</h1>
    </figure>
    <div class="item-container">
      @foreach($guns as $gun)
        <a href="{{ route('guns.show', $gun->id) }}" class="block item-container-item">
          <div>
          <img src="{{ asset('storage/' . $gun->image) }}" alt="{{ $gun->name}}" class="item-container-img">
          <h3 class="item-container-title">{{ $gun->name }}</h3>
        </div>
        </a>
      @endforeach
    </div>
    <p>Do you want to insert a new gun? <a href="{{ route('guns.create') }}" class="link-default">Click here</a></p>
  </section>
</x-layout>
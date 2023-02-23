<x-layout title="Treasures">
  <section class="w-full">
    <figure class="thumbnail">
      <img src="/img/pesetas-bg.jpg" alt="All treasures" class="thumbnail-img">
      <h1 class="thumbnail-title">Treasures</h1>
    </figure>
    <div class="item-container">
      @foreach($treasures as $treasure)
        <a href="{{ route('treasures.show', $treasure->id) }}" class="block item-container-item">
          <div>
          <img src="{{ asset('storage/' . $treasure->image) }}" alt="{{ $treasure->name}}" class="item-container-img">
          <h3 class="item-container-title">{{ $treasure->name }}</h3>
        </div>
        </a>
      @endforeach
    </div>
    @auth
    <p>Do you want to insert a new treasure? <a href="{{ route('treasures.create') }}" class="link-default">Click here</a></p>
    @endauth
  </section>
</x-layout>
<x-layout title="Areas">
  <section class="w-full">
    <figure class="thumbnail">
      <img src="/img/castle-bg.png" alt="Areas" class="thumbnail-img">
      <h1 class="thumbnail-title">Areas</h1>
    </figure>
    <div class="item-container">
      @foreach($areas as $area)
        <a href="{{ route('areas.show', $area->id) }}" class="block item-container-item">
          <div>
          <img src="{{ asset('storage/' . $area->image) }}" alt="{{ $area->name}}" class="item-container-img">
          <h3 class="item-container-title">{{ $area->name }}</h3>
        </div>
        </a>
      @endforeach
    </div>
    @auth
    <p>Do you want to insert a new area? <a href="{{ route('areas.create') }}" class="link-default">Click here</a></p>
    @endauth
  </section>
</x-layout>
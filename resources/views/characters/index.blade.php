<x-layout title="Characters">
  <section class="w-full">
    <figure class="thumbnail">
      <img src="/img/characters-bg.jpg" alt="All characters" class="thumbnail-img">
      <h1 class="thumbnail-title">Characters</h1>
    </figure>
    <div class="item-container">
      @foreach($characters as $character)
        <a href="{{ route('characters.show', $character->id) }}" class="block item-container-item">
          <div>
          <img src="{{ asset('storage/' . $character->image) }}" alt="{{ $character->name}}" class="item-container-img">
          <h3 class="item-container-title">{{ $character->name }}</h3>
        </div>
        </a>
      @endforeach
    </div>
    @auth
      <p>Do you want to insert a new character? <a href="{{ route('characters.create') }}" class="link-default">Click here</a></p>
    @endauth
  </section>
</x-layout>
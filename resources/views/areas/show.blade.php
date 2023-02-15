<x-layout title="Area {{ $area->name }}">
  <section class="w-full">
    <figure class="thumbnail">
      <img src="/img/castle-bg.png" alt="areas" class="thumbnail-img">
      <h1 class="thumbnail-title">{{ $area->name }}</h1>
    </figure>
    <div class="py-8 w-full flex flex-col sm:flex sm:flex-row">
      <img src="{{ asset('storage/' . $area->image)}}" alt="{{ $area->name }}" class="object-cover w-full sm:w-1/2 rounded-lg">
      <div class="w-full sm:w-1/2 p-4 py-0 flex flex-col items-start">
        <h2 class="py-2 font-bold text-2xl">{{ $area->name }}</h2>
        <p class="mb-2 text-lg">
          <strong>Descrption: </strong>{{ $area->description }}
        </p>
        <p class="text-lg font-bold mt-2">Chapters in {{ $area->name }}:</p>
        <ul class="py-4 flex flex-col flex-wrap w-full max-h-[250px] sm:max-h-[150px]">
          @foreach($area->chapters as $chapter)
            <li class="pb-2">
              <a href="{{ route('chapters.show', $chapter->id) }}" class="link-default">
                <i class="bi bi-record-fill"></i> Chapter {{ $chapter->chapter }} - {{ $chapter->sub_chapter }}
              </a>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
    <x-actions type="areas" :id="$area->id" />
    <p>Do you want to go back to all characters? <a href="{{ route('areas.index') }}" class='link-default'>Click here</a></p>
  </section>
</x-layout>
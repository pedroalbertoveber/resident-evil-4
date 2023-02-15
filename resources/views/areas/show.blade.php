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
    <div class="sub-division">
      <h2 class="sub-division-title">Bosses</h2>
    </div>
    <div class="w-full">
      <ul class="w-full py-4 flex flex-col items-center gap-4 lg:flex-row">
        @foreach ($area->bosses as $boss)
          <li class="w-full flex flex-col items-center md:flex-row lg:w-1/2 lg:gap-0">
            <img src="{{ asset('storage/' . $boss->image) }}" alt="{{ $boss->name }}" class="rounded-sm w-full h-[250px] object-cover md:w-[250px] md:h-[150px]">
            <h4 class="text-xl font-bold py-2 md:py-0 md:pl-8"><a href="{{ route('bosses.show', $boss->id)}}" class="link-default">{{ $boss->name }}</a></h4>
          </li>
        @endforeach
      </ul>
      <p class="mt-4">Do you want to add a Boss for this area? <a href="{{ route('bosses.create') }}" class="link-default">Click here</a></p>
    </div>
    <x-actions type="areas" :id="$area->id"/>
    <p>Do you want to go back to all characters? <a href="{{ route('areas.index') }}" class='link-default'>Click here</a></p>
  </section>
</x-layout>
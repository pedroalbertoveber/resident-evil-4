<x-layout title="Chapter {{$chapter->chapter}} - {{ $chapter->sub_chapter }}">
  <section class="w-full">
    <figure class="thumbnail">
      <img src="/img/church-bg.jpg" alt="Church" class="thumbnail-img">
      <h1 class="thumbnail-title">Chapter: {{ $chapter->chapter }} - {{ $chapter->sub_chapter}}</h1>
    </figure>
    <div class="py-8 w-full flex flex-col sm:flex sm:flex-row">
      @if ($chapter->image !== null)
      <img src="{{ asset('storage/' . $chapter->image)}}" alt="chapter background" class="object-cover w-full sm:w-1/2 rounded-lg">
      @else
      <img src="/img/re4-bg.jpg" alt="chapter background" class="object-cover w-full sm:w-1/2 rounded-lg">
      @endif
      <div class="w-full sm:w-1/2 p-4 py-0 flex flex-col items-start">
        <h2 class="py-2 text-2xl font-bold">Chapter {{ $chapter->chapter }} - {{ $chapter->sub_chapter}}</h2>
        <p class="text-lg mb-1"><strong>Area: </strong>{{$area}}</p>
        <p class="text-lg mb-4"><strong>Description: </strong>{{$chapter->description}}</p>
      </div>
    </div>
    <x-actions type="chapters" :id="$chapter->id" />
    <p>Do you want to go back to menu? <a href="{{ route('home') }}" class='link-default'>Click here</a></p>
  </section>
</x-layout>
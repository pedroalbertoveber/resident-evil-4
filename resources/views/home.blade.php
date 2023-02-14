<x-layout title="Home">
  <section class="w-full">
    <figure class="thumbnail">
      <img src="/img/church-bg.jpg" alt="Church" class="thumbnail-img">
      <h1 class="thumbnail-title">History</h1>
    </figure>
    <article class="flex flex-col gap-2 w-full py-4">
      <p class="text-lg">6 years later the Raccoon City incident, <a href="#" class="link-default">Leon S. Kennedy</a> has recived special training via a secret organization working under direct orders of the United State's president. It was right before he was to take on his duties of protecting the President's daughter when she was abducted.</p>
      <p class="text-lg">According to US intelligence, there was a reliable information of a sighting of a girl that looks very similiar to the President's daughter. Apparently, she was being withheld by some unidentified group of people in a rural part of Europe, therefore Leon went to there on a rescue mission.</p>

      <p class="text-lg">Leon went to there with another couple of local cops, but due a truck interrupting the trail to the village, Leon had to have a look around by his own. Leon got in a house looking for someone who could helps he to find <a href="" class="link-default">Ashlay Graham</a>, but he was sorrunded by hostil locals that've tried to kill him while. Leon had noticed that something strange was happening there.</p>

      <p class="text-lg">That strange people had killed the cops who was waiting for Leon in the car, at this moment, Leon was alone but he got to continue his mission to rescue Ashlay.</p>
    </article>
    <div class="w-full mt-4 flex flex-col">
      <div class="sub-division">
        <h2 class="sub-division-title">Chapters:</h2>
      </div>
      <div class="w-full my-4">
        <ul class="flex flex-col gap-4">
          @foreach ($chapters as $chapter)
            <li class="w-full p-4 flex flex-col items-center md:flex-row md:justify-center md:items-start border-2 border-gray-500 rounded-lg">
              @if ($chapter->image !== null)
                <img src="{{ asset('storage/' . $chapter->image) }}" alt="Chapter background" class="object-cover brightness-50 w-full mb-4 h-[250px] md:w-[150px] md:h-[150px] md:mb-0 md:mr-4">
              @else
                <img src="/img/re4-bg.jpg" alt="Chapter background" class="object-cover brightness-50 w-full mb-4 h-[250px] md:w-[150px] md:h-[150px] md:mb-0 md:mr-4">
              @endif
              <div>
                <h4 class="mb-2">
                  <a href="{{ route('chapters.show', $chapter->id) }}" class="text-lg font-bold duration-100 hover:text-red-500">Chapter {{ $chapter->chapter }} - {{ $chapter->sub_chapter }}</a>
                </h4>
                <p class="text-lg">{{ $chapter->description }}</p>
              </div>
            </li>
          @endforeach
        </ul>
      </div>
      <p class="mt-2">Do you want to add a new chapter? <a href="{{ route('chapters.create')}}" class="link-default">Click here</a></p>
    </div>
  </section>
</x-layout>
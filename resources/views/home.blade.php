<x-layout title="Home">
  <section class="w-full">
    <figure class="thumbnail">
      <img src="/img/church-bg.jpg" alt="Church" class="thumbnail-img">
      <h1 class="thumbnail-title">History</h1>
    </figure>
    <article class="flex flex-col gap-2 w-full py-4">
      <p class="text-lg"><a href="#" class="link-default">Leon S. Kennedy</a> was just a rookie when he managed to get himself involved in the horrible incident in Raccoon City. Leon took a long time until he finally forget his memories about that night. Six years later, He is working under direct orders of the United States President, his duties is protect the president's family.</p>

      <p class="text-lg"><a href="#" class="link-default">Ashlay Graham</a>, the president's daughter, is kidnaped by an unidentified group of people when she was leaving her college. According the US intelligence, there was a reliable information of a sighting of a girl that looks very similiar to the president's daughter in a lonely part of Europe. Leon goes there on a rescue mission, but he did not know that he was getting into another nightmare again.</p>

    </article>
    <div class="w-full mt-4 flex flex-col">
      <div class="sub-division flex justify-between items-end">
        <h2 class="sub-division-title">Chapter: {{ $selected }}</h2>
        <ul class="flex pb-4">
          <li class="text-lg font-bold">
            <a href="{{ route('home', ['chapter' => '1'])}}" class="link-default" @if ($selected == 1 ) style="color: red" @endif>
              1
            </a>
          </li>
          <li class="ml-4 text-lg font-bold">
            <a href="{{ route('home', ['chapter' => '2'])}}" class="link-default" @if ($selected == 2 ) style="color: red" @endif>
              2
            </a>
          </li>
          <li class="ml-4 text-lg font-bold">
            <a href="{{ route('home', ['chapter' => '3'])}}" class="link-default" @if ($selected == 3 ) style="color: red" @endif>
              3
            </a>
          </li>
          <li class="ml-4 text-lg font-bold">
            <a href="{{ route('home', ['chapter' => '4'])}}" class="link-default" @if ($selected == 4) style="color: red" @endif>
              4
            </a>
          </li>
          <li class="ml-4 text-lg font-bold">
            <a href="{{ route('home', ['chapter' => '5'])}}" class="link-default" @if ($selected == 5) style="color: red" @endif>
              5
            </a>
          </li>
        </ul>
      </div>
      <div class="w-full my-4">
        <ul class="flex flex-col gap-4">
          @foreach ($chapters as $chapter)
            <li class="w-full p-4 flex flex-col items-center md:flex-row md:justify-start md:items-start border-2 border-gray-500 rounded-lg">
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
        <ul class="flex justify-between items-center py-4 w-full">
          @if ($selected > 1)
            <li class="text-lg justify-self-start">
              <a href="{{ route('home', ['chapter' => ($selected - 1)])}}" class="link-default">
                << Chapter {{ $selected - 1 }}
              </a>
            </li>
          @endif

          @if ($selected < 5)
            <li class="text-lg">
              <a href="{{ route('home', ['chapter' => ($selected + 1)])}}" class="link-default">
                Chapter {{ $selected + 1 }} >> 
              </a>
            </li>
          @endif

          @if ($selected > 1)
          @endif
        </ul>
      </div>
      @auth
      <p class="mt-2">Do you want to add a new chapter? <a href="{{ route('chapters.create')}}" class="link-default">Click here</a></p>
      @endauth
    </div>
  </section>
</x-layout>
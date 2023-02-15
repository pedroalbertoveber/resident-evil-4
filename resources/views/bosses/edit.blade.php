<x-layout title="Edit Boss: {{ $boss->name }}">
  <section class="w-full">
    <figure class="thumbnail">
      <img src="/img/bosses-bg.jpg" alt="Boss" class="thumbnail-img">
      <h1 class="thumbnail-title">Edit Boss: {{ $boss->name }}</h1>
    </figure>
    <form class="form-default mt-4" action="{{ route('bosses.update', $boss->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <div class="form-group">
        <label for="image" class="label-default">Image</label>
        <input type="file" name="image" id="image" class="input-default cursor-pointer" accept="image/jpg, image/jpeg, image/png">
      </div>
      <div class="form-group">
        <label for="name" class="label-default">Name:</label>
        <input type="text" name="name" id="name" class="input-default" required value="{{ $boss->name }}">
      </div>
      <div class="form-group">
        <label for="resume" class="label-default">Area:</label>
        <ul class="py-2 flex items-center justify-start">
          @foreach ($areas as $area)
            <li class="mr-8 text-lg">
              <input type="radio" name="area_id" value="{{$area->id}}" class="cursor-pointer" @if ($boss->area_id === $area->id) checked @endif> {{ $area->name}}
            </li>
          @endforeach
        </ul>
      </div>
      <div class="form-group">
        <label for="description" class="label-default">Description:</label>
        <textarea name="description" id="description" cols="30" rows="5" class="textarea-default" style="resize: none">{{ $boss->description }}</textarea>
      </div>
      <button class="btn-default" type="submit">Edit</button>
    </form>
    <p class="mt-4 block max-w-[600px] mx-auto">Don't want to edit {{ $boss->name }}? <a href="{{ route('areas.show', $boss->area_id) }}" class="link-default">Click here</a></p>
  </section>
</x-layout>
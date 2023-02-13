<div class="w-full flex flex-col items-center gap-1 mb-4 sm:flex-row sm:justify-start sm:gap-2">
  <a class="w-full block text-center cursor-pointer bg-orange-400 hover:bg-orange-500 duration-150 py-1 font-bold text-gray-200 rounded-sm sm:w-40" href="{{ '/' . $type . '/edit/' . $id }}">
    <i class="bi bi-pencil-fill mr-1"></i> Edit
  </a>
  <form class="w-full" method="POST" action="{{ '/' . $type . '/delete/' . $id }}">
    @csrf
    @method('DELETE')
    
    <button type="submit" class="w-full bg-red-500 hover:bg-red-600 duration-150 py-1 font-bold text-gray-200 rounded-sm sm:w-40">
      <i class="bi bi-trash3-fill mr-1"></i> Delete
    </button>
  </form>
</div>
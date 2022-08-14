@props(['route', 'id'])

<form method="POST" action="{{route($route, $id)}}" class="inline-block">
  @csrf
  @method('delete')
  <button class="bg-red-400 px-4 py-1 rounded text-red-50" onclick="return confirm('are you sure?')">Delete</button>
</form>
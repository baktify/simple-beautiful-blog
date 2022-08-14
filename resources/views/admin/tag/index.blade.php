@extends('admin.layouts.app')

@section('content')
  <!-- Page title -->
  <h1 class="text-2xl font-semibold tracking-wide text-gray-600">Tags</h1>
  <a href="{{route('tags.create')}}" class="inline-block bg-green-500 text-green-50 px-4 py-1 rounded">Add new</a>
  
  <table class="min-w-full border-2 border-gray-300 divide-y divide-gray-300">
    <thead class="bg-gray-200 uppercase">
    <tr>
      <th class="text-left px-3 py-2 font-medium text-sm">ID</th>
      <th class="text-left px-3 py-2 font-medium text-sm">Name</th>
      <th class="text-left px-3 py-2 font-medium text-sm">Actions</th>
    </tr>
    </thead>
    <tbody class="divide-y divide-gray-300">
    @forelse($tags as $tag)
      <tr>
        <td class="px-3 py-2 text-sm">{{$tag->id}}</td>
        <td class="px-3 py-2 text-sm">{{$tag->name}}</td>
        <td class="px-3 py-2 text-sm">
          <a href="{{route('tags.edit', $tag->id)}}" class="bg-yellow-500 px-4 py-1 rounded text-yellow-50">Edit</a>
          <x-admin.delete-button route="tags.destroy" id="{{$tag->id}}" />
        </td>
      </tr>
    @empty
      <tr>
        <td class="px-3 py-2 text-sm">Empty</td>
        <td class="px-3 py-2 text-sm">Not tags available</td>
        <td class="px-3 py-2 text-sm">
        </td>
      </tr>
    @endforelse
    </tbody>
  </table>
@endsection

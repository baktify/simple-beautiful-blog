@extends('admin.layouts.app')

@section('content')
  <!-- Page title -->
  <h1 class="text-2xl font-semibold tracking-wide text-gray-600">Categories</h1>
  <a href="{{route('categories.create')}}" class="inline-block bg-green-500 text-green-50 px-4 py-1 rounded">Add new</a>
  
  <table class="min-w-full border-2 border-gray-300 divide-y divide-gray-300">
    <thead class="bg-gray-200 uppercase">
    <tr>
      <th class="text-left px-3 py-2 font-medium text-sm">ID</th>
      <th class="text-left px-3 py-2 font-medium text-sm">Name</th>
      <th class="text-left px-3 py-2 font-medium text-sm">Actions</th>
    </tr>
    </thead>
    <tbody class="divide-y divide-gray-300">
    @forelse($categories as $category)
      <tr>
        <td class="px-3 py-2 text-sm">{{$category->id}}</td>
        <td class="px-3 py-2 text-sm">{{$category->name}}</td>
        <td class="px-3 py-2 text-sm">
          <a href="{{route('categories.edit', $category->id)}}" class="bg-yellow-500 px-4 py-1 rounded text-yellow-50">Edit</a>
          <x-admin.delete-button route="categories.destroy" id="{{$category->id}}"></x-admin.delete-button>
        </td>
      </tr>
      @empty
        <tr>
          <td class="px-3 py-2 text-sm">Empty</td>
          <td class="px-3 py-2 text-sm">Not categories available</td>
          <td class="px-3 py-2 text-sm">
          </td>
        </tr>
      @endforelse
    </tbody>
  </table>
@endsection

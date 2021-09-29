@extends('admin.layouts.app')

@section('content')
  <!-- Page title -->
  <h1 class="text-2xl font-semibold tracking-wide text-gray-600">Articles</h1>
  <a href="{{route('articles.create')}}" class="inline-block bg-green-500 text-green-50 px-4 py-1 rounded">Add new</a>
  
  <table class="min-w-full border-2 border-gray-300 divide-y divide-gray-300">
    <thead class="bg-gray-200 uppercase">
    <tr>
      <th class="text-left px-3 py-2 font-medium text-sm">ID</th>
      <th class="text-left px-3 py-2 font-medium text-sm">Title</th>
      <th class="text-left px-3 py-2 font-medium text-sm">Category</th>
      <th class="text-left px-3 py-2 font-medium text-sm">Tags</th>
      <th class="text-left px-3 py-2 font-medium text-sm">Image</th>
      <th class="text-left px-3 py-2 font-medium text-sm">Actions</th>
    </tr>
    </thead>
    <tbody class="divide-y divide-gray-300">
    @forelse($articles as $article)
      <tr>
        <td class="px-3 py-2 text-sm">{{$article->id}}</td>
        <td class="px-3 py-2 text-sm">{{$article->title}}</td>
        <td class="px-3 py-2 text-sm">{{$article->showCategory()}}</td>
        <td class="px-3 py-2 text-sm">{{$article->showTags()}}</td>
        <td class="px-3 py-2 text-sm">
          @if($article->hasImage())
            @if(\Illuminate\Support\Str::startsWith($article->image, 'http'))
              <img src="{{$article->image}}" alt="image" class="w-20 h-14">
            @else
              <img src="/{{$article->image}}" alt="image" class="w-20 h-14">
            @endif
          @else
            No image
          @endif
        </td>
        <td class="px-3 py-2 text-sm">
          <a href="{{route('articles.edit', $article->id)}}" class="bg-yellow-500 px-4 py-1 rounded text-yellow-50">Edit</a>
          <x-admin.delete-button route="articles.destroy" id="{{$article->id}}"></x-admin.delete-button>
        </td>
      </tr>
    @empty
      <tr>
        <td class="px-3 py-2 text-sm">Null</td>
        <td class="px-3 py-2 text-sm">No articles available</td>
        <td class="px-3 py-2 text-sm">Empty</td>
        <td class="px-3 py-2 text-sm">Empty</td>
        <td class="px-3 py-2 text-sm">Empty</td>
        <td class="px-3 py-2 text-sm">Empty</td>
      </tr>
    @endforelse
    </tbody>
  </table>
@endsection

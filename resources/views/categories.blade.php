@extends('layouts.app')

@section('content')
  <div class="space-y-2 mb-8 flex flex-col items-center">
    @forelse($categories as $category)
      <a href="{{route('categoryArticles', $category->id)}}" class="text-cyan-400 font-semibold">{{$category->name}}</a>
    @empty
      <h2 class="text-4xl -mb-6 self-start">No categories found</h2>
    @endforelse
  </div>
@endsection
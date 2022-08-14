@extends('layouts.app')

@section('content')
  <div class="space-y-2 mb-8 flex flex-col items-center">
    @forelse($tags as $tag)
      <a href="{{route('tagArticles', $tag->id)}}"># {{$tag->name}}</a>
    @empty
      <h2 class="text-4xl -mb-6 self-start">No tags found</h2>
    @endforelse
  </div>
@endsection
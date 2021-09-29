@extends('layouts.app')

@section('content')
  <div class="space-y-2 mb-8 flex flex-col items-center">
    @foreach($tags as $tag)
      <a href="{{route('tagArticles', $tag->id)}}"># {{$tag->name}}</a>
    @endforeach
  </div>
@endsection
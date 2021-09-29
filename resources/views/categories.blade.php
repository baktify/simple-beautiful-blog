@extends('layouts.app')

@section('content')
  <div class="space-y-2 mb-8 flex flex-col items-center">
    @foreach($categories as $category)
      <a href="{{route('categoryArticles', $category->id)}}" class="text-cyan-400 font-semibold">{{$category->name}}</a>
    @endforeach
  </div>
@endsection
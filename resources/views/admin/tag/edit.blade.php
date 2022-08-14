@extends('admin.layouts.app')

@section('content')
  <!-- Page title -->
  <h1 class="text-2xl font-semibold tracking-wide text-gray-600">Adding a tag</h1>
  <div class="h-1 bg-gray-300"></div>
  
  <form action="{{route('tags.update', $tag->id)}}" method="POST" class="space-y-5">
    @csrf
    @method('PUT')
    <div class="space-y-2">
      <label class="px-2 font-semibold" for="">Name</label>
      <div class="w-3/5">
        <input type="text" name="id" hidden value="{{$tag->id}}">
        <input type="text" name="name" value="@if(old('name')) {{old('name')}} @else {{$tag->name}} @endif" class="w-full px-2 py-1 rounded-md placeholder-gray-300 outline-none focus:ring-0 text-gray-500 border border-gray-300 shadow">
        @error('name')
        <x-admin.error>{{$message}}</x-admin.error>
        @enderror
      </div>
    </div>
    
    <!-- Submit button -->
    <div class="space-y-2">
      <div class="">
        <button class="px-5 py-1.5 rounded-md border-2 bg-purple-600 text-green-50" type="submit">Edit</button>
      </div>
    </div>
  </form>
@endsection

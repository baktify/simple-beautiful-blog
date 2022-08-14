@extends('admin.layouts.app')

@section('content')
  <!-- Page title -->
  <h1 class="text-2xl font-semibold tracking-wide text-gray-600">Adding a tag</h1>
  <div class="h-1 bg-gray-300"></div>

  <form method="POST" action="{{route('tags.store')}}" class="space-y-5">
    @csrf
    <div class="space-y-2">
      <label class="px-2 font-semibold" for="">Name</label>
      <div class="w-3/5">
        <input type="text" name="name" placeholder="Tag 1" autofocus class="w-full px-2 py-1 rounded-md placeholder-gray-300 outline-none focus:ring-0 text-gray-500 border border-gray-300 shadow">
        @error('name')
        <x-admin.error>{{$message}}</x-admin.error>
        @enderror
      </div>
    </div>

    <!-- Submit button -->
    <div class="space-y-2">
      <div class="">
        <button class="px-5 py-1.5 rounded-md border-2 bg-purple-600 text-green-50" type="submit">Add</button>
      </div>
    </div>
  </form>
@endsection

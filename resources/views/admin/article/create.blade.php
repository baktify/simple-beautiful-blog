@extends('admin.layouts.app')

@section('content')
  <!-- Page title -->
  <h1 class="text-2xl font-semibold tracking-wide text-gray-600">Adding an article</h1>
  <div class="h-1 bg-gray-300"></div>
  <form method="POST" action="{{route('articles.store')}}" enctype="multipart/form-data" class="space-y-5">
  @csrf
  <!-- Title -->
    <div class="space-y-2">
      <label class="px-2 font-semibold" for="">Title</label>
      <div class="w-3/5">
        <input type="text" name="title" placeholder="My title 1" value="{{old('title')}}" class="w-full px-2 py-1 rounded-md placeholder-gray-300 outline-none focus:ring-0 text-gray-500 border border-gray-300">
        @error('title')
        <x-admin.error>{{$message}}</x-admin.error>
        @enderror
      </div>
    </div>
    
    <!-- Description -->
    <div class="space-y-2">
      <label class="px-2 font-semibold" for="">Description</label>
      <div class="w-3/5">
        <textarea name="full_text" placeholder="Lorem ipsum 200" rows="7" class="w-full px-2 py-1 rounded-md placeholder-gray-300 outline-none focus:ring-0 text-gray-500 border border-gray-300">{{old('full_text')}}</textarea>
        @error('full_text')
        <x-admin.error>{{$message}}</x-admin.error>
        @enderror
      </div>
    </div>
    
    <!-- Image -->
    <div class="space-y-2">
      <label class="px-2 font-semibold" for="">Image</label>
      <div class="w-1/2">
        <input type="file" name="image" placeholder="My title 1" class="w-full px-2 py-1 rounded-md outline-none focus:ring-0 text-gray-500 border border-gray-300">
        @error('image')
        <x-admin.error>{{$message}}</x-admin.error>
        @enderror
      </div>
    </div>
    
    <!-- Category -->
    <div class="space-y-2">
      <label class="px-2 font-semibold" for="">Category</label>
      <div class="w-1/2">
        <select name="category_id" id="" class="w-full px-2 py-1 rounded-md placeholder-gray-300 outline-none focus:ring-0 text-gray-500 border border-gray-300">
          <option value="">Not selected</option>
          @foreach($categories as $category)
            <option @if(old('category_id') == $category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
          @endforeach
        </select>
        @error('category_id')
        <x-admin.error>{{$message}}</x-admin.error>
        @enderror
      </div>
    </div>
    
    <!-- Tags -->
    <div class="space-y-2">
      <label class="px-2 font-semibold" for="">Tags</label>
      <div class="w-1/2">
        <select name="tags[]" id="" multiple class="w-full px-2 py-1 rounded-md outline-none focus:ring-0 text-gray-500 border border-gray-300">
          @foreach($tags as $tag)
            <option @if(old('tags') !== NULL && in_array($tag->id, old('tags'))) selected @endif value="{{$tag->id}}">{{$tag->name}}</option>
          @endforeach
        </select>
        @error('tags')
        <x-admin.error>{{$message}}</x-admin.error>
        @enderror
      </div>
    </div>
    
    <!-- Submit button -->
    <div class="space-y-2">
      <div class="">
        <button class="px-5 py-1.5 rounded-md border border-gray-300 bg-purple-600 text-green-50" type="submit">
          Add
        </button>
      </div>
    </div>
  </form>
@endsection

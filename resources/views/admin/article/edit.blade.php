@extends('admin.layouts.app')

@section('content')
  <!-- Page title -->
  <h1 class="text-2xl font-semibold tracking-wide text-gray-600">Editing an article</h1>
  <div class="h-1 bg-gray-300"></div>
  
  <form method="POST" action="{{route('articles.update', $article->id)}}" class="space-y-5" enctype="multipart/form-data">
  @csrf
  @method('put')
  <!-- Title -->
    <div class="space-y-2">
      <label class="px-2 font-semibold" for="">Title</label>
      <div class="w-3/5">
        <input type="text" name="title" placeholder="Your title.." value="@if(!is_null(old('title'))) {{old('title')}} @else {{$article->title}} @endif " class="w-full px-2 py-1 rounded-md placeholder-gray-300 outline-none focus:ring-0 text-gray-500 border border-gray-300">
        @error('title')
        <x-admin.error>{{$message}}</x-admin.error>
        @enderror
      </div>
    </div>
    
    <!-- Description -->
    <div class="space-y-2">
      <label class="px-2 font-semibold" for="">Description</label>
      <div class="w-3/5">
        <textarea name="full_text" placeholder="Lorem ipsum 200" rows="7" class="w-full px-2 py-1 rounded-md placeholder-gray-300 outline-none focus:ring-0 text-gray-500 border border-gray-300">@if(!is_null(old('full_text'))) {{old('full_text')}} @else {{$article->full_text}} @endif</textarea>
        @error('full_text')
        <x-admin.error>{{$message}}</x-admin.error>
        @enderror
      </div>
    </div>
    
    <!-- Image -->
    <div class="space-y-2">
      <label class="px-2 font-semibold" for="">Image</label>
      @if($article->hasImage())
        @if(\Illuminate\Support\Str::startsWith($article->image, 'http'))
          <img src="{{$article->image}}" alt="image" class="w-20 h-14">
        @else
          <img src="/{{$article->image}}" alt="image" class="w-20 h-14">
        @endif
      @endif
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
            <option value="{{$category->id}}"
                @if(old('category_id') == $category->id) selected
                @elseif($article->hasCategory())
                @if($selectedCategory->id == $category->id) selected @endif
                @endif>
              {{$category->name}}
            </option>
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
        <select multiple name="tags[]" id="" class="w-full px-2 py-1 rounded-md outline-none focus:ring-0 text-gray-500 border border-gray-300">
          @foreach($tags as $tag)
            <option value="{{$tag->id}}"
                @if(old('tags') !== NULL && in_array($tag->id, old('tags'))) selected
                @elseif($article->hasTags())
                @if(in_array($tag->id, $article->selectedTags())) selected @endif
                @endif >
              {{$tag->name}}
            </option>
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
        <button type="submit" class="px-5 py-1.5 rounded-md border border-gray-300 bg-purple-600 text-green-50">
          Edit
        </button>
      </div>
    </div>
  </form>
@endsection

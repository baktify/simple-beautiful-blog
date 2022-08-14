@extends('layouts.app')

@section('content')
  <div class="shadow-xl bg-white text-gray-700">
    @if($article->hasImage())
      @if(\Illuminate\Support\Str::startsWith($article->image, 'http'))
        <img src="{{$article->image}}" alt="image" class="w-full object-cover">
      @else
        <img src="/{{$article->image}}" alt="image" class="w-full object-cover">
      @endif
    @endif
    <div class="pt-6 pb-14 px-10 flex flex-col">
      <h2 class="text-4xl text-center text-gray-700 font-semibold tracking-wide font-arch">{{$article->title}}</h2>
      <a href="{{route('categoryArticles', $article->category->id)}}" class="text-cyan-400 font-semibold text-center py-2">{{$article->showCategory()}}</a>
      <p class="mb-4">{{$article->full_text}}</p>
      <div class="self-center pt-2">
        @foreach($article->tags as $tag)
          <a href="{{route('tagArticles', $tag->id)}}" class="text-sm border border-indigo-500 text-indigo-500 px-4 py-1.5 font-bold">#{{$tag->name}}</a>
        @endforeach
      </div>
      
      <!-- Comments -->
      <h2 class="pt-8 pl-1 text-xl font-semibold text-gray-600 ">Comments({{$comments->count()}})</h2>
      <div class="h-px w-32 bg-gray-400 mt-2 mb-2"></div>
      
      <div class="mb-4">
        @auth
          <form action="{{route('comment')}}" method="POST">
            @csrf
            <input type="hidden" name="article_id" value="{{$article->id}}">
            @error('message')
            <x-error>{{$message}}</x-error>
            @enderror
            <textarea type="text" name="message" class="w-full bg-gray-200 outline-none py-2 px-2 border-none focus:border-none focus:outline-none" rows="1" placeholder="Leave a comment"></textarea>
            <div>
            <button type="submit" class="bg-green-100 px-4 py-px rounded-sm font-semibold text-green-700 border border-green-700">Submit</button>
            </div>
          </form>
        @endauth
        @guest
          <p><a href="#" class="font-bold text-blue-400">Log in</a> to write a comment</p>
        @endguest
      
      </div>
      
      <div id="comments" class="divide-y-2 space-y-4">
        @forelse($comments as $comment)
          <div>
            <div class="font-bold text-lg">{{$comment->user->name}}
              <span class="font-normal text-sm italic">{{$comment->created_at->diffForHumans()}}</span>
            </div>
            <div class="pl-2 text-sm">{{$comment->message}}</div>
          </div>
        @empty
          {{--          <div class="text-gray-700">No comments found</div>--}}
        @endforelse
      </div>
    
    </div>
  </div>

@endsection
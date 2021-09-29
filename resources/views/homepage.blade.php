@extends('layouts.app')

@section('content')
  <div class="space-y-16 mb-8">
    @forelse($articles as $article)
      <div class="shadow-xl bg-white">
{{--        @if(!is_null($article->image))--}}
          <img src="{{$article->showImage()}}" alt="" class="w-full h-96 object-cover">
{{--        @else--}}
{{--          <img src="/images/no-image.png" alt="" class="w-full h-96 object-cover">--}}
{{--        @endif--}}
        <div class="pt-6 pb-14 px-10 flex flex-col">
          <a href="{{route('article.show', $article->id)}}">
            <h2 class="text-4xl text-center text-gray-700 font-semibold tracking-wide font-arch">{{$article->title}}</h2>
          </a>
          <a href="{{route('categoryArticles', $article->category->id)}}" class="text-cyan-400 font-semibold text-center py-2">{{$article->showCategory()}}</a>
          <p class="line-clamp-3 mb-3 ">{{$article->full_text}}</p>
          <div class="self-end">
            @foreach($article->tags as $tag)
              <a href="{{route('tagArticles', $tag->id)}}" class="text-sm text-indigo-300 font-bold">#{{$tag->name }}</a>
            @endforeach
          </div>
          <a href="{{route('article.show', $article->id)}}" class="self-center px-2 py-1 border text-lg border-cyan-600 text-cyan-600 font-medium">
            Continue reading
          </a>
        </div>
      </div>
    @empty
      <h2 class="text-4xl -mb-6">No articles found</h2>
    @endforelse
  </div>
  {{$articles->links()}}
@endsection
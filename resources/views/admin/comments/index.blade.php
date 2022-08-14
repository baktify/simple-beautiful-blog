@extends('admin.layouts.app')

@section('content')
  <!-- Page title -->
  <h1 class="text-2xl font-semibold tracking-wide text-gray-600">Comments</h1>
  
  <table class="min-w-full border-2 border-gray-300 divide-y divide-gray-300">
    <thead class="bg-gray-200 uppercase">
    <tr>
      <th class="text-left px-3 py-2 font-medium text-sm">ID</th>
      <th class="text-left px-3 py-2 font-medium text-sm">Message</th>
      <th class="text-left px-3 py-2 font-medium text-sm">Article ID</th>
      <th class="text-left px-3 py-2 font-medium text-sm">User ID</th>
      <th class="text-left px-3 py-2 font-medium text-sm">Date</th>
      <th class="text-left px-3 py-2 font-medium text-sm">Actions</th>
    </tr>
    </thead>
    <tbody class="divide-y divide-gray-300">
    @forelse($comments as $comment)
      <tr>
        <td class="px-3 py-2 text-sm">{{$comment->id}}</td>
        <td class="px-3 py-2 text-sm">{{$comment->message}}</td>
        <td class="px-3 py-2 text-sm">{{$comment->article->id}}</td>
        <td class="px-3 py-2 text-sm">{{$comment->user->id}}</td>
        <td class="px-3 py-2 text-sm">{{$comment->created_at->diffForHumans()}}</td>
        <td class="px-3 py-2 text-sm">
          <x-admin.delete-button route="comments.destroy" id="{{$comment->id}}"></x-admin.delete-button>
        </td>
      </tr>
    @empty
      <tr>
        <td class="px-3 py-2 text-sm">Null</td>
        <td class="px-3 py-2 text-sm">No comments available</td>
        <td class="px-3 py-2 text-sm">Empty</td>
        <td class="px-3 py-2 text-sm">Empty</td>
        <td class="px-3 py-2 text-sm">Empty</td>
        <td class="px-3 py-2 text-sm">Empty</td>
      </tr>
    @endforelse
    </tbody>
  </table>
@endsection

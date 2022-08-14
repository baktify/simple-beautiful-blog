<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TagStoreRequest;
use App\Http\Requests\TagUpdateRequest;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return view('admin.tag.index', compact('tags'));
    }

    public function create()
    {
        return view('admin.tag.create');
    }

    public function store(TagStoreRequest $request)
    {
        $tag = Tag::add($request->validated());
        return $this->openIndexPage();
    }

    public function edit(Tag $tag)
    {
        return view('admin.tag.edit', compact('tag'));
    }

    public function update(TagUpdateRequest $request, Tag $tag)
    {
        $tag->edit($request->validated());
        return $this->openIndexPage();
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();
        return $this->openIndexPage();
    }

    public function openIndexPage()
    {
        return redirect()->route('tags.index');
    }
}

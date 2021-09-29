<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleStoreRequest;
use App\Http\Requests\ArticleUpdateRequest;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with(['category', 'tags'])->get();
        return view('admin.article.index', compact('articles'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.article.create', compact('categories', 'tags'));
    }

    public function store(ArticleStoreRequest $request)
    {
        $article = Article::add($request->validated());
        $article->setTags($request->tags);
        $article->setImage($request->image);
        return redirect()->route('articles.index');
    }

    public function edit(Article $article)
    {
        $categories = Category::all();
        $tags = Tag::all();
        $selectedCategory = $article->category;
        $selectedTags = $article->selectedTags();
        return view('admin.article.edit', compact([
                'article',
                'categories',
                'tags',
                'selectedCategory',
                'selectedTags'
            ])
        );
    }

    public function update(ArticleUpdateRequest $request, Article $article)
    {
        $article->update($request->validated());
        $article->setTags($request->tags);
        $article->setImage($request->image);
        return redirect()->route('articles.index');
    }

    public function destroy(Article $article)
    {
        $article->removeImage($article->image);
        $article->delete();
        return redirect()->route('articles.index');
    }
}

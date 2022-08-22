<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentCreateRequest;
use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Tag;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(4);
        return view('homepage', compact('articles'));
    }

    public function about()
    {
        return view('about');
    }

    public function article(Article $article)
    {
        $comments = $article->comments;
        return view('article', compact('article', 'comments'));
    }

    public function tags()
    {
        $tags = Tag::all();
        return view('tags', compact('tags'));
    }

    public function tag(Tag $tag)
    {
        $articles = $tag->articles()->paginate(4);
        return view('homepage', compact('articles'));
    }

    public function categories()
    {
        $categories = Category::all();
        return view('categories', compact('categories'));
    }

    public function category(Category $category)
    {
        $articles = $category->articles()->paginate(4);
        return view('homepage', compact('articles'));
    }

    public function comment(CommentCreateRequest $request)
    {
        $user_id = Auth::user()->id;
        Comment::add($request->validated(), auth()->user()->id);
        return redirect()->back();
    }
}

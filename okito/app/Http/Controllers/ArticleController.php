<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $Article = Article::all();
        return view('Article.index', compact('Article'));
    }

    public function create()
    {
        return view('Article.create');
    }

    public function store(Request $request)
    {
        $Article = Article::create($request->all());
        return redirect()->route('Article.index')
                        ->with('success','Article created successfully.');
    }

    public function show(Article $Article)
    {
        return view('Article.show',compact('Article'));
    }

    public function edit(Article $Article)
    {
        return view('Article.edit',compact('Article'));
    }

    public function update(Request $request, Article $Article)
    {
        $Article->update($request->all());
        return redirect()->route('Article.index')
                        ->with('success','Article updated successfully');
    }

    public function destroy(Article $Article)
    {
        $Article->delete();
        return redirect()->route('Article.index')
                        ->with('success','Article deleted successfully');
    }
}

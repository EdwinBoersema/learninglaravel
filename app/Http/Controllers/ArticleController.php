<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // show all articles
    public function showAll() {

        return view('simple.articles.index', [
            'articles' => Article::get()
        ]);
    }
    
    // show article
    public function show($id) {
        $article = Article::find($id);

        return view('simple.articles.show', [
            'article' => $article
        ]);
    }

    // create article

    public function create() {
        return view('simple.articles.create');
    }

    public function store() {
        \request()->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $article = new Article();

        $article->title = request('title');
        $article->content = request('content');

        $article->save();

        return \redirect('articles');
    }

    public function edit($id) {
        $article = Article::find($id);

        return \view('simple.articles.edit', compact('article'));
    }

    public function update($id) {
        \request()->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $article = Article::find($id);

        $article->title = request('title');
        $article->content = request('content');

        $article->save();

        return \redirect('/articles/'. $article->id);
    }
}

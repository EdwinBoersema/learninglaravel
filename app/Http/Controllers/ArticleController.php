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
    public function show(Article $article) {

        return view('simple.articles.show', [
            'article' => $article
        ]);
    }

    // create article
    public function create() {
        return view('simple.articles.create');
    }

    public function store() {
        Article::create($this->validateArticle());

        return redirect('articles');
    }

    // edit article
    public function edit(Article $article) {

        return view('simple.articles.edit', compact('article'));
    }

    public function update(Article $article) {
        $article->update($this->validateArticle());

        return redirect($article->path());
    }

    protected function validateArticle() {
        return request()->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
    }
}

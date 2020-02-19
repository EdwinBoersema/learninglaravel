<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // show all articles
    public function showAll() {

        return view('simple.articles', [
            'articles' => Article::paginate(2)
        ]);
    }
    
    // show article
    public function show($id) {
        $article = Article::find($id);

        return view('simple.article.show', [
            'article' => $article
        ]);
    }
}

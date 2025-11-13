<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticlesController extends Controller
{
    public function show($id)
    {
        $article = Article::with(['category', 'writer'])->findOrFail($id);

        return view('articles.show', compact('article'));
    }
}

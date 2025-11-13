<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
class HomeController extends Controller
{
    public function index(){
        $latestArticles = Article::latest()->take(3)->get();
        return view('Main.HomePage')->with('article' , $latestArticles);
    }
}

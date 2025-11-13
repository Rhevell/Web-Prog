<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoriesController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('categories.index')->with('categories', $categories);
    }


    public function show($id) {
        $category = Category::findOrFail($id);
        $articles = $category->articles;
        return view('categories.show', compact('category', 'articles'));
    }
}

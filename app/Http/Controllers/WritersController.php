<?php

namespace App\Http\Controllers;

use App\Models\Writer;

class WritersController extends Controller
{
    public function index()
    {
        $writers = Writer::all();

        return view('writers.index', compact('writers'));
    }

    public function show($id)
    {
        $writer = Writer::with('articles')->findOrFail($id);
        $articles = $writer->articles;

        return view('writers.show', compact('writer', 'articles'));
    }
}

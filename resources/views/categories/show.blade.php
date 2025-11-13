@extends('layout.master')

@section('content')
    <h2>{{ $category->name }}</h2>
    <div class="row">
        @foreach ($articles as $article)
            <div class="col-md-4">
                <div class="card mb-4 h-100">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-text">{{ Str::limit($article->content, 100) }}</p>
                    </div>
                    <div class="card-footer text-muted">
                        {{ $article->date }} by {{ $article->writer->name }}
                        <a href="{{ route('articles.show', $article->id) }}" class="btn btn-primary btn-sm float-end">Read More...</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
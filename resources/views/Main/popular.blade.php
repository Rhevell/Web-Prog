@extends('layouts.app')
@section('content')
    <h2>Popular Articles</h2>
    <div class="row">
        @foreach($articles as $article)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5>{{ $article->title }}</h5>
                        <p>{{ Str::limit($article->content, 100) }}</p>
                        <a href="{{ route('articles.show', $article->id) }}" class="btn btn-primary">Read More...</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{ $articles->links('pagination::bootstrap-5') }}
@endsection
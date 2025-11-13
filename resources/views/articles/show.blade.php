@extends('layout.master')

@section('content')
    <div class="row">
        <div class="col-lg-8">
            <h1 class="mb-3">{{ $article->title }}</h1>
            <p class="text-muted">
                {{ $article->date }} · {{ $article->category->name }} · {{ $article->writer->name }}
            </p>
            <div class="mb-4">
                {!! nl2br(e($article->content)) !!}
            </div>
            <a href="{{ route('categories.show', $article->category_id) }}" class="btn btn-outline-secondary">Back to Category</a>
        </div>
    </div>
@endsection


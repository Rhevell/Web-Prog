@extends('layout.master')
@section('content')

    <h2>Categories</h2>
    <div class="row">
        @foreach($categories as $category)
            <div class="col-md-6">
                <a href="{{ route('categories.show', $category->id) }}" class="btn btn-lg btn-block btn-primary mb-3">{{ $category->name }}</a>
            </div>
        @endforeach
    </div>


@endsection
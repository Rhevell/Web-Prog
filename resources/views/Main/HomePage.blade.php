@extends('layout.master')


@section('content')
    <div class="row">
        <div class="col-12">
            <img src={{ asset('download (2).jpeg') }} class="img-fluid" alt="Hero">
        </div>
    </div>
    <h2 class="mt-4 mb-5">Latest Articles</h2>
    @foreach ($article as $item)
        <div class="col-12">
            <div class="card-body">
                <h5 class="card-title">{{ $item->title }}</h5>
                <p class="card-text">{{ Str::limit($item->content, 100) }}</p>
                <p class="card-text"><small class="text-muted">{{ $item->date }} by {{ $item->writer->name }}</small></p>
                <div class="d-flex">
                    <a href="" class="btn btn-primary ms-auto">Read More...</a>
                </div>
            </div>

        </div>
    @endforeach
@endsection

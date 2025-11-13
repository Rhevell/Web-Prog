@extends('layout.master')

@section('content')
    <h2>Writers</h2>
    <div class="row">
        @foreach ($writers as $writer)
            <div class="col-md-4">
                <div class="card mb-4 h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $writer->name }}</h5>
                        <p class="card-text">Specialty: {{ $writer->specialty }}</p>
                        <a href="{{ route('writers.show', $writer->id) }}" class="btn btn-primary">View Articles</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

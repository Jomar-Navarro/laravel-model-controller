@extends('layout.main')

@section('content')

    <div class="container my-5">
        <h1>Films</h1>
        <div class="d-flex flex-wrap justify-content-center">
            @foreach ($films as $film)
            <div class="card m-3" style="width: 18rem;">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ $film->title }}</h5>
                    <h5 class="card-subtitle">{{ $film->original_title }}</h5>
                    <p class="card-text">{{ $film->nationality }}</p>
                    <p class="card-text">{{ $film->date }}</p>
                    <p class="card-text">{{ $film->vote }}</p>
                </div>
            </div>
            @endforeach
        </div>

    </div>
@endsection

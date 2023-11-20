@extends('layouts.main')

@section('content')
    <div class="container d-flex flex-wrap justify-content-center">

        @foreach ($movies as $movie)
            <div class="card m-3" style="width: 18rem;">
                <div class="card-body">
                    <h2 class="card-title">{{ $movie->title }}</h2>
                    <h6 class="card-title">{{ $movie->original_title }}</h6>
                </div>
                <div class="card-body">
                    <a href="{{ route('detail', ['id' => $movie->id]) }}" class="card-link">Vedi dettaglio film</a>
                </div>
            </div>
        @endforeach


    </div>
@endsection

@extends('layouts.main')

@section('content')
    <div class="container d-flex flex-wrap justify-content-center">

        @foreach ($movies as $movie)
            <div class="card m-3" style="width: 18rem;">
                <div class="card-body">
                    <h2 class="card-title">{{ $movie->title }}</h2>
                    <h5 class="card-title">{{ $movie->original_title }}</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Nazionalità: {{ $movie->nationality }}</li>
                    <li class="list-group-item">Data di uscita: {{ $movie->date }}</li>
                    <li class="list-group-item">Voto: {{ $movie->vote }}</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Vedi dettagli film</a>
                </div>
            </div>
        @endforeach


    </div>
@endsection

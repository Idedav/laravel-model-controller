@extends('layouts.main')

@section('content')
    <div class="container d-flex flex-wrap justify-content-center">

        <div class="card m-3" style="width: 18rem;">
            <div class="card-body">
                <h2 class="card-title">{{ $movie->title }}</h2>
                <h5 class="card-title">{{ $movie->original_title }}</h5>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Nazionalità:</strong> {{ $movie->nationality }}</li>
                <li class="list-group-item"><strong>Data di uscita:</strong> {{ $movie->date }}</li>
                <li class="list-group-item"><strong>Voto:</strong> {{ $movie->vote }}</li>
            </ul>
            <div class="card-body">
                <a href="/" class="card-link">Torna alla lista dei film</a>
            </div>
        </div>

    </div>
@endsection

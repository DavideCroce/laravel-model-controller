@extends('layout.main')

@section('content')
    <div class="container">
        <div class="row flex-wrap">
            @forelse ($movies as $movie)
                <div class="card col-6" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
                        <p class="card-text">{{ $movie->nationality }}</p>
                        <p class="card-text">{{ $movie->date }}</p>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $movie->vote }}</h6>
                        <a href="#" class="card-link">Scopri di più</a>
                    </div>
                </div>
            @empty
                <h1>Nessun film Selezionabile</h1>
            @endforelse
        </div>
    </div>
@endsection

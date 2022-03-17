@extends('layout.main')

@section('content')
    @forelse ($movies as $movie)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">WarCraft: L'inizio</h5>
                <h6 class="card-subtitle mb-2 text-muted">Avventura, Azione, Fantasy</h6>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. At, explicabo! Maxime
                    debitis
                    dolore, perspiciatis magni nihil minima pariatur porro itaque iure, quod veritatis obcaecati repellendus
                    rem
                    incidunt esse autem quasi.</p>
                <h6 class="card-subtitle mb-2 text-muted">--Blizzard Ententeirment</h6>
                <a href="#" class="card-link">Scopri di più</a>
            </div>
        </div>
    @empty
        <h1>Nessun film Selezionabile</h1>
    @endforelse
@endsection

@extends("layouts.app")

@section("page-title", "Movies")

@section("main-content")

<div class="container">
    <div class="row">
@forelse ( $movies as $movie )
        <div class="col-3 p-3">
            <div class=" h-100" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Titolo originale: {{ $movie->original_title  }}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Titolo Ita: {{ $movie->title }}</h6>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Nazionalità: {{ $movie->nationality }}</h6>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Data: {{ $movie->date }}</h6>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Voto: <strong>{{ $movie->vote }}</strong></h6>
                    <a href="#" class="card-link">Vai al film</a>
                </div>
            </div>
        </div>
@empty
@endforelse
    </div>
</div>

@endsection

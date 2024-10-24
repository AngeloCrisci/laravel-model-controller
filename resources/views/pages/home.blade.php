@extends("layouts.app")

@section("page-title", "Homepage")

@section("main-content")
    <div id="jumbotron">
        <a href="{{route("movies")}}">
            <h1 class="text-center m-5">
                VAI AI FILM
            </h1>
        </a>
    </div>
@endsection

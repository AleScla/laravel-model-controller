@extends('layouts.app')

@section('main-content')
    <div class="container">
        <div class="row">
            @foreach($movies as $movie)
            <div class="col-6 g-5">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$movie->title}}</h5>
                        <p class="card-text">Original Title: {{$movie->original_title}}</p>
                        <p class="card-text">Nationality: {{$movie->nationality}}</p>
                        <p class="card-text">Publication date: {{$movie->date}}</p>
                        <p class="card-text">Vote: {{$movie->vote}}</p>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

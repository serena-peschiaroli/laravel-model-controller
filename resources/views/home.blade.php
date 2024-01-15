@extends('layouts.app')

@section('content')

<section class="mt-5">
    <div class="container">
        <div class="row row-cols-5 d-flex gy-4">
            @foreach ($movies as $movie)
                <div class="col d-flex align-items-stretch">
                    <div class="card">
                        <img src= "{{ $movie->image}}" class="card-img-top" alt="Movie image">
                        <div class="card-body">
                            <h5 class="card-title"> {{ $movie->title}} </h5>
                            <p class="card-text"> Titolo originale: {{ $movie->original_title}}</p>
                            <p class="card-text"> Data: {{$movie->date }}</p>
                            <p class="card-text"> Voto: {{ $movie->vote}}</p>
                        </div>
                    </div>
                </div>

                
            @endforeach
        </div>
    </div>


</section>
@endsection
@extends('layouts.app')

@section('content')

<section>
    <div class="container">
        <div class="row row-cols-5 d-flex gy-4">
            @foreach ($movies as $movies)
                <div class="col d-flex align-items-stretch">
                    <div class="card">
                        <img src= "{{ $movies->image}}" class="card-img-top" alt="Movie image">
                        <div class="card-body">
                            <h5 class="card-title"> {{ $movies->original_title}} </h5>
                            <p class="card-text"> Nationality: {{$movies->nationality }}</p>
                            <p class="card-text"> Release: {{$movies->date }}</p>
                        </div>
                    </div>
                </div>

                
            @endforeach
        </div>
    </div>


</section>
@endsection
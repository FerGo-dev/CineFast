@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-md-12">
                <div class="card-body">
                    <h5 class="card-title">{{ $disneyM->movie_title }}</h5> 
                    <h6 class="card-subtitle mb-2 text-muted">Release date: {{ $disneyM->release_date}}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Mpaa rating: {{ $disneyM->mpaa_rating}}</h6>
                    <p class="card-text">Genre: {{ $disneyM->genre }}</p>
                </div>
                
            </div>
           
               
               
         </div>
           
            
    </div>
@endsection
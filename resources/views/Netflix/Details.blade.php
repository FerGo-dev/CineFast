@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-md-12">
                <div class="card-body">
                    <h5 class="card-title">{{ $netflixM->title }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Type: {{ $netflixM->type}}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Listed in: {{ $netflixM->listed_in}}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Duration {{ $netflixM->duration}}</h6>
                    <p class="card-text">Sinopsis: {{ $netflixM->description }}</p>
                </div>
                
            </div>
           
               
               
         </div>
           
            
    </div>
@endsection
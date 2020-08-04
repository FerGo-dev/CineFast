@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card col-md-12">
                <div class="card-body">
                    <h5 class="card-title">{{ $moviesM->title }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Director: {{ $moviesM->director}}</h6>
                    <h6 class="card-subtitle mb-2 text-muted">Year released: {{ $moviesM->year_released}}</h6>
                    <p class="card-text">{{ $moviesM->category }}</p>
                </div>
                
            </div>
           
               
               
         </div>
           
            
    </div>
@endsection
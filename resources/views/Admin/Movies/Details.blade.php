@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Movie Details</h1>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><b>{{ $moviesM->title}}</b></h4>
                        <p class="card-text"><b>Movie title: </b> {{ $moviesM->title }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Category: </b> {{ $moviesM->category }}</li>
                        <li class="list-group-item"><b>Director: </b>{{ $moviesM->director }}</li>
                    </ul>
                    <div class="card-body">
                        <a href="/admin/movies/edit/{{ $moviesM->_id }}" class="card-link">Edit</a>
                        <a href="/admin/movies/delete/{{ $moviesM->_id }}" class="card-link">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

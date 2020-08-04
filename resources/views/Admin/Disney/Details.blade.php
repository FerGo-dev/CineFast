@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Movie Details</h1>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><b>{{ $disneyM->movie_title}}</b></h4>
                        <p class="card-text"><b>Movie title: </b> {{ $disneyM->movie_title }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Genre: </b> {{ $disneyM->genre }}</li>
                        <li class="list-group-item"><b>mpaa rating: </b>{{ $disneyM->mpaa_rating }}</li>
                    </ul>
                    <div class="card-body">
                        <a href="/admin/disney/edit/{{ $disneyM->_id }}" class="card-link">Edit</a>
                        <a href="/admin/disney/delete/{{ $disneyM->_id }}" class="card-link">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

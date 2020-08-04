@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1> Details</h1>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><b>{{ $netflixM->type}}</b></h4>
                        <p class="card-text"><b>Type: </b> {{ $netflixM->type }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Title: </b> {{ $netflixM->title }}</li>
                        <li class="list-group-item"><b> Duration: </b>{{ $netflixM->duration }}</li>
                        <li class="list-group-item"><b> Description: </b>{{ $netflixM->description }}</li>
                    </ul>
                    <div class="card-body">
                        <a href="/admin/netflix/edit/{{ $netflixM->_id }}" class="card-link">Edit</a>
                        <a href="/admin/netflix/delete/{{ $netflixM->_id }}" class="card-link">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

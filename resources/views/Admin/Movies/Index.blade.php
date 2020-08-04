@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('mssg')!== null)
            <div class="alert alert -{{session ('alerttype')}} alert-dismissible fade show" role="alert">
            {{session('mssg')}}
                    <button type="button" class="close" data-dismiss="alert " aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <h1>Movies</h1>
                <a class="text-right" href="/admin/movies/create">Add a new movie</a>
                <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Director</th>
                        <th scope="col">Year released</th>
                        <th scope="col">Category</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($movies as $movies)
                    <tr>
                        <th scope="row">{{ $loop->index + 1}}</th>
                        <td>{{ $movies->title}}</td>
                        <td>{{ $movies->director}}</td>
                        <td>{{ $movies->year_released }}</td>
                        <td>{{ $movies->category }}</td>
                        <td>
                            <a href="/admin/movies/{{ $movies->_id }}">Details</a> |
                            <a href="/admin/movies/edit/{{ $movies->_id }}">Edit</a> |
                            <a href="/admin/movies/delete/{{ $movies->_id }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
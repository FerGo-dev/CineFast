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
                <h1>Disney movies</h1>
                <a class="text-right" href="/admin/disney/create">Add a new movie</a>
                <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Movie Name</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Mpaa rating</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($disney as $disney)
                    <tr>
                        <th scope="row">{{ $loop->index + 1}}</th>
                        <td>{{ $disney->movie_title}}</td>
                        <td>{{ $disney->genre }}</td>
                        <td>{{ $disney->mpaa_rating }}</td>
                        <td>
                            <a href="/admin/disney/{{ $disney->_id }}">Details</a> |
                            <a href="/admin/disney/edit/{{ $disney->_id }}">Edit</a> |
                            <a href="/admin/disney/delete/{{ $disney->_id }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
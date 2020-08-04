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
                <h1>Netflix content</h1>
                <a class="text-right" href="/admin/netflix/create">Add a new movie or show</a>
                <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Type</th>
                        <th scope="col">Title</th>
                        <th scope="col">Duration</th>
                        <th scope="col">Description</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($netflix as $netflix)
                    <tr>
                        <th scope="row">{{ $loop->index + 1}}</th>
                        <td>{{ $netflix->type}}</td>
                        <td>{{ $netflix->title}}</td>
                        <td>{{ $netflix->duration }}</td>
                        <td>{{ $netflix->description }}</td>
                        <td>
                            <a href="/admin/netflix/{{ $netflix->_id }}">Details</a> |
                            <a href="/admin/netflix/edit/{{ $netflix->_id }}">Edit</a> |
                            <a href="/admin/netflix/delete/{{ $netflix->_id }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
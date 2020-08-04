@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Delete Disney movie</h1>
                <form action="">
                    <input type="hidden" name="disneyid" id="disneyid" value="{{ $disneyM->_id }}">
                <div class="form-group">
                    <label for="movie_title">Movie Name</label>
                    <input class="form-control" type="text" name="movie_title" id="movie_title" value="{{ $disneyM->movie_title}}" disabled>
                </div>
                <div class="form-group">
                    <label for="genre">Genre</label>
                    <select name="genre" id="genre" class="form-control" disabled>
                        <option value="0">Select a genre...</option>
                        <option value="1">Musical</option>
                        <option value="1">Adventure</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="mpaa_rating">mpaa_rating</label>
                    <textarea name="mpaa_rating" id="mpaa_rating" cols="30" rows="10" class="form-control" disabled>{{ $disneyM->mpaa_rating }}</textarea>
                </div>
               
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection
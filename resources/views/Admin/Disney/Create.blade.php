@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Add a new Disney movie</h1>
                <form action="/admin/disney/create" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="movie_title">Movie name</label>
                        <input class="form-control" type="text" name="movie_title" id="movie_title">
                    </div>

                   
                    <div class="form-group ">
                                    <label for="mpaa_rating">Mpaa rating</label>
                                    <select name="mpaa_rating" id="mpaa_rating" class="form-control">
                                        <option value="0">Select the Mpaa rating </option>
                                        <option value="mxn">G</option>
                                        <option value="usd">PG</option>
                                        <option value="usd">PG-13</option>
                                        <option value="usd">R</option>
                                        <option value="usd">NC-17</option>
                                    </select>
                                </div>

                     <div class="form-group ">
                                    <label for="genre">Genre</label>
                                    <select name="genre" id="genre" class="form-control">
                                        <option value="0">Select a genre </option>
                                        <option value="mxn">Musical</option>
                                        <option value="usd">Adventure</option>
                                        <option value="usd">Drama</option>
                                        <option value="usd">Comedy</option>
                                    </select>
                                </div>
                    <button type="submit" class="btn btn-success">Create</button>
                    </form>
            </div>
        </div>
    </div>
@endsection
 
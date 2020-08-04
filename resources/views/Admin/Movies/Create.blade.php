@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Add a new Disney movie</h1>
                <form action="/admin/movies/create" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="title">Movie name</label>
                        <input class="form-control" type="text" name="title" id="title">
                    </div>

                    <div class="form-group">
                        <label for="director">Director</label>
                        <input class="form-control" type="text" name="director" id="director">
                    </div>

                    <div class="form-group">
                        <label for="year_released">Year released</label>
                        <input class="form-control" type="text" name="year_released" id="year_released">
                    </div>

                     <div class="form-group ">
                                    <label for="category">Category</label>
                                    <select name="category" id="category" class="form-control">
                                        <option value="0">Select a category </option>
                                        <option value="mxn">Horror</option>
                                        <option value="usd">Science fiction</option>
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
 
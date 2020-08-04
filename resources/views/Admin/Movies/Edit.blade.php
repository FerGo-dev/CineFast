@extends('layouts.app')

@section('content')
    <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Edit movie details</h1>
                    <form>
                        <input type="hidden" name="moviesid" id="moviesid" value="{{ $moviesM->_id}}">

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="type" name="type" value="{{ $moviesM->title}}">
                        </div>
                        <div class="form-group">
                            <label for="director">Director</label>
                            <input type="text" class="form-control" id="director" name="director" value="{{ $moviesM->director}}">
                        </div>

                        <div class="form-group">
                            <label for="year_released">Year released</label>
                            <input type="text" class="form-control" id="type" name="type" value="{{ $moviesM->year_released}}">
                        </div>

                        <div class="form-group">
                    <label for="category">Category</label>
                    <textarea name="category" id="category" class="form-control" >{{ $moviesM->category }}</textarea>
                </div>
    
                        <button class="btn btn-primary" type="submit">Edit</button>
                    </form>
                </div>
            </div>
        </div>
@endsection


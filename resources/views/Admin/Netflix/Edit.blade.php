@extends('layouts.app')

@section('content')
    <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Edit movie details</h1>
                    <form>
                        <input type="hidden" name="disneyid" id="disneyid" value="{{ $netflixM->_id}}">

                        <div class="form-group">
                            <label for="type">Type</label>
                            <input type="text" class="form-control" id="type" name="type" value="{{ $netflixM->type}}">
                        </div>
                        <div class="form-group">
                            <label for="title">Movie Name</label>
                            <input type="text" class="form-control" id="movie_title" name="movie_title" value="{{ $netflixM->title}}">
                        </div>

                        <div class="form-group">
                            <label for="duration">Duration</label>
                            <input type="text" class="form-control" id="type" name="type" value="{{ $netflixM->duration}}">
                        </div>

                        <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control" >{{ $netflixM->description }}</textarea>
                </div>
    
    
                        <!-- <div class="form-group ">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" id="type" name="type" cols="30" rows="30" value="{{ $netflixM->description}}">
                        </div> -->
                    
                        <button class="btn btn-primary" type="submit">Edit</button>
                    </form>
                </div>
            </div>
        </div>
@endsection


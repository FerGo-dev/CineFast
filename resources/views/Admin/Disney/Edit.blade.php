@extends('layouts.app')

@section('content')
    <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Edit movie details</h1>
                    <form>
                        <input type="hidden" name="disneyid" id="disneyid" value="{{ $disneyM->_id}}">
                        <div class="form-group">
                            <label for="movie_title">Movie Name</label>
                            <input type="text" class="form-control" id="movie_title" name="movie_title" value="{{ $disneyM->movie_title}}">
                        </div>
    
                        <!-- <div class="form-group">
                            <label for="genre">Genre</label>
                            <select class="form-control" name="genre" id="genre">
                                <option value="0">Select a genre...</option>
                                <option value="5ee237e03fe2b512c01af538">Home & Office</option>
                            </select>
                        </div> -->
    
                        <div class="form-group">
                                <label for="genre">genre</label>
                                <textarea name="genre" id="genre" class="form-control" >{{ $disneyM->genre }}</textarea>
                         </div>
    
                        <div class="form-row">
                             <div class="form-group col-md-6">
                                 <label for="mpaa_rating">Mpaa rating</label>
                                 <input class="form-control" type="text" name="mpaa_rating" id="mpaa_rating" value="{{ $disneyM->mpaa_rating }} ">
                             </div>
    
                        </div>
                        <button class="btn btn-primary" type="submit">Edit</button>
                    </form>
                </div>
            </div>
        </div>
@endsection

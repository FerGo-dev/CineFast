@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Add a new Netflix movie or TV show</h1>
                <form action="/admin/netflix/create" method="POST">
                @csrf

                <div class="form-group ">
                                    <label for="listed_in">What is it?</label>
                                    <select name="listed_in" id="listed_in" class="form-control">
                                        <option value="0">Select the type </option>
                                        <option value="mxn"> Movie</option>
                                        <option value="usd">TV Show</option>
                                       
                                    </select>
                     </div>

                    <div class="form-group">
                        <label for="title"> Name</label>
                        <input class="form-control" type="text" name="title" id="title">
                    </div>
                   
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                    </div>
                
                    <div class="form-group">
                        <label for="duration"> Duration</label>
                        <input class="form-control" type="text" name="duration" id="duration">
                    </div>

                    <div class="form-group ">
                                    <label for="listed_in">Where is it listed?</label>
                                    <select name="listed_in" id="listed_in" class="form-control">
                                        <option value="0">Select the clasification </option>
                                        <option value="mxn">Children & Family Movies, Comedies</option>
                                        <option value="usd">Stand-Up Comedy</option>
                                        <option value="usd">Kids' TV</option>
                                        <option value="usd">Comedy</option>
                                        <option value="usd">Crime TV Shows, International TV Shows, Spanish-Language TV Shows</option>
                                        <option value="usd">International Movies, Sci-Fi & Fantasy, Thrillers</option>
                                    </select>
                     </div>

                    <button type="submit" class="btn btn-success">Create</button>
                    </form>
            </div>
        </div>
    </div>
@endsection
 
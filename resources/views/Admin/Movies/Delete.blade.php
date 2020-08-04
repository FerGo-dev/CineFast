@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Delete movie</h1>
                <form action="/admin/movies/delete" method="POST">
             @csrf
                    @method("DELETE")
                    <input type="hidden" name="moviesid" id="moviesid" value="{{ $moviesM->_id }}">
                <div class="form-group">
                    <label for="title">Movie Name</label>
                    <input class="form-control" type="text" name="title" id="title" value="{{ $moviesM->title}}" disabled>
                </div>

                <div class="form-group">
                    <label for="director">Director</label>
                    <input class="form-control" type="text" name="director" id="director" value="{{ $moviesM->director}}" disabled>
                </div>
               
                <div class="form-group">
                    <label for="year_released">Year released</label>
                    <input class="form-control" type="text" name="year_released" id="year_released" value="{{ $moviesM->year_released}}" disabled>
                </div>
               
                <div class="form-group">
                    <label for="category">Category</label>
                    <input class="form-control" type="text" name="category" id="category" value="{{ $moviesM->category}}" disabled>
                </div>

                <button class="btn btn-defualt" type="button">Cancel</button>
                    <!-- <button class="btn btn-danger" type="submit">Delete</button> -->
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#MdlDeleteConfirmation">
                        Delete
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="MdlDeleteConfirmation" tabindex="-1" role="dialog" aria-labelledby="MdlDeleteConfirmationLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header bg-danger">
                                <h5 class="modal-title" id="MdlDeleteConfirmationLabel">Delete Movie</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete this movie? This changes can not be reverted.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
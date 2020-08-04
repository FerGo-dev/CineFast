@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Delete Disney movie</h1>
                <form action="/admin/netflix/delete" method="POST">
                    <input type="hidden" name="netflixid" id="netflixid" value="{{ $netflixM->_id }}">

                    <div class="form-group">
                    <label for="type"> Type</label>
                    <input class="form-control" type="text" name="type" id="type" value="{{ $netflixM->type}}" disabled>
                </div>

                <div class="form-group">
                    <label for="title"> Name</label>
                    <input class="form-control" type="text" name="title" id="title" value="{{ $netflixM->title}}" disabled>
                </div>

                <div class="form-group">
                    <label for="duration">Duration</label>
                    <input class="form-control" type="text" name="duration" id="duration" value="{{ $netflixM->duration}}" disabled>
                </div>

                <div class="form-group">
                    <label for="listed_in">Listed in</label>
                    <input class="form-control" type="text" name="listed_in" id="listed_in" value="{{ $netflixM->listed_in}}" disabled>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control" disabled>{{ $netflixM->description }}</textarea>
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
                                <h5 class="modal-title" id="MdlDeleteConfirmationLabel">Delete </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete this? This changes can not be reverted.
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
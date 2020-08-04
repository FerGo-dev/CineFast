@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Disney Movies</h1>

                <div class="row">
                   @foreach($disney as $disney)
                     <div class="card col-md-3">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $disney->movie_title }}</h5>
                            <p class="card-text">{{ $disney->genre }}</p>
                            <a href="/disney/{{ $disney->_id }}" class="btn btn-primary">View</a>
                        </div>
                     </div>
                  @endforeach

                  <div class="col-md-12">
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mx-auto" role="group" aria-label="First group">
                                @php
                                    $cpage = request('pg') == 0 ? 1 : request('pg');
                                @endphp
                                <a href="/disney?pg={{$cpage - 1}}" class="btn btn-secondary {{ $cpage == 1 ? 'disabled' : '' }}">&lt</a>
                                @for ($i = 1; $i <= ceil($disneyCount/20); $i++)
                                <a href="/disney?pg={{$i}}" class="btn btn-secondary {{ $cpage == $i ? 'disabled' : '' }}">{{$i}}</a>
                                @endfor
                                <a href="/disney?pg={{$cpage + 1}}" class="btn btn-secondary  {{ $cpage == ceil($disneyCount/20) ? 'disabled' : '' }}">&gt</a>
                            </div>
                        </div>
                    </div>

            </div>

         </div>
     </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
    <h1>Movies</h1>
    
    
        @foreach ($movies as $movie)
            <div class="">
                <h5>{{ $movie->title }}</h5>
                <h6>{{ $movie->original_title }}</h6>
            </div>
        @endforeach
    
   

    
@endsection
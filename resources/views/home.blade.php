@extends('layouts.app')

@section('content')
    <h1>Movies</h1>
    
    <ul>
        @foreach ($libri as $libro)
            <li>
                <span>{{ $libro->name }}</span>
                <img class="copertina" src="{{ $libro->cover }}" alt="">
            </li>
        @endforeach
    </ul>
   

    <p>This is my paragraph content.</p>
@endsection
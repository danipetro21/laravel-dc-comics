@extends('layouts.base')

@section('content')
    
    <h1>COMICS:</h1>

    <a href="{{ route('comic.create') }}">INSERISCI NUOVO COMIC</a>

    <ul>
        
        @foreach ($comics as $comic)
        <li>
            {{ $comic -> firstName }} |  {{ $comic -> lastname }} 
        </li>
        @endforeach
        
    </ul>
@endsection
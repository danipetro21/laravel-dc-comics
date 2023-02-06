@extends('layouts.base')

@section('content')
    
    <h1>COMICS:</h1>


    <ul>
        
        @foreach ($comics as $comic)
        <li>
            {{ $comic -> firstName }} 
        </li>
        @endforeach
        
    </ul>
@endsection
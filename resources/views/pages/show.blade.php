@extends('layouts.base')

@section('content')

<h1>
    FIRST NAME : {{$comic->firstName}}
</h1>

<h3>LAST NAME: {{$comic->lastname}}</h3>
<h3>DATE OF BIRTH: {{$comic->dateOfBirth}}</h3>
<h3>HEIGHt: {{$comic->heigth}}</h3>
    
@endsection
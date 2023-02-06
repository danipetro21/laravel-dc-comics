@extends('layouts.base')

@section('content')

<h1>INSERISCI UN NUOVO COMIC</h1>
@include('components.errors')

<form action="{{ route('comic.store') }}" method="POST">
    @csrf
    <label for="firstName">Fist Name</label>
    <input type="text" name="firstName">
    <br>
    <br>
    <label for="lastName">Last Name</label>
    <input type="text" name="lastName">
    <br>
    <br>
    <label for="dateOfBirth">Date Of Birth</label>
    <input type="date" name="dateOfBirth">
    <br>
    <br>
    <label for="heigth">Heigth</label>
    <input type="number" name="heigth">
    <br>
    <br>
    <input type="submit" value="CREA UN NUOVO COMIC">


</form>
@endsection
@extends('layouts.base')

@section('content')
    <h1>AGGIORNA IL COMIC</h1>
    @include('components.errors')

    <form action="{{ route('comic.update' , $comic) }}" method="POST">
        @csrf
        <label for="firstName">Fist Name</label>
        <input type="text" name="firstName" value="{{ $comic -> firstName }}">
        <br>
        <br>
        <label for="lastName">Last Name</label>
        <input type="text" name="lastName" value="{{ $comic -> lastname }}">
        <br>
        <br>
        <label for="dateOfBirth">Date Of Birth</label>
        <input type="date" name="dateOfBirth" value="{{ $comic -> dateOfBirth }}">
        <br>
        <br>
        <label for="heigth">Heigth</label>
        <input type="number" name="heigth" value="{{ $comic -> heigth }}">
        <br>
        <br>
        <input type="submit" value="AGGIORNA IL COMIC">


    </form>
@endsection

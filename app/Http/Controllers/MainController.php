<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class MainController extends Controller
{
    //
    //--- INDEX

    public function home() {

        $comics = Comic::orderBy('created_at', 'DESC') -> get();

        return view('pages.home', compact('comics'));
    }

    //--- CREATE
    public function comicCreate(){
        return view('pages.create');
    }

    public function comicStore(Request $request){

        $data = $request -> validate([
            'firstName' => 'required|string|max:32',
            'lastName' => 'required|string|max:32',
            'dateOfBirth' => 'required|date',
            'heigth' => 'integer|min:0'

        ]);

        
        $comic = new Comic();
        $comic -> firstName = $data['firstName'];
        $comic -> lastName = $data['lastName'];
        $comic -> dateOfBirth = $data['dateOfBirth'];
        $comic -> heigth = $data['heigth'];

        $comic -> save();
        return redirect() -> route('home');
    }
}

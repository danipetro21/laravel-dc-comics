<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class MainController extends Controller
{

    //--- INDEX

    public function home()
    {

        $comics = Comic::orderBy('created_at', 'DESC')->get();

        return view('pages.home', compact('comics'));
    }

    //--- CREATE

    public function comicCreate()
    {
        return view('pages.create');
    }
    //--- STORE
    public function comicStore(Request $request)
    {

        //--- validazione dei dati lato backend
        $data = $request->validate([
            'firstName' => 'required|string|max:32',
            'lastName' => 'required|string|max:32',
            'dateOfBirth' => 'required|date',
            'heigth' => 'integer|min:0'

        ]);

        //--- inserimento dei dati all'interno del database tramite 
        //    l'oggetto COMIC
        $comic = new Comic();
        $comic->firstName = $data['firstName'];
        $comic->lastName = $data['lastName'];
        $comic->dateOfBirth = $data['dateOfBirth'];
        $comic->heigth = $data['heigth'];

        $comic->save();
        return redirect()->route('home');
    }

    //--- DELETE

    public function comicDelete(Comic $comic)
    {

        $comic->delete();

        return redirect()->route('home');
    }

    //--- SHOW

    public function comicShow(Comic $comic)
    {
        return view('pages.show', compact('comic'));
    }

    //--- EDIT

    public function comicEdit(Comic $comic)
    {
        return view('pages.edit', compact('comic'));
    }
    //--- UPDATE
    public function comicUpdate(Request $request, Comic $comic)
    {
        $data = $request -> validate([
            'firstName' => 'required|string|max:32',
            'lastName' => 'required|string|max:32',
            'dateOfBirth' => 'required|date',
            'heigth' => 'integer|min:0'
        ]);

        $comic->firstName = $data['firstName'];
        $comic->lastName = $data['lastName'];
        $comic->dateOfBirth = $data['dateOfBirth'];
        $comic->heigth = $data['heigth'];

        $comic->save();
        return redirect()->route('home');
    }
}

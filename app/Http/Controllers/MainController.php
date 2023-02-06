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
}

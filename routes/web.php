<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|clear
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//--- HOME
Route :: get('/', [MainController :: class, 'home'])
    -> name('home');
//--- CREATE / STORE
Route :: get('/comic/create', [MainController :: class, 'comicCreate'])
    -> name('comic.create');
    Route :: post('/comic/store', [MainController :: class, 'comicStore'])
    -> name('comic.store');
//--- DELETE
Route :: get('/comic/delete/{comic}', [MainController :: class, 'comicDelete'])
    -> name('comic.delete');
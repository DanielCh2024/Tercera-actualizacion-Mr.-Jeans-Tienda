<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $mercancia = [
        ['nombre' => 'Prenda Dama', 'valor' => 95],
        ['nombre' => 'Prenda Dama', 'valor' => 115],
        ['nombre' => 'Prenda Dama', 'valor' => 80],
        ['nombre' => 'Prenda Dama', 'valor' => 75],
    ];
    $nombre = "Daniel Chávez";
    return view('welcome', ['mercancias' => $mercancia ], ['nombre' => $nombre]);
});
//Route::view ('/mercancia','mercancia' ();
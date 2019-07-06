<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'index');

Route::get('/productos/listado', function () {
    return 'productos';
});

Route::get('/productos/{producto}', function ($producto) {
    return 'Estas viendo el producto ' . $producto;
});

Route::get('/ruleta', function (Request $request) {
    return $request->input('a') + $request->input('b');
});



// Route::get('/peliculas', function () {
//     $pelis = ['uno', 'dos', 'tres', 'cuatro', 'cinco'];

//     return view('peliculas', [
//         'title' => 'Listado de peliculas',
//         'peliculas' => $pelis,
//     ]);
// });


Route::get('/contacto', function () {
    return view('contact');
});

Route::get('/catalogo', function () {
    return view('products');
});

Route::get('/peliculas', 'MoviesController@index');

Route::get('/actores', 'ActorsController@directory');
Route::get('/actores/{actor}', 'ActorsController@show');
Route::get('/actores/buscar', 'ActorsController@search');

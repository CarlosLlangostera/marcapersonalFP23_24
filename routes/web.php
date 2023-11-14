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

 Route::get('/logout', function () {
    return "Logout usuario";
 });

Route::prefix('catalog')->group(function () {
    Route::get('/', function () {
        return view('catalog.index');
    });
    Route::get('/show/{id}', function ($id) {
        return view('catalog.show', array('id' => $id));
    })->where('id', '[0-9]+');

    Route::get('/create', function () {
        return view('catalog.create');
    });

    Route::get('/edit/{id}', function ($id) {
        return view('catalog.edit', array('id' => $id));
    })->where('id', '[0-9]+');
});

 Route::get('/proyectos', function () {
    return "Listado proyectos";
 });


 Route::get('/proyectos/show/{id}', function ($id) {
    return "Vista detalle proyecto " . $id;
 })
    ->where('id', '[0-9]+');


 Route::get('/proyectos/create', function () {
    return "Añadir proyecto";
 });


 Route::get('/proyectos/edit/{id}', function ($id) {
    return "Modificar proyecto " . $id;
 })
    ->where('id', '[0-9]+');


 Route::get('perfil/{id?}', function ($id = "propio") {
    if ($id == "propio") {
        $salida = "Visualizar el currículo " . $id;
    } else {
        $salida = "Visualizar el currículo de " . $id;
    }
    return $salida;
 })
    ->where('id', '[0-9]+');

//ejercicios de vistas

Route::get('/', function()
{
    return view('home');
});

Route::get('login', function()
{
    return view('auth.login');
});

Route::get('/catalog', function()
{
    return view('catalog.index');
});

Route::get('/catalog/show/{id}', function($id)
{
    return view('catalog.show', array('id' => $id));
});

Route::get('/catalog/create', function()
{
    return view('catalog.create');
});

Route::get('/catalog/edit/{id}', function($id)
{
    return view('catalog.edit', array('id' => $id));
})
    ->where('id', '[0-9]+');
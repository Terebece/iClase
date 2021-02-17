<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function()

{

   return View::make('pages.home');

});

Route::get('/iniciar_sesion', function()

{

   return View::make('pages.iniciar_sesion');

});

Route::get('/registro', function()

{

   return View::make('pages.registro');

});

Route::get('/recuperar_password', function()

{

   return View::make('pages.recuperar_password');

});

Route::get('/home_tutor', function()

{

   return View::make('pages.home_tutor');

});


Route::get('/config_tutor', function()

{

   return View::make('pages.config_tutor');

});


Route::get('/home_tutor_activities', function()

{

   return View::make('pages.home_tutor_activities');

});

Route::get('/alta-alumno', function()

{

   return View::make('pages.alta-alumno');

});

Route::get('/nueva-actividad', function()

{

   return View::make('pages.nueva-actividad');

});


Route::get('/home_alumnos', function()

{

   return View::make('pages.home_alumnos');

});

Route::get('/config_alumno', function()

{

   return View::make('pages.config_alumno');

});
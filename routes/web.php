<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PadresController;
use App\Http\Controllers\AlumnosController;

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

Route::get('/', function(){
   return View::make('pages.home');
});

Route::get('/iniciar_sesion', function(){
   return View::make('pages.iniciar_sesion');
});

Route::get('/registro', function(){
   return View::make('pages.registro');
});

Route::get('/recuperar_password', function(){
   return View::make('pages.recuperar_password');
});


Route::post('/registro', 'App\Http\Controllers\PadresController@store');

Route::post('/home_tutor_activities', 'App\Http\Controllers\PadresController@iniciaSesion');

Route::get('/home_tutor_activities/{id}', 'App\Http\Controllers\ActividadesController@index');
Route::get('/home_tutor_activities', 'App\Http\Controllers\ActividadesController@index');

Route::post('/home_alumno', 'App\Http\Controllers\AlumnosController@iniciaSesion');

/*


Route::get('/config_tutor', function()

{

   return View::make('pages.config_tutor');

});

Route::get('/home_tutor', function()

{

   return View::make('pages.home_tutor');

});

Route::get('/home_tutor', function()

{

   return View::make('pages.home_tutor');

});



Route::get('/home_tutor_activities', function()

{

   return View::make('pages.home_tutor_activities');

});


*/
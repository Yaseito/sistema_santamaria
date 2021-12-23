<?php

use Illuminate\Support\Facades\Route;





route::view('/', 'home')->name('home');
route::view('/Acerca de nosotros', 'about')->name('about');

route::resource('portafolio', 'ProjectController')
	->parameters(['portafolio' => 'project'])
	->names('projects');

/*route::get('/portafolio', 'ProjectController@index')->name('projects.index');
route::get('/portafolio/crear', 'ProjectController@create')->name('projects.create');

route::get('/portafolio/{project}/editar', 'ProjectController@edit')->name('projects.edit');
route::patch('/portafolio/{project}', 'ProjectController@update')->name('projects.update');

route::post('/portafolio', 'ProjectController@store')->name('projects.store');
route::get('/portafolio/{project}', 'ProjectController@show')->name('projects.show');

route::delete('/portafolio/{project}', 'ProjectController@destroy')->name('projects.destroy');
*/
route::view('/contacto', 'contact')->name('contact');
route::post('contact','MessageController@store')->name('messages.store');
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

/*Route::get('/', function () {
    return view('home');
})->name('home');
*/
Auth::routes();



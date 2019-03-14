<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

/*
Homepage
---------------------------------------------------------------------------
*/
Route::get('/', 'PagesController@homepage');

/*
Tâches
---------------------------------------------------------------------------

Gestion des tâches :
-------+------------------+----------
VERBE  | /URL             | (méthode)
-------+------------------+----------
GET    | /todolist        | (index)
POST   | /todolist        | (store)
GET    | /todolist/create | (create)
GET    | /todolist/1      | (show)
PATCH  | /todolist/1      | (update)
DELETE | /todolist/1      | (destroy)
GET    | /todolist/1/edit | (edit)

Il existe un raccourcis pour toutes ces routes :
Route::resource('tasks', 'tasksController');
Mais il générerais des urls de type /tasks/ au lieu de /todolist/
*/
Route::get('/todolist', 'TasksController@index');
Route::post('/todolist', 'TasksController@store');
Route::get('/todolist/create', 'TasksController@create');
Route::get('/todolist/{task}', 'TasksController@show');
Route::patch('/todolist/{task}', 'TasksController@update');
Route::delete('/todolist/{task}', 'TasksController@destroy');
Route::get('/todolist/{task}/edit', 'TasksController@edit');

/*
Pondérateurs
---------------------------------------------------------------------------

Gestion des Ponderateurs :
-------+---------------------+----------
VERBE  | /URL                | (méthode)
-------+---------------------+----------
GET    | /ponderators        | (index)
POST   | /ponderators        | (store)
GET    | /ponderators/create | (create)
GET    | /ponderators/1      | (show)
PATCH  | /ponderators/1      | (update)
DELETE | /ponderators/1      | (destroy)
GET    | /ponderators/1/edit | (edit)
*/
Route::resource('ponderators', 'PonderatorsController');
// Route::get('/ponderators', 'PonderatorsController@index');

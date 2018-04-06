<?php
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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//---------------------------------search-----------

Route::get('/search','ExercisesController@search')->name('search');
Route::post('/getSearch', 'ExercisesController@getSearch')->name('exercises');

Route::get('/busqueda','TipsController@busqueda')->name('busqueda');
Route::post('/getBusqueda', 'TipsController@getBusqueda')->name('tips');



//--------------------------------------------------------
	Route::middleware(['auth'])->group(function () {
    Route::resource('categories', 'CategoriesController');
    Route::get('exercises/create/{category_id?}', 'ExercisesController@create');

    Route::resource('exercises', 'ExercisesController', ['except' => [
    'show'
]]);

Route::get('exercises/{exercise}/{detalle?}', 'ExercisesController@show')->name('exercises.show');


Route::get('get-random', 'ExercisesController@getRandomExercises');

    Route::resource('users', 'UsersController');
    

    Route::resource('marks', 'MarksController');
    Route::resource('tips', 'TipsController');

//---------------------------------FAVORITES-----------------------

    Route::post('favorite/{exercise}', 'ExercisesController@favoriteExercise');
    
    Route::post('unfavorite/{exercise}','ExercisesController@unFavoriteExercise');

    Route::get('favorites', 'UsersController@myFavorites')->middleware('auth');
    
});
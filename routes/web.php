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


// Socialite loign
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Auth::routes();

// PROFILE
Route::get('/me/profile', function(){
	return view('profile.me');
});
Route::get('/me/profiles', 'ProfileController@profile_profiles');
Route::get('/me/saved', function(){
	return view('profile.saved');
});
Route::get('/me/medals', function(){
	return view('profile.medals');
});
Route::get('/me/news', function(){
	return view('profile.news');
});
Route::get('/me/grades', function(){
	return view('profile.grades');
});
Route::get('/me/transactions', function(){
	return view('profile.transactions');
});
Route::get('/me/settings', 'UserController@settings_index');
Route::post('/me/settings/update', 'UserController@settings_update');

// MESSAGES
Route::get('/messages/inbox', function(){
	return view('messages.inbox');
});
Route::get('/messages/outbox', function(){
	return view('messages.outbox');
});
Route::get('/messages/important', function(){
	return view('messages.important');
});

// PROFILE CREATE
Route::get('/profile/new', function(){
	return view('profile.new');
});

// CLUB
Route::get('/clubs', 'ClubController@index_show');
Route::get('/clubs/{id}', 'ClubController@show');
Route::get('/clubs/{id}/edit', 'ClubController@edit_club_show');
Route::get('/clubs/new', 'ClubController@new_show');
Route::post('/clubs/new/create', 'ClubController@new');
Route::post('/clubs/{id}/edit', 'ClubController@edit_club');

Route::post('/licnost/edit/{id}', 'ClubController@edit_licnost');
Route::post('/vremeplov/edit/{id}', 'ClubController@edit_vremeplov');
Route::post('/trofej/edit/{id}', 'ClubController@edit_trofej');
Route::post('/galerija/edit/{id}', 'ClubController@edit_galerija');

//ATHLETE

//**FOOTBALLER
Route::get('/athlete/footballer/new', 'FootballerController@index');
Route::get('/athlete/footballer/{id}', 'FootballerController@show');
Route::get('/athlete/footballer/{id}/edit', 'FootballerController@edit_show');
Route::post('/athlete/footballer/create', 'FootballerController@new');

//**AIKIDO
Route::get('/athlete/aikido/new', 'AikidoController@index');
Route::post('/athlete/aikido/create', 'AikidoController@new');

//**ATLETIKA
Route::get('/athlete/athletics/new', 'AthleticsController@index');
Route::post('/athlete/athletics/create', 'AthleticsController@new');

//**BASKETBALL
Route::get('/athlete/basketball/new', 'BasketballController@index');
Route::get('/athlete/basketball/{id}', 'BasketballController@show');
Route::post('/athlete/basketball/create', 'BasketballController@new');

//LOGOUT
Route::get('user/logout', 'Auth\LoginController@logout');


Route::get('/home', 'HomeController@index')->name('home');

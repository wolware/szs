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

Route::get('/', 'HomeController@index');


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
Route::get('/clubs/add', 'ClubController@clubs_add');
Route::get('/clubs', 'ClubController@index_show');
Route::get('/clubs/new', 'ClubController@new_show');
Route::get('/clubs/{id}', 'ClubController@show');
Route::get('/clubs/{id}/edit', 'ClubController@edit_club_show');
Route::post('/clubs/new/create', 'ClubController@new');
Route::post('/clubs/{id}/edit', 'ClubController@edit_club');

Route::post('/licnost/edit/{id}', 'ClubController@edit_licnost');
Route::post('/vremeplov/edit/{id}', 'ClubController@edit_vremeplov');
Route::post('/trofej/edit/{id}', 'ClubController@edit_trofej');
Route::post('/galerija/edit/{id}', 'ClubController@edit_galerija');

//ATHLETE
Route::get('/athletes/add', 'AthletesController@athletes_add');
//**FOOTBALLER
Route::get('/athlete/footballer/new', 'FootballerController@index');
Route::get('/athlete/footballer/{id}', 'FootballerController@show');
Route::get('/athlete/footballer/{id}/edit', 'FootballerController@edit_show');
Route::post('/athlete/footballer/create', 'FootballerController@new');

//**AIKIDO
Route::get('/athlete/aikido/new', 'AikidoController@index');
Route::get('/athlete/aikido/{id}', 'AikidoController@show');
Route::post('/athlete/aikido/create', 'AikidoController@new');

//**ATLETIKA
Route::get('/athlete/athletics/new', 'AthleticsController@index');
Route::get('/athlete/athletics/{id}', 'AthleticsController@show');
Route::post('/athlete/athletics/create', 'AthleticsController@new');

//**BASKETBALL
Route::get('/athlete/basketball/new', 'BasketballController@index');
Route::get('/athlete/basketball/{id}', 'BasketballController@show');
Route::post('/athlete/basketball/create', 'BasketballController@new');

//**VOLLEYBALL
Route::get('/athlete/volleyball/new', 'OdbojkaController@index');
Route::post('/athlete/volleyball/create', 'OdbojkaController@new');
Route::get('/athlete/volleyball/{id}', 'OdbojkaController@show');

//**HANDBALL
Route::get('/athlete/handball/new', 'HandballController@index');
Route::post('/athlete/handball/create', 'HandballController@new');
Route::get('/athlete/handball/{id}', 'HandballController@show');

//**SKIING
Route::get('/athlete/skiing/new', 'SkiingController@index');
Route::post('/athlete/skiing/create', 'SkiingController@new');
Route::get('/athlete/skiing/{id}', 'SkiingController@show');

//**BADMINTON
Route::get('/athlete/badminton/new', 'BadmintonController@index');
Route::post('/athlete/badminton/create', 'BadmintonController@new');
Route::get('/athlete/badminton/{id}', 'BadmintonController@show');

//**BICYCLING
Route::get('/athlete/bicycling/new', 'BicyclingController@index');
Route::post('/athlete/bicycling/create', 'BicyclingController@new');
Route::get('/athlete/bicycling/{id}', 'BicyclingController@show');


//LOGOUT
Route::get('user/logout', 'Auth\LoginController@logout');



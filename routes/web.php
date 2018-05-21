<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register wewwb routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');


// Socialite loign
Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Auth::routes();

// Lista ruta za guest korisnike
Route::get('/news/{id}', 'NewsController@displayNews')->where('id', '[0-9]+');
Route::get('/clubs', 'ClubController@index_show');
Route::get('/clubs/{id}', 'ClubController@club_show')->where('id', '[0-9]+');
Route::get('/schools', 'SchoolController@index_show');
Route::get('/staff', 'StaffController@index_show');
Route::get('/athletes', 'AthletesController@index_show');
Route::get('/athletes/{id}', 'PlayerController@showPlayer')->where('id','[0-9]+');

// Dodaje protekciju na rute samo za logovane korisnike
Route::middleware('auth')->group(function () {
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

    //News for Auth
    Route::get('/news/new', 'NewsController@addNewsForm');
    Route::post('/news/new/create', 'NewsController@new');

    // PROFILE CREATE
    Route::get('/profile/new', function(){
        return view('profile.new');
    });

    // OBJECTS
    Route::get('/objects/add', 'ObjectsController@objects_add');

    Route::get('/objects/dvorana/new', 'DvoranaController@new_show');
    Route::post('/objects/dvorana/create', 'DvoranaController@new');
    Route::get('/objects/dvorana/{id}', 'DvoranaController@dvorana_show');

    Route::get('/objects/teretana/new', 'TeretanaController@new_show');
    Route::post('/objects/teretana/create', 'TeretanaController@new');
    Route::get('/objects/teretana/{id}', 'TeretanaController@teretana_show');

    Route::get('/objects/streljana/new', 'StreljanaController@new_show');
    Route::post('/objects/streljana/create', 'StreljanaController@new');
    Route::get('/objects/streljana/{id}', 'StreljanaController@streljana_show');
    Route::get('/objects/stadion/new', 'StadionController@new_show');
    Route::post('/objects/stadion/create', 'StadionController@new');
    Route::get('/objects/stadion/{id}', 'StadionController@stadion_show');

    Route::get('/objects/kuglana/new', 'KuglanaController@new_show');
    Route::post('/objects/kuglana/create', 'KuglanaController@new');
    Route::get('/objects/kuglana/{id}', 'KuglanaController@kuglana_show');

    Route::get('/objects/bazen/new', 'BazenController@new_show');
    Route::post('/objects/bazen/create', 'BazenController@new');
    Route::get('/objects/bazen/{id}', 'BazenController@bazen_show');

    Route::get('/objects/balon/new', 'BalonController@new_show');
    Route::post('/objects/balon/create', 'BalonController@new');
    Route::get('/objects/balon/{id}', 'BalonController@balon_show');

    Route::get('/objects/skijaliste/new', function(){
        return view('objects.skijaliste.new');
    });
    Route::get('/objects/skijaliste/{id}', function(){
        return view('objects.skijaliste.profile');
    });

    // CLUB
    Route::get('/clubs/add', 'ClubController@clubs_add');
    Route::get('/clubs/new', 'ClubController@new_show');
    Route::get('/clubs/{id}/edit', 'ClubController@edit_club_show');
    Route::post('/clubs/new/create', 'ClubController@new');
    Route::post('/clubs/{id}/edit', 'ClubController@edit_club');

    Route::post('/licnost/edit/{id}', 'ClubController@edit_licnost');
    Route::post('/vremeplov/edit/{id}', 'ClubController@edit_vremeplov');
    Route::post('/trofej/edit/{id}', 'ClubController@edit_trofej');
    Route::post('/galerija/edit/{id}', 'ClubController@edit_galerija');

    //ATHLETE
    Route::get('/athletes/add', 'PlayerController@displayAddPlayerCategories');
    Route::get('/athletes/{sport_id}/new', 'PlayerController@displayAddPlayer')->where('sport_id', '[0-9]+');
    Route::post('/athletes/{sport_id}/create', 'PlayerController@createPlayer')->where('sport_id', '[0-9]+');

    //LOGOUT
    Route::get('user/logout', 'Auth\LoginController@logout');
});


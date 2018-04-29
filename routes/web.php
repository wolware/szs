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
Route::get('/news/{id}', 'NewsController@displayNews');
Route::get('/clubs', 'ClubController@index_show');
Route::get('/clubs/{id}', 'ClubController@club_show');
Route::get('/schools', 'SchoolController@index_show');
Route::get('/staff', 'StaffController@index_show');
Route::get('/athletes', 'AthletesController@index_show');

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
    Route::post('/news/new/create','NewsController@new');

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

    //**GIMNASTIKA
    Route::get('/athlete/gimnastika/new', 'GimnastikaController@index');
    Route::post('/athlete/gimnastika/create', 'GimnastikaController@new');
    Route::get('/athlete/gimnastika/{id}', 'GimnastikaController@show');

    //**JUDO
    Route::get('/athlete/judo/new', 'JudoController@index');
    Route::post('/athlete/judo/create', 'JudoController@new');
    Route::get('/athlete/judo/{id}', 'JudoController@show');

    //**KARATE
    Route::get('/athlete/karate/new', 'KarateController@index');
    Route::post('/athlete/karate/create', 'KarateController@new');
    Route::get('/athlete/karate/{id}', 'KarateController@show');

    //**PLIVANJE
    Route::get('/athlete/plivanje/new', 'PlivanjeController@index');
    Route::post('/athlete/plivanje/create', 'PlivanjeController@new');
    Route::get('/athlete/plivanje/{id}', 'PlivanjeController@show');

    //**TENIS
    Route::get('/athlete/tenis/new', 'TenisController@index');
    Route::post('/athlete/tenis/create', 'TenisController@new');
    Route::get('/athlete/tenis/{id}', 'TenisController@show');


    //LOGOUT
    Route::get('user/logout', 'Auth\LoginController@logout');
});


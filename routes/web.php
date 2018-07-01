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
Route::get('/sports', 'HomeController@sportsList');
Route::get('/contact', 'HomeController@contact');


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
Route::get('/athletes', 'PlayerController@searchPlayers');
Route::get('/athletes/{id}', 'PlayerController@showPlayer')->where('id','[0-9]+');
Route::get('/staff/{id}', 'StaffController@showStaff')->where('id', '[0-9]+');
Route::get('/schools/{id}', 'SchoolController@showSchool')->where('id', '[0-9]+');
Route::get('/objects/{id}', 'ObjectController@showObject')->where('id', '[0-9]+');
Route::get('/objects', 'ObjectController@searchObjects');
Route::get('/associations', 'AssociationController@index');
Route::get('/associations/{id}', 'AssociationController@showAssociation')->where('id', '[0-9]+');

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

    // PROFILE CREATE
    Route::get('/profile/new', function(){
        return view('profile.new');
    });

    Route::get('/me/notifications', 'UserController@displayNotifications');

    // OBJECTS
    Route::get('/objects/add', 'ObjectController@displayAddObjectCategories');
    Route::get('/objects/{object_id}/new', 'ObjectController@displayAddObject')->where('object_id', '[0-9]+');
    Route::post('/objects/{object_id}/create', 'ObjectController@createObject')->where('object_id', '[0-9]+');
    Route::get('/objects/{id}/edit', 'ObjectController@displayEditObject')->where('id', '[0-9]+');

    Route::patch('/objects/{id}/edit/general', 'ObjectController@editObjectGeneral')->where('id', '[0-9]+');
    Route::patch('/objects/{id}/edit/status', 'ObjectController@editObjectStatus')->where('id', '[0-9]+');
    Route::patch('/objects/{id}/edit/history', 'ObjectController@editObjectHistory')->where('id', '[0-9]+');
    Route::patch('/objects/{id}/edit/balon-fields', 'ObjectController@editObjectBalonFields')->where('id', '[0-9]+');
    Route::patch('/objects/{id}/edit/balon-prices', 'ObjectController@editObjectBalonPrices')->where('id', '[0-9]+');
    Route::patch('/objects/{id}/edit/ski-tracks', 'ObjectController@editObjectSkiTracks')->where('id', '[0-9]+');
    Route::patch('/objects/{id}/edit/ski-prices', 'ObjectController@editObjectSkiPrices')->where('id', '[0-9]+');
    Route::patch('/objects/{id}/edit/gallery', 'ObjectController@editObjectGallery')->where('id', '[0-9]+');
    Route::patch('/objects/{id}/edit/proof', 'ObjectController@editObjectProof')->where('id', '[0-9]+');


    // NEWS
    Route::get('/news/new', 'NewsController@addNewsForm');
    Route::post('/news/new/create', 'NewsController@new');

    // CLUB
    Route::get('/clubs/add', 'ClubController@clubs_add');
    Route::get('/clubs/new', 'ClubController@new_show');
    Route::get('/clubs/{id}/edit', 'ClubController@edit_club_show');
    Route::post('/clubs/new/create', 'ClubController@new');
    Route::post('/clubs/{id}/edit', 'ClubController@edit_club');

    Route::post('/licnost/edit/{id}', 'ClubController@edit_licnost');
    Route::post('/vremeplov/edit/{id}', 'ClubController@edit_vremeplov');
    Route::post('/vremeplov/add/{club_id}', 'ClubController@add_vremeplov');
    Route::post('/trofej/edit/{id}', 'ClubController@edit_trofej');
    Route::post('/galerija/edit/{id}', 'ClubController@edit_galerija');
    Route::post('/proof/edit/{id}', 'ClubController@edit_proof');

    Route::get('/clubs/{id}/approve/player/{player_id}/{notify_id}', 'ClubController@approvePlayer');
    Route::get('/clubs/{id}/approve/staff/{staff_id}/{notify_id}', 'ClubController@approveStaff');

    //ATHLETE
    Route::get('/athletes/add', 'PlayerController@displayAddPlayerCategories');
    Route::get('/athletes/{sport_id}/new', 'PlayerController@displayAddPlayer')->where('sport_id', '[0-9]+');
    Route::post('/athletes/{sport_id}/create', 'PlayerController@createPlayer')->where('sport_id', '[0-9]+');
    Route::get('/athletes/{id}/edit', 'PlayerController@displayEditPlayer')->where('id', '[0-9]+');

    Route::patch('/athletes/{id}/edit/general', 'PlayerController@editPlayerGeneral')->where('id', '[0-9]+');
    Route::patch('/athletes/{id}/edit/status', 'PlayerController@editPlayerStatus')->where('id', '[0-9]+');
    Route::patch('/athletes/{id}/edit/biography', 'PlayerController@editPlayerBiography')->where('id', '[0-9]+');
    Route::patch('/athletes/{id}/edit/trophies', 'PlayerController@editPlayerTrophies')->where('id', '[0-9]+');
    Route::patch('/athletes/{id}/edit/gallery', 'PlayerController@editPlayerGallery')->where('id', '[0-9]+');

    // STAFF
    Route::get('/staff/new', 'StaffController@displayAddStaff');
    Route::post('/staff/create', 'StaffController@createStaff');
    Route::get('/staff/{id}/edit', 'StaffController@displayEditStaff')->where('id', '[0-9]+');

    Route::patch('/staff/{id}/edit/general', 'StaffController@editStaffGeneral')->where('id', '[0-9]+');
    Route::patch('/staff/{id}/edit/status', 'StaffController@editStaffStatus')->where('id', '[0-9]+');
    Route::patch('/staff/{id}/edit/biography', 'StaffController@editStaffBiography')->where('id', '[0-9]+');
    Route::patch('/staff/{id}/edit/trophies', 'StaffController@editStaffTrophies')->where('id', '[0-9]+');
    Route::patch('/staff/{id}/edit/gallery', 'StaffController@editStaffGallery')->where('id', '[0-9]+');

    // SCHOOLS
    Route::get('/schools/new', 'SchoolController@displayAddSchool');
    Route::post('/schools/create', 'SchoolController@createSchool');
    Route::get('/schools/{id}/edit', 'SchoolController@displayEditSchool')->where('id', '[0-9]+');

    Route::patch('/schools/{id}/edit/general', 'SchoolController@editSchoolGeneral')->where('id', '[0-9]+');
    Route::patch('/schools/{id}/edit/staff', 'SchoolController@editSchoolStaff')->where('id', '[0-9]+');
    Route::patch('/schools/{id}/edit/history', 'SchoolController@editSchoolHistory')->where('id', '[0-9]+');
    Route::patch('/schools/{id}/edit/trophies', 'SchoolController@editSchoolTrophies')->where('id', '[0-9]+');
    Route::patch('/schools/{id}/edit/gallery', 'SchoolController@editSchoolGallery')->where('id', '[0-9]+');

    // ASSOCIATIONS


    //LOGOUT
    Route::get('user/logout', 'Auth\LoginController@logout');
});


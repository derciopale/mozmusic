<?php


Route::get('/', 'PrincipalController@home');


Route::resource('crud','CrudsController');
Route::resource('musica','MusicaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get("principal","MusicaController@principal");


Route::any('pesquisar','MusicaController@pesquisar');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Visitas
Route::get('visits/{page_tag?}/{visit_count?}', function ($page_tag){
    $page = \App\Models\Musica::where('tag', $page_tag)->get()->first();
    $page->visits = $page->visits + 1;
    $page->save();
})->name('visits');

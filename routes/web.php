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
    return redirect('/index');
});


// Inicio
Route::get('/index', function () {
    return view('main_sections.index');
});

// Registro
// Route::get('sign_up/{step?}', 'SignUpController@sign_up_get');

Route::get('sign_up', 'SignUpController@sign_up_get');

// Post guardar
Route::post('sign_up/{step?}','SignUpController@store')->name('sign_up.store');

// Route::post('sign_up/{step?}', 'SignUpController@sign_up_post');

Route::get('sign_up/2/{type}', 'SignUpController@sign_up_get_person_type');


// Iniciar sesión
Route::get('sign_in', 'MainController@sign_in')->name('main.sign_in');

// Vivienda
Route::get('dwelling/search', 'DwellingController@search')->name('dwelling.search');
Route::get('dwelling/modify', 'DwellingController@modify')->name('dwelling.modify');
Route::get('dwelling/create', 'DwellingController@create')->name('dwelling.create');
Route::get('dwelling/delete', 'DwellingController@delete')->name('dwelling.delete');
Route::get('dwelling/consult', 'DwellingController@consult')->name('dwelling.consult');


// Servicios
Route::get('services/search', 'ServiceController@search')->name('services.search');
Route::get('services/delete', 'ServiceController@delete')->name('services.delete');
Route::get('services/create', 'ServiceController@create')->name('services.create');
Route::get('services/modify', 'ServiceController@modify')->name('services.modify');
Route::get('services/consult', 'ServiceController@consult')->name('services.consult');



// Empleo
Route::get('employment', 'MainController@employment')->name('main.employment');

// Ayuda
Route::get('help', 'MainController@help')->name('main.help');

// Contáctenos
Route::get('contact_us', 'MainController@contact_us')->name('main.contact_us');

// Conócenos más
Route::get('about_us', 'MainController@about_us')->name('main.about_us');

// Idioma
Route::get('languages', 'MainController@languages')->name('main.languages');
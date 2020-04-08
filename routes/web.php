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
Route::get('index', 'IndexController@index_get')->name('index.get');
Route::post('index/quick_search', 'IndexController@quick_search')->name('index.quick_search');
Route::post('index/detailed_search', 'IndexController@detailed_search')->name('index.detailed_search');
Route::post('index/keyword_search', 'IndexController@keyword_search')->name('index.keyword_search');

// Registro
// Route::get('sign_up/{step?}', 'SignUpController@sign_up_get');

Route::get('sign_up', 'SignUpController@sign_up_get');

// Post guardar
Route::post('sign_up','SignUpController@store')->name('sign_up.store');

// Route::post('sign_up/{step?}', 'SignUpController@sign_up_post');

Route::get('sign_up/2/{type}', 'SignUpController@sign_up_get_person_type');

Route::post('getCities','SignUpController@getCities');

Route::post('changePassword', 'UserDataController@changePasswordState');
//user daata route's
Route::get('user_data', 'UserDataController@user_data_get');

// Post guardar
Route::post('user_data','UserDataController@store_user_data')->name('user_data.store');

Route::get('user_data/2/{type}', 'UserDataController@user_data_get_person_type');

// Iniciar sesión
Route::post('sign_in', 'SignInController@login')->name('main.sign_in');
Route::post('forgot', 'SignInController@forgotForm');
Route::post('password', 'SignInController@passwordInput');
Route::get('sign_in', 'SignInController@getSessionInfo')->name('sign_in.get');
Route::get('sign_in', 'SignInController@logout')->name('sign_in.logout');
Route::get('sign_in/{userId}/{token}', 'SignInController@forgot')->name('sign_in.forgot');
Route::get('send-mail', 'SignInController@sendMail');
// Vivienda
// Publish routes
Route::get('dwelling/publish', 'Dwelling\PublishDwellingController@publish_get')->name('dwelling.publish');
Route::post('dwelling/post_image', 'Dwelling\PublishDwellingController@post_image')->name('dwelling.post_image');
Route::post('dwelling/remove_image', 'Dwelling\PublishDwellingController@remove_image')->name('dwelling.remove_image');
Route::post('dwelling/post_video', 'Dwelling\PublishDwellingController@post_video')->name('dwelling.post_video');
Route::post('dwelling/remove_video', 'Dwelling\PublishDwellingController@remove_video')->name('dwelling.remove_video');
Route::post('dwelling/store_dwelling', 'Dwelling\PublishDwellingController@store_dwelling')->name('dwelling.store_dwelling');
// Search routes
Route::get('dwelling/search', 'Dwelling\SearchDwellingController@search_get')->name('dwelling.search');
Route::post('dwelling/quick_search', 'Dwelling\SearchDwellingController@quick_search')->name('dwelling.quick_search');
Route::post('dwelling/detailed_search', 'Dwelling\SearchDwellingController@detailed_search')->name('dwelling.detailed_search');
Route::post('dwelling/keyword_search', 'Dwelling\SearchDwellingController@keyword_search')->name('dwelling.keyword_search');
// Publication routes
Route::get('dwelling/publication', 'Dwelling\PublicationDwellingController@search_get')->name('dwelling.publication_search');
Route::post('dwelling/publication/quick_search', 'Dwelling\PublicationDwellingController@quick_search')->name('dwelling.publication_quick_search');
Route::post('dwelling/publication/detailed_search', 'Dwelling\PublicationDwellingController@detailed_search')->name('dwelling.publication_detailed_search');

// Disable Enable
Route::post('dwelling/disable_dwelling', 'Dwelling\DwellingController@disable_dwelling')->name('dwelling.disable_dwelling');
Route::post('dwelling/enable_dwelling', 'Dwelling\DwellingController@enable_dwelling')->name('dwelling.enable_dwelling');
// Remove Dwelling
Route::post('dwelling/delete_dwelling', 'Dwelling\DwellingController@delete_dwelling')->name('dwelling.delete_dwelling');
// Modify routes
Route::get('dwelling/modify', 'Dwelling\ModifyDwellingController@modify_get')->name('dwelling.modify');
Route::post('dwelling/modify_dwelling', 'Dwelling\ModifyDwellingController@modify_dwelling')->name('dwelling.modify_dwelling');

// Show Details for dwelling ID
Route::get('dwelling/show_details/{id}', 'Dwelling\DwellingController@show_details')->name('dwelling.show_details');

// Route::get('dwelling/modify', 'Dwelling\DwellingController@modify')->name('dwelling.modify');
Route::get('dwelling/delete', 'Dwelling\DwellingController@delete')->name('dwelling.delete');
Route::get('dwelling/enable', 'Dwelling\DwellingController@enable')->name('dwelling.disable');
Route::get('dwelling/disable', 'Dwelling\DwellingController@disable')->name('dwelling.disable');

// Modify routes
Route::get('dwelling/modify/{id}', 'Dwelling\ModifyDwellingController@modify_get')->name('dwelling.modify');
Route::post('dwelling/modify_dwelling', 'Dwelling\ModifyDwellingController@modify_dwelling')->name('dwelling.modify_dwelling');

// Servicios
Route::get('services/search', 'ServiceController@search')->name('services.search');
Route::get('services/delete', 'ServiceController@delete')->name('services.delete');
Route::get('services/create', 'ServiceController@create')->name('services.create');
Route::get('services/modify', 'ServiceController@modify')->name('services.modify');
Route::get('services/consult', 'ServiceController@consult')->name('services.consult');

Route::get('dwelling/verDetalles/{dwelling_id}', 'ServiceController@search')->name('services.search');


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

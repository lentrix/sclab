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

Route::get('/', 'SiteController@index');

Route::post('/login', 'SiteController@login');
Route::get('/login', 'SiteController@index')->name('login');

Route::group(['middleware'=>['auth','receptionist']], function() {
    Route::get('/logout', 'SiteController@logout');

    Route::get('/patients/create', 'PatientController@create');
    Route::get('/patients/today', 'PatientController@today');
    Route::get('/patients/{patient}/update', 'PatientController@edit');
    Route::patch('/patients/{patient}', 'PatientController@update');
    Route::get('/patients/{patient}', 'PatientController@view');
    Route::get('/patients', 'PatientController@index');
    Route::post('/patients', 'PatientController@store');

    Route::get('/medicines/create', 'MedicineController@create');
    Route::get('/medicines/{medicine}/edit', 'MedicineController@edit');
    Route::get('/medicines/{medicine}', 'MedicineController@view');
    Route::patch('/medicines/{medicine}', 'MedicineController@update');
    Route::get('/medicines/{medicine}', 'MedicineController@view');
    Route::get('/medicines', 'MedicineController@index');
    Route::post('/medicines', 'MedicineController@store');

});

Route::group(['middleware'=>['auth', 'medtech']], function(){
    Route::get('/templates', 'TemplateController@index');
    Route::get('/templates/create', 'TemplateController@create');
    Route::post('/templates/{template}/add', 'TemplateController@addItem');
    Route::get('/templates/{template}/update', 'TemplateController@edit');
    Route::post('/templates/{template}/remove', 'TemplateController@removeItem');
    Route::post('/templates/{template}/move-up', 'TemplateController@moveUp');
    Route::post('/templates/{template}/move-down', 'TemplateController@moveDown');
    Route::get('/templates/{template}', 'TemplateController@view');
    Route::patch('/templates/{template}', 'TemplateController@update');
    Route::post('/templates', 'TemplateController@store');

    Route::get('/patients/{patient}/create-lab', 'PatientController@createLab');
});

Route::group(['middleware'=>['auth','admin']], function(){

});


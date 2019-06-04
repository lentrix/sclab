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
    

    Route::get('/patients/{patient}/select-lab', 'PatientController@selectLab');
    Route::get('/patients/{patient}/blood-chem', 'BloodChemistryController@create');
    Route::post('/patients/{patient}/blood-chem', 'BloodChemistryController@store');

    Route::get('/labs/blood-chem/{bloodChemistry}', 'BloodChemistryController@view');
    Route::get('/labs/blood-chem/{bloodChemistry}/result', 'BloodChemistryController@result');


});

Route::group(['middleware'=>['auth','admin']], function(){

});


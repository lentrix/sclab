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

    Route::post('/patients', 'PatientController@store');
    Route::get('/patients/{patient}/update', 'PatientController@edit');
    Route::patch('/patients/{patient}', 'PatientController@update');
    Route::get('/patients/create', 'PatientController@create');

    Route::get('/medicines/create', 'MedicineController@create');
    Route::get('/medicines/{medicine}/edit', 'MedicineController@edit');
    Route::get('/medicines/{medicine}', 'MedicineController@view');
    Route::patch('/medicines/{medicine}', 'MedicineController@update');
    Route::get('/medicines/{medicine}', 'MedicineController@view');
    Route::get('/medicines', 'MedicineController@index');
    Route::post('/medicines', 'MedicineController@store');

});

Route::group(['middelware'=>'auth'], function(){

    Route::get('/logout', 'SiteController@logout')->name('logout');

    Route::get('/patients', 'PatientController@index');
    Route::get('/patients/today', 'PatientController@today');
    Route::get('/patients/{patient}', 'PatientController@view');

    Route::get('/labs/blood-chem/{bloodChemistry}', 'BloodChemistryController@view');
    Route::get('/labs/blood-chem/{bloodChemistry}/result', 'BloodChemistryController@result');

    Route::get('/labs/hematology/{hematology}', 'HematologyController@view');
    Route::get('labs/hematology/{hematology}/result', 'HematologyController@result');

    Route::get('/labs/fecalysis/{fecalysis}', 'FecalysisController@view');
    Route::get('labs/fecalysis/{fecalysis}/result', 'FecalysisController@result');

    Route::get('/labs/urinalysis/{urinalysis}', 'UrinalysisController@view');
    Route::get('labs/urinalysis/{urinalysis}/result', 'UrinalysisController@result');
    
    Route::get('/labs/blood-typing/{bloodTyping}', 'BloodTypingController@view');
    Route::get('labs/blood-typing/{bloodTyping}/result', 'BloodTypingController@result');
    
    Route::get('/labs/dengue-duo/{dengueDuo}', 'DengueDuoController@view');
    Route::get('labs/dengue-duo/{dengueDuo}/result', 'DengueDuoController@result');
    
    Route::get('/labs/sputum/{sputum}', 'SputumController@view');
    Route::get('labs/sputum/{sputum}/result', 'SputumController@result');
    
    Route::get('/labs/occult-blood/{lab}', 'OccultBloodController@view');
    Route::get('labs/occult-blood/{lab}/result', 'OccultBloodController@result');

    Route::get('/labs','LabController@index');
});

Route::group(['middleware'=>['auth', 'medtech']], function(){

    Route::get('/patients/{patient}/select-lab', 'PatientController@selectLab');

    //Lab Store
    Route::post('/patients/{patient}/blood-chem', 'BloodChemistryController@store');
    Route::post('/patients/{patient}/fecalysis', 'FecalysisController@store');
    Route::post('/patients/{patient}/hematology', 'HematologyController@store');
    Route::post('/patients/{patient}/urinalysis', 'UrinalysisController@store');
    Route::post('/patients/{patient}/blood-typing', 'BloodTypingController@store');
    Route::post('/patients/{patient}/dengue-duo', 'DengueDuoController@store');
    Route::post('/patients/{patient}/sputum', 'SputumController@store');
    Route::post('/patients/{patient}/occult-blood', 'OccultBloodController@store');

    //Lab Creation
    Route::get('/patients/{patient}/blood-chem', 'BloodChemistryController@create');
    Route::get('/patients/{patient}/fecalysis', 'FecalysisController@create');
    Route::get('/patients/{patient}/hematology', 'HematologyController@create');
    Route::get('/patients/{patient}/urinalysis', 'UrinalysisController@create');
    Route::get('/patients/{patient}/blood-typing', 'BloodTypingController@create');
    Route::get('/patients/{patient}/dengue-duo', 'DengueDuoController@create');
    Route::get('/patients/{patient}/sputum', 'SputumController@create');
    Route::get('/patients/{patient}/occult-blood', 'OccultBloodController@create');

});


Route::group(['middleware'=>['auth','admin']], function(){

});


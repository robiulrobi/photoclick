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

Route::get('/',[
    'uses' => 'IndexController@index',
    'as' => '/'
]);
Route::get('/slider/add-slider',[
    'uses' => 'imageController@addSlider',
    'as' => 'add-slider'
]);

Route::post('/slider/save-slider',[
    'uses' => 'imageController@saveSlider',
    'as' => 'save-slider'
]);
Route::get('/slider/manage-slider',[
    'uses' => 'imageController@manageSlider',
    'as' => 'manage-slider'
]);
Route::get('/slider/delete/{id}',[
    'uses' => 'imageController@deleteSlider',
    'as' => 'delete-slider'
]);

//add service
Route::get('/service/add-service',[
    'uses' => 'IndexController@addService',
    'as' => 'add-service'
]);
//add service

//save service
Route::post('/service/save-service',[
    'uses' => 'IndexController@saveService',
    'as' => 'save-service'
]);
//save service
Route::get('/service/manage-service',[
    'uses' => 'IndexController@manageService',
    'as' => 'manage-service'
]);

//manage service


//edit service
Route::get('/service/edit/{id}',[
    'uses' => 'IndexController@editService',
    'as' => 'edit-service'
]);
//edit service

//update service
Route::post('/service/update-service',[
    'uses' => 'IndexController@updateService',
    'as' => 'update-service'
]);
//update service

//delete service
Route::get('/service/delete/{id}',[
    'uses' => 'IndexController@deleteService',
    'as' => 'delete-service'
]);
//delete service


Route::get('/images/add-image',[
    'uses' => 'imageController@addImage',
    'as' => 'add-image'
]);
Route::post('/images/save-image',[
    'uses' => 'imageController@saveImage',
    'as' => 'save-image'
]);
Route::get('/images/manage-image',[
    'uses' => 'imageController@manageImage',
    'as' => 'manage-image'
]);
Route::get('/images/delete-image/{id}',[
    'uses' => 'imageController@deleteImage',
    'as' => 'delete-image'
]);

//save massage
Route::post('/massage/send-massages',[
    'uses' => 'IndexController@sendMassage',
    'as' => 'send-massage'
]);
//save massage

//view massage

Route::get('/massages/view-massages',[
    'uses' => 'IndexController@viewMassages',
    'as' => 'view-massages'
]);
//view massage
//delete massage
Route::get('/massages/delete-massage/{id}',[
    'uses' => 'IndexController@deleteMassage',
    'as' => 'delete-massage'
]);
//delete massage


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

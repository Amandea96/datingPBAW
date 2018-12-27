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

//Route::get('/users', function () {
 //   return view('users');
//});
Route::get('/listUsers',[
'uses'=>'listPersonCtrl@show',
'as'=>'listPerson.show']);


Route::get('/edit',[
'uses'=>'RegisterController@create',
'as'=>'personEdit']);

Route::get('/account',[
'uses'=>'listPersonCtrl@account',
'as'=>'accountShow']);
//Route::post('/users','listPersonCtrl@add');


//Route::get('/profile', 'PersonListCtrl@show')->name('users');
Route::view('/homePage', 'welcome');
//Route::view('/listUsers', 'users');

Route::get('/', function () {
    return view('welcome');
});
/*Route::get('users', function()
{
    return 'Users!';
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

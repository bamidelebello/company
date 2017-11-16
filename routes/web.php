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
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');




$this->middleware(['auth'])->group(function(){
$this->get('projects/create/{company_id?}','ProjectsController@create');
$this->resource('projects','ProjectsController');
$this->resource('companies','CompaniesController');
$this->resource('roles','RolesController');
$this->resource('tasks','TasksController');
$this->resource('user','UsersController');
$this->resource('comments','CommentsController');
 $this->get('sweet','CommentsController@index');

//  $this->get('/user','UsersController@newshow');
// $this->post('/store/form','UsersController@formstore');



$this->get('/profile','ProfileController@show');
$this->post('/addProfile','ProfileController@addProfile');
 });






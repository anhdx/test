<?php
use Illuminate\Support\Facades\Hash;

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

Route::get('/login','LoginController@getLogin')->name('login');
Route::get('/register','LoginController@getRegister')->name('register');
Route::post('/register','LoginController@postRegister');
Route::post('/login','LoginController@postLogin')->middleware('checkAuth');
Route::get('/home', 'LoginController@index')->middleware('islogin')->name('home');
Route::get('/logout','LoginController@logout')->name('logout');
Route::post('/file','LoginController@postFile')->name('postFile');

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/login', 'AuthController@login')->name('login');
// Route::get('/logout', 'AuthController@logout');
// Route::post('/_postlogin', 'AuthController@_postlogin');

Auth::routes();
Route::get('/pesan/{id}', 'ServiceController@bookKamar');
Route::get('/pdf/{id}', 'ServiceController@pdf');

Route::group(['middleware' => ['auth']], function () {
    // Route::get('/admin', 'AdminController@index');
    Route::get('/kehamilan', 'HomeController@kehamilan');
    Route::get('/manage', 'HomeController@manage');
    Route::get('/user', 'UserController@index');
    Route::get('/pick/bidan/{id}', 'KontroController@pick');
    Route::post('/book/bidan', 'KontroController@storeBook');
    Route::get('/mycontrol/{id}', 'KontroController@show');
    Route::get('/detail/{id}', 'KontroController@showDetail');
    Route::get('/persalinan', 'KontroController@showrs');
    Route::get('/pesan/kamar/{id}', 'ServiceController@pesankamar');
    Route::get('/mykamar/{id}', 'ServiceController@showKamarById');
    Route::post('/booked', 'ServiceController@book');
});

Route::group(['middleware' => ['auth', 'CheckRole:admin']], function () {
    Route::get('/user/bidan', 'UserController@showBidan');
    Route::get('/user/rs', 'UserController@showRs');
    Route::post('/bidan/store', 'UserController@createBidan');
    Route::post('/rs/store', 'UserController@createRs');
});
Route::group(['middleware' => ['auth', 'CheckRole:bidan']], function () {
    Route::get('/menu/bidan', 'UserController@menubidan');
    Route::get('/setting/{id}', 'UserController@settingBidan');
    Route::get('/kontrol/{id}', 'KontroController@kontrolBidan');
    Route::get('/cek/{id}', 'KontroController@cek');
    Route::post('/cek/store', 'KontroController@cekStore');
});
Route::group(['middleware' => ['auth', 'CheckRole:rs']], function () {
    Route::get('/menu/rs', 'UserController@menurs');
    Route::get('/kamar/{id}', 'ServiceController@kamar');
    Route::get('/mybook/{id}', 'ServiceController@kamarbook');
    Route::post('/kamar/store', 'ServiceController@storeKamar');
    Route::post('/skl/store', 'ServiceController@skl');
    Route::get('/detailbook/{id}', 'ServiceController@showDetail');
});

Route::get('/home', 'HomeController@index')->name('home');

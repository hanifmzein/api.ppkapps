<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::group(['prefix' => 'v1'], function () {

    Route::post('login', 'AuthController@login');

    Route::get('mahasiswa', 'MahasiswaController@index');
    Route::get('mahasiswa/{prodi_id}/{kelompok_id}', 'MahasiswaController@filter');
    Route::put('mahasiswa/presensi/{nim}', 'PresensiController@update');
    Route::put('mahasiswa/nilai/{nim}', 'NilaiController@update');
    Route::get('dosen', 'DosenController@index');
    Route::get('dosen/{nip}', 'DosenController@show');
    Route::put('dosen/{id}', 'DosenController@update');
    Route::get('pendamping', 'PendampingController@index');
    Route::get('pendamping/{nim}', 'PendampingController@show');
    Route::put('pendamping/{nim}', 'PendampingController@update');
});

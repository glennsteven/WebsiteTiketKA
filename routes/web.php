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
//Register
Route::get('/register', 'AuthController@getRegister')->name('register')->middleware('guest');
Route::post('/register', 'AuthController@postRegister')->middleware('guest');

//login
Route::get('/login', 'AuthController@getLogin')->name('login');//->middleware('guest');
Route::post('/login', 'AuthController@postLogin');//->middleware('guest');
Route::get('/index/adminberanda', 'KeretaController@admin');

Route::get('/beranda', function() {
    return view('beranda');
})->middleware('auth')->name('beranda');

Route::get('/logout', 'AuthController@logout')->middleware('auth')->name('logout');
Route::get('/beranda', 'KeretaController@beranda');

Route::get('/beranda', 'KeretaController@beranda')->middleware('auth')->name('beranda');


//bagian admin Stasiun
Route::get('/index/stasiun', 'KeretaController@stasiun');
Route::get('index/hapus/{id}', 'KeretaController@hapus');
Route::post('/index/simpan', 'KeretaController@simpan');
Route::get('/index/perbaruist/{id}', 'KeretaController@perbaruist');
Route::post('/index/ubah', 'KeretaController@ubah');
Route::get('/index/hilang/{id}', 'KeretaController@hilang');

//bagian admin Jadwal
Route::get('/index/jadwalkereta', 'KeretaController@jadwalkereta');
Route::post('/index/tambahjadwal', 'KeretaController@tambahjadwal');
Route::get('/index/edit/{id}', 'KeretaController@edit');
Route::post('/index/fixedit', 'KeretaController@fixedit');

//tiket pesan
Route::get('/index/pesan/{id}', 'KeretaController@pesan');
Route::post('/transfer', 'KeretaController@transfer');


//cari Rute Kereta
Route::get('/index/carikereta', 'KeretaController@carikereta');

//menampilkan data penumpang di admin
Route::get('/index/konfirmasipem', 'KeretaController@penumpang');

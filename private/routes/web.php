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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::post('/changePassword','HomeController@changePassword')->name('changePassword');

Route::resource('','FrontendController');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin','BackendController@index');
Route::get('keluar','AkunController@Logout');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/changePassword','HomeController@showChangePasswordForm');
Route::get('lupaPassword', 'AkunController@LupaPassword');

Route::post('ResetAkun', 'AkunController@ResetPassword')->name('email');


Route::resource('admin/gejala','GejalaController');
Route::resource('hasil','HasilController');
Route::resource('konsultasi','KonsultasiController');
Route::resource('admin/relasi','RelasiController');
Route::resource('admin/penyakit','DiagnosaController');
Route::resource('akun','AkunController');
Route::resource('riwayat','HistoriController');
Route::resource('ganti','ChangePwController');
Route::resource('cetak','CetakController');
Route::resource('sendMail','CetakEmailController');
Route::resource('admin/laporan','laporanController');

Route::view('/tentang', 'frontend.tentang');
Route::view('/register', 'frontend.register');
Route::view('/hasil', 'frontend.hasil');
Route::view('/gantiPassword', 'frontend.changePassword');
Route::view('admin/aturan', 'backend.others.aturan');


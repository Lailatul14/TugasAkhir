<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@index');

Route::get('projectTA', 'HomeController@dashboard');

Route::get('dashboard', 'HomeController@dashboard');

// Route::get('data_customer', function () {
//     return view('customer/data_customer');
// });
// Route::get('create_customer', function () {
//     return view('customer/create');
// });

Route::get('PegawaiIndex', 'Data\PegawaiController@index') ;
Route::get('PegawaiCreate', 'Data\PegawaiController@create') ;
Route::post('PegawaiStore', 'Data\PegawaiController@store') ;
Route::get('PegawaiEdit{id}', 'Data\PegawaiController@edit') ;
Route::post('PegawaiUpdate', 'Data\PegawaiController@update') ;
Route::get('PegawaiDestroy/{id}', 'Data\PegawaiController@destroy') ;

Route::get('MerkIndex', 'Data\MerkController@index') ;
Route::get('MerkCreate', 'Data\MerkController@create') ;
Route::post('MerkStore', 'Data\MerkController@store') ;
Route::get('MerkEdit{id}', 'Data\MerkController@edit') ;
Route::post('MerkUpdate', 'Data\MerkController@update') ;
Route::get('MerkDestroy/{id}', 'Data\MerkController@destroy') ;

Route::get('KotaIndex', 'Data\KotaController@index') ;
Route::get('KotaCreate', 'Data\KotaController@create') ;
Route::post('KotaStore', 'Data\KotaController@store') ;
Route::get('KotaEdit{id}', 'Data\KotaController@edit') ;
Route::post('KotaUpdate', 'Data\KotaController@update') ;
Route::get('KotaDestroy/{id}', 'Data\KotaController@destroy') ;

Route::get('CustomerIndex', 'Data\CustomerController@index') ;
Route::get('CustomerCreate', 'Data\CustomerController@create') ;
Route::post('CustomerStore', 'Data\CustomerController@store') ;
Route::get('CustomerEdit{id}', 'Data\CustomerController@edit') ;
Route::post('CustomerUpdate', 'Data\CustomerController@update') ;
Route::get('CustomerDestroy/{id}', 'Data\CustomerController@destroy') ;

Route::get('MobilIndex', 'Data\MobilController@index') ;
Route::get('MobilCreate', 'Data\MobilController@create') ;
Route::post('MobilStore', 'Data\MobilController@store') ;
Route::get('MobilEdit{id}', 'Data\MobilController@edit') ;
Route::post('MobilUpdate', 'Data\MobilController@update') ;
Route::get('MobilDestroy/{id}', 'Data\MobilController@destroy') ;

Route::get('PaketIndex', 'Data\PaketController@index') ;
Route::get('PaketCreate', 'Data\PaketController@create') ;
Route::post('PaketStore', 'Data\PaketController@store') ;
Route::get('PaketEdit{id}', 'Data\PaketController@edit') ;
Route::post('PaketUpdate', 'Data\PaketController@update') ;
Route::get('PaketDestroy/{id}', 'Data\PaketController@destroy') ;

Route::get('PenyewaanIndex', 'Transaksi\PenyewaanController@index') ;
Route::get('PenyewaanCreate', 'Transaksi\PenyewaanController@create') ;
Route::get('PenyewaanInvoice{id}', 'Transaksi\PenyewaanController@show') ;
Route::get('PenyewaanEdit{id}', 'Transaksi\PenyewaanController@edit') ;
Route::post('PenyewaanStore', 'Transaksi\PenyewaanController@update') ;
Route::get('PenyewaanDestroy/{id}', 'Transaksi\PenyewaanController@destroy') ;


Route::post('DetilSewa_Index', 'Transaksi\SewaController@store') ;
Route::get('DetilSewa_Index', 'Transaksi\SewaController@index') ;

Route::get('login', 'Login\LoginController@index') ;
Route::post('proses', 'Login\LoginController@proses') ;
Route::get('logout', 'Login\LoginController@logout') ;

Route::get('PembayaranIndex', 'Transaksi\PembayaranController@index') ;
Route::get('PenyewaanCreate', 'Transaksi\PenyewaanController@create') ;
Route::get('PenyewaanInvoice{id}', 'Transaksi\PenyewaanController@show') ;
Route::get('PenyewaanEdit{id}', 'Transaksi\PenyewaanController@edit') ;
Route::post('PenyewaanUpdate', 'Transaksi\PenyewaanController@update') ;
Route::get('PenyewaanDestroy/{id}', 'Transaksi\PenyewaanController@destroy') ;

Route::get('DaftarSewaIndex', 'Transaksi\DaftarPenyewaanController@index') ;
Route::post('DaftarSewaUpdate', 'Transaksi\DaftarPenyewaanController@update') ;
Route::get('DaftarSewaEdit{id}', 'Transaksi\DaftarPenyewaanController@edit') ;

Route::get('Register', 'Login\RegisterController@index') ;
Route::post('RegisterStore', 'Login\RegisterController@store') ;
// Route::get('invoice_penyewaan', function () {
//     return view('Penyewaan/invoice_penyewaan');
// });

Route::get('invoice_pdf', function () {
    return view('Penyewaan/invoice_pdf');
});

// Route::get('login', function () {
//     return view('Login/login');
// });

// Route::get('data_merk', function () {
//     return view('merk/data_merk');
// });
// Route::get('create_merk', function () {
//     return view('merk/create');
// });
// Route::get('edit_merk', function () {
//     return view('merk/edit');
// });


// // Route::get('data_user', function () {
// //     return view('User/data_user');
// // });
// // Route::get('create_user', function () {
// //     return view('User/create');
// // });
// Route::get('edit_pegawai', function () {
//     return view('Pegawai/edit');
// });


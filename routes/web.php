<?php

use Illuminate\Support\Facades\Route;
use App\Models\Car;
use App\Http\Controllers\CoffeController;
use App\Http\Controllers\ObatController;
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
Route::get('/haii', function () {
    return view('hai',[
        'mata'  => 'haloo selamat pagi',
        'nama'  => 'Adelia Nafiatul Farida',
        'nim'   => '1201220025',
        'kelas' => 'SE 05-01',
        'asal'  => 'korea'
    ]);
});
Route::get('/hidung', function () {
    return view('hidung');
});
Route::get('/profile', function () {
    return view('profile',[
    'mata'  => 'Biodata diri',
    'nama'  => 'Adelia Nafiatul Farida',
    'nim'   => '1201220025',
    'kelas' => 'SE 05-01',
    'asal'  => 'korea',
    'greeting' => Car::getGreeting()
    ]);

});
// Route::get('/greeting',[CoffeController::class,'index']);
Route::get('/obat', [ObatController::class,'index']);
Route::get('/obat/{id}',[ObatController::class,'show']);


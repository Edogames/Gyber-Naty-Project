<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailSender;
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
    return view('home');
})->name('home');

Route::get('/sale', function () {
    return view('sale');
})->name('sale');

Route::post('/send', 'App\Http\Controllers\MailSender@send')->name('sale.send');

Route::get('/success', function () {
    return view('success');
})->name('success');
Route::get('/fail', function () {
    return view('fail');
})->name('fail');

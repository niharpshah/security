<?php

use App\Http\Controllers\SendemailController;
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

Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/review', function () {
    return view('review');
});

Route::post('/email', [SendemailController::class, 'SendEmail']);

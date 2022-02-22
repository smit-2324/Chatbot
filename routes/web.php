<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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
    return view('chatbot');
});
Route::get('sign', function () {
    return view('sign');
});
Route::get('map', function () {
    return view('map');
});
Route::get('userPdf', function () {
    return view('userPdf');
});
Route::post('ajaxRequest', [UserController::class, 'ajaxRequestPost'])->name('ajaxRequest.post');
Route::post('pdfgenerate', [UserController::class, 'pdfgenerate'])->name('pdfgenerate');


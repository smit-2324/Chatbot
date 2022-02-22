<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AjaxController;


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
Route::get('sign', function () {
    return view('sign');
});
Route::get('map', function () {
    return view('map');
});
Route::post('ajaxRequest', [AjaxController::class, 'ajaxRequestPost'])->name('ajaxRequest.post');
Route::get('pdfgenerate', [AjaxController::class, 'pdfgenerate'])->name('pdfgenerate');
Route::get('userPdf', function () {
    return view('userPdf');
});

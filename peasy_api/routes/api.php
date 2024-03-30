<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::get('/', function (Request $request) {
    return "Bienvenido a Peasy :)";
});
Route::get('/superadmin', function (Request $request) {
    return "Bienvenido a Peasy :)";
})->name('superadmin.home');

Route::get('/admin', function (Request $request) {
    return "Bienvenido a Peasy :)";
})->name('admin.home');

Route::get('/user', function (Request $request) {
    return "Bienvenido a Peasy :)";
})->name('user.home');

Route::get('/client', function (Request $request) {
    return "Bienvenido a Peasy :)";
})->name('client.home');

Route::get('/test', function (Request $request) {
    return "Hola mundo, sobreviví a un test";
});

Route::middleware('auth:sanctum')->get('/hello', function (Request $request) {
    return $request->user();
});

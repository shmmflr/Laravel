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

Route::get('/', function () {
    return view('welcome');
});
Route::get('post', [\App\Http\Controllers\PostController::class, 'index']);
Route::get('post/store', [\App\Http\Controllers\PostController::class, 'store']);
Route::get('post/update', [\App\Http\Controllers\PostController::class, 'update']);
Route::get('post/del', [\App\Http\Controllers\PostController::class, 'delete']);


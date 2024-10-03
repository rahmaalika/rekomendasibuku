<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [UserController::class, 'login']);
Route::post('/auth' , [UserController::class, 'auth']);
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/home', [UserController::class, 'home']);
Route::get('/rekomendasi', [UserController::class, 'rekomendasi']);
Route::get('/tampilanbuku1', [UserController::class, 'tampilanbuku1']);
Route::get('/tampilanbuku2', [UserController::class, 'tampilanbuku2']);
Route::get('/tampilanbuku3', [UserController::class, 'tampilanbuku3']);
Route::get('/tampilanbuku4', [UserController::class, 'tampilanbuku4']);
Route::get('/pengaturan', [UserController::class, 'pengaturan']);
Route::get('/buku', [UserController::class, 'buku']);
Route::get('/favorite', [UserController::class, 'favorite']);
Route::get('/tampilanfavorite1', [UserController::class, 'tampilanfavorite1']);

Route::get('/index', [BukuController::class, 'show']);
Route::post('/search', [BukuController::class, 'search']);
Route::get('/buku/create', [BukuController::class, 'create']);
Route::post('/buku/add', [BukuController::class, 'add']);
Route::get('/buku/edit/{id}', [BukuController::class, 'edit']);
Route::post('/buku/update/{id}', [BukuController::class, 'update']);
Route::get('buku/delete/{id}', [BukuController::class, 'delete']);
Route::get('/dasboard', [BukuController::class, 'dasboard']);


    
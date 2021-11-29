<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\pengurusController;
use App\Http\Controllers\bukuController;

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

Route::get('/dashboard', function () {
    return view('dashbord/dashboard');
});

//santri
Route::get('Santri',[SantriController::class,'index']);
Route::get('/Santri/create',[SantriController::class,'add']) ;
Route::post('/Santri/store',[SantriController::class,'store']) ;
Route::get('Santri/{id_Santri}/edit', [SantriController::class,'edit']);
Route::post('Santri/{id_Santri}/update', [SantriController::class,'update']);
Route::get('Santri/{id_Santri}/delete',[SantriController::class,'delete']);

//pengurus
Route::get('pengurus',[pengurusController::class,'index']);
Route::get('/pengurus/create',[pengurusController::class,'add']) ;
Route::post('/pengurus/store',[pengurusController::class,'store']) ;
Route::get('pengurus/{id_pengurus}/edit', [pengurusController::class,'edit']);
Route::post('pengurus/{id_pengurus}/update', [pengurusController::class,'update']);
Route::get('pengurus/{id_pengurus}/delete',[pengurusController::class,'delete']);


//buku
Route::get('buku',[bukuController::class,'index']);
Route::get('/buku/create',[bukuController::class,'add']) ;
Route::post('/buku/store',[bukuController::class,'store']) ;
Route::get('buku/{id_buku}/edit', [bukuController::class,'edit']);
Route::post('buku/{id_buku}/update', [bukuController::class,'update']);
Route::get('buku/{id_buku}/delete',[bukuController::class,'delete']);

//login
Route::get('/login', function(){
    return view ('login/login');
    });
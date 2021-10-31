<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\pengurusController;

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
//santri
Route::get('Santri',[SantriController::class,'index']);
Route::get('Santri/{id_Santri}/edit', [SantriController::class,'edit']);
Route::post('Santri/{id_Santri}/update', [SantriController::class,'update']);
Route::get('Santri/{id_Santri}/delete',[SantriController::class,'delete']);

//pengurus
Route::get('pengurus',[pengurusController::class,'index']);
Route::get('pengurus/{id_pengurus}/edit', [pengurusController::class,'edit']);
Route::post('pengurus/{id_pengurus}/update', [pengurusController::class,'update']);
Route::get('pengurus/{id_pengurus}/delete',[pengurusController::class,'delete']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SetlistController;



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

Route::get('/', [SetlistController::class,'index']);
Route::get('setlists/create', [SetlistController::class,'create']);
Route::post('/posts', [SetlistController::class,'store']);
Route::get('/setlists/{setlist}',[SetlistController::class,'show']);
Route::get('setlists/artist_create',[SetlistController::class,'artist_create']);
Route::get('setlists/venue_create',[SetlistController::class,'venue_create']);




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

Route::get('/', [SetlistController::class,'index'])->name('setlist.index');
Route::get('setlists/create', [SetlistController::class,'create']);
Route::post('/posts', [SetlistController::class,'store']);
Route::get('setlists/artist_create',[SetlistController::class,'show_artist_create']);
Route::post('/posts/artists', [SetlistController::class,'create_artist']);
Route::get('setlists/venue_create',[SetlistController::class,'show_venue_create']);
Route::post('/posts/venues',[SetlistController::class,'create_venue']);
Route::get('setlists/music_create',[SetlistController::class,'show_music_create']);
Route::post('/posts/musics',[SetlistController::class,'create_music']);
Route::get('setlists/setlist_list',[SetlistController::class,'show_list']);
// Route::get('/setlists/{setlist}',[SetlistController::class,'show']);
Route::get('/setlists/setlist_show',[SetlistController::class,'show']);
Route::get('/search',[SetlistController::class,'search']);


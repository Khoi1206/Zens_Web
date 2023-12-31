<?php

use App\Http\Controllers\StoryController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [StoryController::class, 'read']);
Route::get('/vote/{id}/{vote}', [StoryController::class, 'vote']);
Route::get('/btn-read', [StoryController::class, 'btnRead']);

<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\TodoController;
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

//Route::get('/', [ PagesController::class, 'index' ]);
//Route::get('/about-us', [ PagesController::class, 'about' ]);


Route::get('/todo', [TodoController::class, 'index']);
Route::post('/todo', [TodoController::class, 'store']);
Route::put('/todo/{todo}', [TodoController::class, 'update']);

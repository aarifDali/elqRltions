<?php

use App\Http\Controllers\StudentController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/show', [StudentController::class, 'index']);
Route::get('/countries', [StudentController::class, 'map']);
Route::get('/states', [StudentController::class, 'states']);
Route::get('/regions', [StudentController::class, 'regions']);

Route::get('/cities', [StudentController::class, 'cities']);
Route::get('/stores', [StudentController::class, 'stores']);

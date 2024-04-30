<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Video;

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



Route::get('/show', [StudentController::class, 'index']);
Route::get('/countries', [StudentController::class, 'map']);
Route::get('/states', [StudentController::class, 'states']);
Route::get('/regions', [StudentController::class, 'regions']);

Route::get('/cities', [StudentController::class, 'cities']);
Route::get('/stores', [StudentController::class, 'stores']);


Route::get('/', function() {
    // // $post = Post::create([
    // //     'title' => 'Post1'
    // // ]);

    // $post = Post::find(2);
    // $post->comments()->create([
    //     'body' => '2nd comment for Post1'
    // ]);
    $video = Video::find(1);

    $video->comments()->create([
        'body' => '2nd Comment for Video 1'
    ]);

    
    // dd($post->comments);
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageController;
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
//     return view('frontend.app');
// });

Route::get('/',[PageController::class,"home"]);
Route::get('/about',[PageController::class,"about"]);
Route::get('/contact',[PageController::class,"contact"]);
Route::get('/course',[PageController::class,"course"]);
Route::get('/detailcourse',[PageController::class,"course_detail"]);
Route::get('/feature',[PageController::class,"feature"]);
Route::get('/instrutor',[PageController::class,"instrutor"]);
Route::get('/testimonal',[PageController::class,"testimonal"]);
Route::get('/secondpage',[PageController::class,"secondpage"]);




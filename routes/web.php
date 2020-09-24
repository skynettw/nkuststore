<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

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
    return view('welcome');
});

Route::get('/test', function () {
    $names = array("Richard", "Tom", "Lisa", "Maria");
    return view('test', compact('names'));
});
Route::get('/news', [NewsController::class, "index"])->name("news.index");
Route::get('/del/{id}/', [NewsController::class, "del"])->name("news.del");
Route::post('/postit', [NewsController::class, "postit"])->name("news.postit");
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

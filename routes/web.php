<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

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
// Auth::routes();

Route::get('/', function () {
    return view('pages.welcome');
});

// Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/competitions', [FrontController::class, 'indexCompetitions'])->name('competitions.index');
Route::get('/competitions/slug', [FrontController::class, 'showCompetitions'])->name('competitions.show');
Route::get('/news', [FrontController::class, 'indexNews'])->name('news.index');
Route::get('/news/{slug}', [FrontController::class, 'showNews'])->name('news.show');
Route::get('/test', [FrontController::class, 'showTest']);

require __DIR__.'/auth.php';

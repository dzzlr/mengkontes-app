<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CompetitionController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/competitions', [FrontController::class, 'index'])->name('competitions');
Route::get('/competitions/{slug}', [FrontController::class, 'show']);
Route::get('/test', [FrontController::class, 'showTest']);

Route::group(['middleware'=>'checkRole:organizer','prefix'=>'organizer'], function() {
    Route::get('/', [CompetitionController::class, 'index'])->name('organizer.index');

    Route::group(['prefix'=>'competitions','as'=>'competitions.'], function() {
        Route::get('/', [CompetitionController::class, 'index'])->name('index');
        Route::get('create', [CompetitionController::class, 'create'])->name('create');
        Route::get('edit/{competition:slug}', [CompetitionController::class, 'edit'])->name('edit');
        Route::get('view/{competition:slug}', [CompetitionController::class, 'show'])->name('show');
    });
});


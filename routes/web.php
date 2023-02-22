<?php

use App\Http\Controllers\System\PostController;
use App\Http\Controllers\System\SiteController;
use App\Http\Controllers\System\VideoController;
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

# Routes sites
Route::controller(SiteController::class)
    ->prefix('/')
    ->as('site-')
    ->group(function () {

        Route::get('/', 'index')->name('index');

    });

# Routes posts
Route::controller(PostController::class)
    ->prefix('posts')
    ->as('post-')
    ->group(function () {

        Route::any('/{slug}', 'show')->name('show');

    });

# Routes posts
Route::controller(VideoController::class)
    ->prefix('videos')
    ->as('video-')
    ->group(function () {

        Route::any('show/{id}', 'show')->name('show');

    });

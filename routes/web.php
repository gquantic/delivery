<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Helpers\Helper;
use App\Http\Controllers\AuthenticationController;

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

Route::redirect('/', '/dashboard/');

/**
 * Routes for services pages (auth, register, email confirm and other...)
 */
Route::prefix('/service')->group(function () {
    $pageData = [
        'header' => false,
        'breadcrumbs' => [
            false,
            'items' => [],
        ],
    ];

    Route::get('/authorization', function () use ($pageData) {
        return view('service.auth', compact('pageData'));
    });

    Route::get('/registration', function () use ($pageData) {
        return view('service.register', compact('pageData'));
    });
});

/**
 * Routes for dashboard pages
 */
Route::prefix('dashboard')->middleware('auth')->group(function () {
    $pageData = [
        'header' => true,
        'breadcrumbs' => [
            true,
            'items' => [],
        ],
    ];

    Route::get('/', function () use ($pageData) {
        return view('profile.dashboard', compact('pageData'));
    });
});

// locale Route
Route::get('lang/{locale}', [LanguageController::class, 'swap']);

Route::get('add', function () {
    return "Hello deploy) 2d";
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

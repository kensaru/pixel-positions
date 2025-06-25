<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\RegisteredUserController;

Route::view('/', 'index');

// using resources route name becomes implicit e.g. route('users.show') is implied and can be used in any href=""
// Route::group(['middleware' => 'auth'],
// Route::resource('register', RegisteredUserController::class)->only(['create', 'store']);
// Route::resource('login', SessionController::class)->except(['index', 'edit','show', 'update', 'destroy']);

// );

/// can have multiple controller groups within a route::group
Route::group(['prefix' => 'jobs'], function () {

    // remember that name is really only a shorthand for the view/href NOT THE URI
    Route::controller(JobController::class)->group(function () {
        Route::get('', 'index')->name('jobs');
        // Route::get('show', 'show')->name('carz');
    });
});


Route::get('/search', SearchController::class);
Route::get('/tags/{tag:name}', TagController::class);


Route::middleware(['guest'])->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create']);
    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [SessionController::class, 'create']);
    Route::post('login', [SessionController::class, 'store']);
});

// delete route on destroy methods
Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');



//  Route::redirect('/jobs', '/');
Route::fallback(fn() => '405 err...');

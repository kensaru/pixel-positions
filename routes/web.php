<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;


// route name becomes implicit e.g. route('users.show') is implied and can be used in any href=""
// Route::resource('users', UserController::class)->only(['index', 'show']);
// Route::resource('users', UserController::class)->except(['index', 'show']);


/// can have multiple controller groups within a route::group
Route::group(['prefix'=> 'jobs'], function () {

    // remember that name is really only a shorthand for the view/href NOT THE URI
Route::controller( JobController::class)->group(function () {
        Route::get('', 'index')->name('jobs');
        // Route::get('show', 'show')->name('carz');
});

});



//  Route::redirect('/jobs', '/');

Route::fallback(fn() => '405 err...');

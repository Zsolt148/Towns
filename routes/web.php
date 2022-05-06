<?php

use Illuminate\Support\Facades\Route;

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

// GUEST routes
Route::get('/', function () {
    return view('index');
})->name('home');

// USERS routes
Route::prefix('portal')
    ->middleware(['auth', 'role:user'])
    ->group(function () {

        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
});

// ADMIN routes
Route::prefix('admin')
    ->name('admin:')
    ->middleware(['auth', 'role:admin'])
    ->group(function () {

        Route::resource('users', App\Http\Controllers\UserController::class);

        Route::resource('counties', App\Http\Controllers\CountyController::class);

        Route::resource('towns', App\Http\Controllers\TownController::class);

        Route::resource('populations', App\Http\Controllers\PopulationController::class);

    });

require __DIR__.'/auth.php';

Route::resource('post2s', App\Http\Controllers\Post2Controller::class);
Route::get('posts', 'App\Http\Controllers\Post2Controller@getall')->name('posts.index');
Route::get('posts/{id}', 'App\Http\Controllers\Post2Controller@show2')->name('posts.show');

<?php

use App\Http\Controllers\Post2Controller;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('index');
})->name('home');

Route::prefix('portal')
    ->middleware(['auth', 'role:user'])
    ->group(function () {

        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

        Route::prefix('admin')
            ->name('admin:')
            ->middleware(['role:admin'])
            ->group(function () {
                Route::resource('users', \App\Http\Controllers\Admin\UserController::class);
        });

});

require __DIR__.'/auth.php';

Route::resource('post2s', App\Http\Controllers\Post2Controller::class);
Route::get('posts', 'App\Http\Controllers\Post2Controller@getall')->name('posts.index');
Route::get('posts/{id}', 'App\Http\Controllers\Post2Controller@show2')->name('posts.show');

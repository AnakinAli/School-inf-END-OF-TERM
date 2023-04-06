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

Route::get('/', [\App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('dashboard', [\App\Http\Controllers\AuthenticatedUsers\DashboardController::class, 'index'])->name('dashboard');
    require __DIR__ . '/users/authenticated.php';

});

Route::get('topics', [\App\Http\Controllers\AuthenticatedUsers\AddTopicController::class, 'getAllTopics'])->name('topics');
Route::get('topics/{id}', [\App\Http\Controllers\AuthenticatedUsers\AddTopicController::class, 'get_topic'])->name('get_topic');


Route::fallback(function () {
    return redirect(\route('welcome'));
});
require __DIR__ . '/auth.php';

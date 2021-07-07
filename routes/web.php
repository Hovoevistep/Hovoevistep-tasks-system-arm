<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login');
});



Auth::routes();

Route::middleware('auth')->group(function() {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/settings', [TestController::class, 'settings']);
    Route::get('/import', [TestController::class, 'import']);
    Route::post('/importing', [TestController::class, 'importing']);
    Route::get('/dashboard', [TestController::class, 'dashboard']);
    Route::get('/boards', [TestController::class, 'boards']);
    Route::get('boards/view/{id}', [TestController::class, 'view']);
    Route::get('view/{id}', [TestController::class, 'viewList']);
    Route::get('view/{id}/{listId}', [TestController::class, 'viewCards']);
    Route::get('view/{id}/{listId}/{cardId}', [TestController::class, 'viewCardPage']);

});

Route::any('{error}', [TestController::class, 'errorPage']);


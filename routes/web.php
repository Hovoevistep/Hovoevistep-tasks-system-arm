<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

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


Route::get('/', [HomeController::class, 'home']);


Auth::routes();

Route::middleware('auth')->group(function() {

    Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('settings', [TestController::class, 'settings']);
    Route::get('import', [TestController::class, 'import']);
    Route::post('importing', [TestController::class, 'importing']);
    Route::get('dashboard', [TestController::class, 'dashboard']);
    Route::get('boards', [TestController::class, 'boards']);
    Route::get('boards/view/{id}', [TestController::class, 'view']);
    Route::get('view/{id}', [TestController::class, 'viewList']);
    Route::get('view/{id}/{listId}', [TestController::class, 'viewCards']);
    Route::get('view/{id}/{listId}/{cardId}', [TestController::class, 'viewCardPage']);

});

// Route::post('webhook', [TestController::class, 'webhook']);

Route::post('/webhook', function (\Illuminate\Http\Request $request) {
    // csrf_token();



    $client= new GuzzleHttp\Client();
    $res=
    $client->request('POST','https://tasks-system-am.herokuapp.com/webhook');
    dd($res->getBody());






    $response = Http::get('https://tasks-system-am.herokuapp.com/webhook');
    dump($response);
    $responsePost = Http::post('https://tasks-system-am.herokuapp.com/webhook');
    dd($responsePost);


    dd( \Illuminate\Support\Facades\Log::debug(var_export($request->all(), true)));
    return response()->json(['success' => true]);
});

Route::any('{error}', [TestController::class, 'errorPage']);


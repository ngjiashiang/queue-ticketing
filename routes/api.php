<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/offline/{counter-number}', [CounterController::class, 'toggleCounterOffline'])->where(['path' => '[1-4]'])->name('toggleCounterOffline');
Route::get('/online/{counter-number}', [CounterController::class, 'toggleCounterOnline'])->where(['path' => '[1-4]'])->name('toggleCounterOnline');
Route::get('/comp-curr/{counter-number}', [CounterController::class, 'compCurr'])->where(['path' => '[1-4]'])->name('compCurr');
Route::get('/call-next/{counter-number}', [CounterController::class, 'callNext'])->where(['path' => '[1-4]'])->name('callNext');

Route::get('/take-number', [CustomerController::class, 'takeNumber'])->name('takeNumber');
Route::get('/current-number', [CustomerController::class, 'currentNumber'])->name('currentNumber');

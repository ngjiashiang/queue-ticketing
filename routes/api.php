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

Route::get('/offline/{counter}', [CounterController::class, 'toggleCounterOffline'])->name('toggleCounterOffline')->where('counter', collect(
                [
                    '1', '2', '3', '4'
                ]
            )->implode('|'));
Route::get('/online/{counter}', [CounterController::class, 'toggleCounterOnline'])->name('toggleCounterOnline')->where('counter', collect(
                [
                    '1', '2', '3', '4'
                ]
            )->implode('|'));
Route::get('/comp-curr/{counter}', [CounterController::class, 'compCurr'])->name('compCurr')->where('counter', collect(
                [
                    '1', '2', '3', '4'
                ]
            )->implode('|'));
Route::get('/call-next/{counter}', [CounterController::class, 'callNext'])->name('callNext')->where('counter', collect(
                [
                    '1', '2', '3', '4'
                ]
            )->implode('|'));

Route::get('/take-number', [CustomerController::class, 'takeNumber'])->name('takeNumber');
Route::get('/current-number', [CustomerController::class, 'currentNumber'])->name('currentNumber');

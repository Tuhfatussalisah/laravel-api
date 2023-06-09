<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Business;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/business', [Business::class, 'index']);
Route::get('/business/search', [Business::class, 'search']);
Route::get('/business/{id}', [Business::class, 'show']);
Route::post('/business', [Business::class, 'store']);
Route::put('/business/{id}', [Business::class, 'update']);
Route::delete('/business/{id}', [Business::class, 'destroy']);

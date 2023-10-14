<?php

use App\Http\Controllers\ChannelController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/users', [UserController::class, 'index'])->name('users');
Route::post('/users', [UserController::class, 'store'])->name('store_user');
Route::get('/channels', [ChannelController::class, 'index'])->name('channels');
Route::get('/channel/{id}', [ChannelController::class, 'usersByChannel']);

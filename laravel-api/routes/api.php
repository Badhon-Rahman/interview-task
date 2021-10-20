<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('guest')->post('/api/login');

Route::middleware('guest')->post('/api/register');

Route::middleware('auth:sanctum')->get('/api/user/list');

Route::middleware('auth:sanctum')->get('/api/user/profile/{id}');

Route::middleware('auth:sanctum')->get('/api/role');

Route::middleware('auth:sanctum')->post('/api/role');

Route::middleware('auth:sanctum')->post('/api/assign/role');

Route::middleware('auth:sanctum')->post('/api/remove/assigned/role');



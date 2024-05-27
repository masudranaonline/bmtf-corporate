<?php

use App\Http\Controllers\ApiController;
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

Route::get('clients', [ApiController::class, 'client']);
Route::get('gallery-image', [ApiController::class, 'galleryImage']);
Route::get('gallery-video', [ApiController::class, 'galleryVideo']);
Route::get('careers', [ApiController::class, 'career']);
Route::get('noc-notice', [ApiController::class, 'noc']);
Route::get('news', [ApiController::class, 'news']);
Route::get('projects', [ApiController::class, 'project']);
Route::get('sliders', [ApiController::class, 'slider']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
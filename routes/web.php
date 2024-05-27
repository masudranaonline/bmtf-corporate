<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//----------------------before auth ----------------


//--------------------------------------before auth-------------

Route::get('/', function () {
    return redirect('login');
});

Route::get('/dashboard',[DashboardController::class, 'getData'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route::view('home',"dashboard")->name('home');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Slider 
Route::get('slider',[SliderController::class, 'getData']);
Route::post('add-slider', [SliderController::class, 'addData']);
Route::post('update-slider', [SliderController::class, 'updateData']);
// Project 
Route::get('project',[ProjectController::class, 'getData']);
Route::post('add-project', [ProjectController::class, 'addData']);
Route::post('update-project', [ProjectController::class, 'updateData']);
// News 
Route::get('news',[NewsController::class, 'getData']);
Route::post('add-news', [NewsController::class, 'addData']);
Route::post('update-news', [NewsController::class, 'updateData']);
// Notice 
Route::get('noc-notice',[NoticeController::class, 'getData']);
Route::post('add-noc', [NoticeController::class, 'addData']);
Route::post('update-noc', [NoticeController::class, 'updateData']);
// Career 
Route::get('career',[CareerController::class, 'getData']);
Route::post('add-career', [CareerController::class, 'addData']);
Route::post('update-career', [CareerController::class, 'updateData']);
// Gallery 
Route::get('gallery-image',[GalleryController::class, 'getImageData']);
Route::post('add-image',[GalleryController::class, 'addImageData']);
Route::post('update-image', [GalleryController::class, 'editImageData']);

Route::get('gallery-video',[GalleryController::class, 'getVideoData']);
Route::post('add-video',[GalleryController::class, 'addVideoData']);
Route::post('update-video', [GalleryController::class, 'updateVideoData']);
// Clients 
Route::get('client',[ClientController::class, 'getData']);
Route::post('add-client',[ClientController::class, 'addData']);
Route::post('update-client', [ClientController::class, 'updateData']);
// Users 
Route::get('user',[UserController::class, 'getData']);
Route::post('add-user',[UserController::class, 'addData']);
Route::get('edit-user{id}', [UserController::class,'getEditUser']);
// Route::get('profile',[UserController::class, 'getProfileData']);

// Contact form submission
Route::get('contact',[ContactController::class, 'getData']);
// Route::post('add-client',[ClientController::class, 'addData']);

});

require __DIR__.'/auth.php';
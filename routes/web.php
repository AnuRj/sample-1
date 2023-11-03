<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InspectorController;
use App\Http\Controllers\DisplayController;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::post('/home/profile/edit', [App\Http\Controllers\HomeController::class, 'update'])->name('profile-store');


Route::resource('user',UserController::class);
Route::get('user/delete/{id}',[UserController::class, 'remove'])->name('remove');


Route::resource('inspector',InspectorController::class);
Route::get('inspector/complaint/{id}',[InspectorController::class, 'complaintview'])->name('complaint-view');
Route::get('inspector/delete/{id}',[InspectorController::class, 'remove'])->name('insp-remove');

Route::get('admin/accept/{id}',[AdminController::class, 'accept'])->name('accept');
Route::get('admin/reject/{id}',[AdminController::class, 'reject'])->name('reject');
Route::get('admin/feedback/{id}',[AdminController::class, 'feedback'])->name('feedback-view');
Route::post('admin/inspector-add/{id}',[AdminController::class, 'assignInspector'])->name('inspector-assign');
Route::get('inspector/delete/{id}',[AdminController::class, 'remove'])->name('inspector-remove');
Route::resource('admin',AdminController::class);
Route::get('inspector-view',[AdminController::class, 'inspectorview'])->name('inspector-view');
Route::get('inspector-list',[AdminController::class, 'inspectorList'])->name('inspector-list');
Route::post('admin/inspectordetails/',[AdminController::class, 'inspectorDetails'])->name('inspector-details');

Route::resource('display',DisplayController::class);


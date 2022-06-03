<?php

use App\Http\Controllers\UploadController;
use App\Models\Upload;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/upload', [UploadController::class, 'index'])->name('upload.index');
Route::get('/upload/create', [UploadController::class, 'create'])->name('upload.create');
Route::post('/upload', [UploadController::class, 'store'])->name('upload.store');
Route::get('upload/edit/{id}',[UploadController::class, 'edit'])->name('upload.edit');

//kalu menggunakan eloquent samakan sama yg ada di controller
Route::post('upload/update/{upload}',[UploadController::class, 'update'])->name('upload.update');

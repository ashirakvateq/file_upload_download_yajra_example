<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin-portal', [\App\Http\Controllers\PublicController::class, 'getAdminPortal'])->name('admin.portal');
Route::get('/public-portal', [\App\Http\Controllers\PublicController::class, 'getPublicPortal'])->name('public.portal');
Route::post('/file-upload', [\App\Http\Controllers\PublicController::class, 'fileUpload'])->name('file.submit');
Route::get('/admin/get-files', [\App\Http\Controllers\PublicController::class, 'getFiles'])->name('get.files');
Route::get('/delete-files/{id}', [\App\Http\Controllers\PublicController::class, 'deleteFile'])->name('delete.file');
Route::get('/public/get-files', [\App\Http\Controllers\PublicController::class, 'getSearchFile'])->name('public.get.files');
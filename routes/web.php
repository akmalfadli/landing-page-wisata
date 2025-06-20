<?php
use App\Http\Controllers\TourismController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TourismController::class, 'index'])->name('tourism.index');
Route::post('/admin/upload/gallery', [App\Http\Controllers\GalleryUploadController::class, 'store'])
    ->middleware(['auth'])
    ->name('admin.gallery.upload');

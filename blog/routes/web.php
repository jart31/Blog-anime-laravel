<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Storage;
use App\Models\Image;

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
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('categories', CategoryController::class)->names('admin.categories');
    Route::resource('post', PostController::class)->names('admin.post');
});

Route::get('home', function () {
    return view('welcome');
})->name('home');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Route::get('/posts/{post}/image', [PostController::class, 'image'])
//     ->name('posts.image');

// Route::post('images/upload', [ImageController::class, 'upload'])
//     ->name('images.upload');

// Route::get('prueba', function(){
//     $files = Storage::files('images');
//     $images = Image::pluck('path')->toArray();

//     Storage::delete(array_diff($files, $images));
// });
require __DIR__.'/auth.php';

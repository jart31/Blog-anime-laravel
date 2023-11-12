<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PdfController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puedes registrar rutas web para tu aplicación.
| Estas rutas son cargadas por el RouteServiceProvider dentro de un grupo
| que contiene el grupo de middleware "web".
|
*/


Route::get('/posts/{id}/pdf', [PdfController::class, 'imprimirPost'])->name('posts.pdf');

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    // Aquí agregas la lógica para redirigir al usuario si es administrador
    if (auth()->check() && auth()->user()->is_admin) {
        return redirect()->route('admin.dashboard');
    }
    // Si no es administrador, muestra la vista de dashboard regular
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('admin.dashboard');

Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::resource('categories', CategoryController::class)->names('admin.categories');
    Route::resource('post', PostController::class)->names('admin.post');
});

Route::get('/articles', [ArticleController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('articles');

Route::get('/posts/{post}', [ArticleController::class, 'show'])->name('posts.show');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

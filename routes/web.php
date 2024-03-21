<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/tienda', function () {
    return view('home');
});

Route::get('categorias', [CategoriaController::class, 'index'])->name('categorias');

Route::get('/categoria/{id}', [CategoriaController::class, 'showProductos'] );

Route::get('productos', [ProductoController::class, 'index'] )->name('productos');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/categoria', function () {
    return view('formCategoria');
})->middleware(['auth', 'verified'])->name('categoria');

Route::post('store.categoria', [CategoriaController::class, 'store'])->name('store.categoria');

Route::get('tabla.edit', [CategoriaController::class, 'showCategorias'])->name('tabla.edit');

Route::get('tabla.eliminar', [CategoriaController::class, 'showCategorias'])->name('tabla.eliminar');

Route::get('verCategoria/{id}', [CategoriaController::class, 'show'])->name('verCategoria');

Route::post('delete.categoria', [CategoriaController::class, 'destroy'])->name('delete.categoria');

Route::get('show.categoria/{id}', [CategoriaController::class, 'show'])->name('show.categoria');

Route::post('update.categoria', [CategoriaController::class, 'update'])->name('update.categoria');

Route::get('producto.create', [ProductoController::class, 'create'])->name('producto.create');

Route::post('store.producto', [ProductoController::class, 'store'])->name('store.producto');

require __DIR__.'/auth.php';

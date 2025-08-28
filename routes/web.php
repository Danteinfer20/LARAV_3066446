<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;

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



Route::get('/a', function () {
    return view('welcome');
});
// RUTAS CATEGORIAS
Route::get('categories', [CategoryController::class, 'index'])->name('category.index');
Route::get('category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');
//RUTAS POSTS
Route::get('posts', [PostController::class, 'index'])->name('post.index');
Route::get('post/create', [PostController::class, 'create'])->name('post.create');
Route::post('post/store', [PostController::class, 'store'])->name('post.store');

//RUTAS DE USUARIOS
use App\Http\Controllers\UserController;

Route::get('users', [UserController::class, 'index'])->name('user.index');
Route::get('user/create', [UserController::class, 'create'])->name('user.create');
Route::post('user/store', [UserController::class, 'store'])->name('user.store');

// rutas para los perfiles
use App\Http\Controllers\ProfileController;

Route::get('profiles', [ProfileController::class, 'index'])->name('profile.index');
Route::get('profile/create', [ProfileController::class, 'create'])->name('profile.create');
Route::post('profile/store', [ProfileController::class, 'store'])->name('profile.store');

//rutas para los roles 
use App\Http\Controllers\RolController;

Route::get('roles', [RolController::class, 'index'])->name('rol.index');
Route::get('rol/create', [RolController::class, 'create'])->name('rol.create');
Route::post('rol/store', [RolController::class, 'store'])->name('rol.store');

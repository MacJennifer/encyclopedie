<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controller\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HeroeController;

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
    return view('layouts/app');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/users', App\Http\Controllers\UserController::class)->except('index', 'create', 'store');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::get('/home', [App\Http\Controllers\HeroeController::class, 'index'])->name('home');

Route::get('/heroes/{hero}', [HeroeController::class, 'show'])->name('heroes.show');

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');


Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');

Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
Route::put('/admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
Route::put('/admin/heroes/{id}', [AdminController::class, 'update'])->name('admin.update');


Route::delete('/admin/users/{id}', [AdminController::class, 'destroy'])->name('admin.users.destroy');

Route::delete('/admin/heroes/{id}', [AdminController::class, 'destroyHeroes'])->name('admin.destroyHeroes');

// Route::get('/admin/create',  [AdminController::class, 'storeHero'])->name('admin.storeHero');


Route::get('/admin/create', [AdminController::class, 'createHero'])->name('admin.create');

Route::post('/admin/storeHero', [AdminController::class, 'storeHero'])->name('admin.storeHero');

Route::get('/admin/storeHero', [AdminController::class, 'storeHero'])->name('admin.storeHero');




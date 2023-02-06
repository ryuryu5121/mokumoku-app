<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CategoryController;

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
Route::get('/',[EventController::class, 'index'] )->name('event.index');

Route::get('/category/index',[CategoryController::class, 'index'] )->name('category.index');

Route::get('/event/register', [EventController::class, 'register'] )->name('event.register');

Route::post('/event/create',[EventController::class, 'create'] )->name('event.create');

Route::get('/event/{id}',[EventController::class, 'show'])->name('event.show');

Route::get('/event/edit/{id}', [EventController::class, 'edit'])->name('event.edit');

Route::post('event/update', [EventController::class, 'update'])->name('event.update');

Route::post('event/delete/{id}', [EventController::class, 'delete'])->name('event.delete');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MenuController;

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

// Route::get('/', function () {return view('projects.index');});

// Route::get('/', function () {
//     return view('layouts.template');
// });

Route::get('/projects/index/add', [ProjectController::class, 'add']);
Route::post('/projects/index/insert', [ProjectController::class, 'insert']);
Route::get('/projects/index/edit/{id}', [ProjectController::class, 'edit']);
Route::get('/projects/favorites', [ProjectController::class, 'favorites']);
Route::get('/projects/index', [ProjectController::class, 'v_index']);




Route::resource('projects', ProjectController::class);


// Route::resource('projects', 'ProjectController');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

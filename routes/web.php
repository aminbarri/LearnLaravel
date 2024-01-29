<?php

use App\Http\Controllers\ComputresController;
use App\Http\Controllers\StaticController;
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

route::get('/hello',[StaticController::class,'index'])->name('home.index');
route::get('/contact',[StaticController::class,'contact'])->name('home.contact');

route::get('/home',[StaticController::class,'home'])->name('home.hello');
route::resource('computres' ,ComputresController::class);
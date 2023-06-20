<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GucciController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\DesignerController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;

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


Route::resource('/gucci',GucciController::class)->middleware('auth');

Route::resource('/material', MaterialController::class)->middleware('auth');

Route::resource('/designer',DesignerController::class)->middleware('auth');

Route::resource('/sale',SaleController::class)->middleware('auth');

Route::resource('/role',RoleController::class)->middleware('auth');

Route::resource('/user',UserController::class)->middleware('auth');



// Route for borrowing books
Route::get('/gucci/{id}/buy', GucciController::class . '@buy');

// Route for get all books that user has borrowed
Route::get('/bought', GucciController::class . '@bought');

Route::get('/gucci/{id}/refund', GucciController::class . '@refund');

Route::get('/error', GucciController::class . '@error')->name('error');

Route::get('/login', AuthenticationController::class . '@loginIndex')->name('login');
Route::get('/register', AuthenticationController::class . '@registerIndex');
Route::post('/login', AuthenticationController::class . '@login');
Route::post('/register', AuthenticationController::class . '@register');
Route::get('/logout', AuthenticationController::class . '@logout');


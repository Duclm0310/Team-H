<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GucciController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\DesignerController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\AuthenticationController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/gucci',GucciController::class);

Route::resource('/material', MaterialController::class);

Route::resource('/designer',DesignerController::class);

Route::resource('/sale',SaleController::class);
Route::get('/login', AuthenticationController::class . '@loginIndex');
Route::get('/register', AuthenticationController::class . '@registerIndex');
Route::post('/login', AuthenticationController::class . '@login');
Route::post('/register', AuthenticationController::class . '@register');
Route::get('/logout', AuthenticationController::class . '@logout');


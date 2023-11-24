<?php

use App\Http\Controllers\FaqController;
use App\Http\Controllers\ShopController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('welcome');
})->middleware(['verify.shopify'])->name('home');

Route::get('/shop', [ShopController::class, 'getDetails'])
    ->middleware(['verify.shopify'])
    ->name('hi');

Route::get('/groups', [FaqController::class, 'groupIndex'])
    ->middleware(['verify.shopify'])
    ->name('group.index');

Route::post('/groups', [FaqController::class, 'groupStore'])
    ->middleware(['verify.shopify'])
    ->name('group.store');

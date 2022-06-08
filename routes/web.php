<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppleController;
use App\Http\Controllers\RelationController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AppleController::class, 'index'])->name("apple") ;

Route::get('/relation', [RelationController::class, 'index'])->name("relation") ;

Route::get('/relation/{id}', [RelationController::class, 'detail'])->name("detail") ;
// Route::get('/relation/{formation}', [RelationController::class, 'detail'])->name("detail") ;

Route::get('/stagiaire/{id}', [RelationController::class, 'stagiaire'])->name("stagiaire") ;
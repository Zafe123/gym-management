<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;


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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/trainer', function () {
    return view('trainer');
})->name('trainer');

Route::get('/membership', function () {
    return view('membership');
})->name('membership');


Route::post('/createmember', [MemberController::class, 'create'])->name('createmember');
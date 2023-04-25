<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
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

Route::get('/login', [AuthenticationController::class, 'login'])->name('login');
Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout');
Route::get('/register', [AuthenticationController::class, 'register'])->name('register');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('create');
    });
    
    Route::get('/posts', function() {
        return view('posts');
    });
    
    Route::get('/categories', function() {
        return view('category');
    });
});

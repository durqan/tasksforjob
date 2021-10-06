<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyControl;

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

Route::get('/', [MyControl::class, 'index'])->name('index');
Route::get('/registrate', [MyControl::class, 'registrate']);
Route::get('/sign_up', [MyControl::class, 'sign_up'])->name('sign_up');
Route::get('/authorizate', [MyControl::class, 'authorizate']);
Route::get('/personal_page', [MyControl::class, 'personal_page']);
Route::get('/posts', [MyControl::class, 'posts']);
Route::get('/post_add', [MyControl::class, 'post_add']);

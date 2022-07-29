<?php

use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\MemberArea\Dashboard\DashbordController as HomeDashbordController;
use App\Http\Controllers\PublicArea\Contact\ContactController as ContactController;
use App\Http\Controllers\PublicArea\Home\HomeController as HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home-index');

///Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact-index');


///Dashboard
Route::get('/dashbord', [HomeDashbordController::class, 'index'])->name('dashbord');

///Blog
Route::get('/bloger', [BlogController::class, 'index'])->name('bloger-index');

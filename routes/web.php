<?php

use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\MemberArea\Dashboard\DashbordController;
use App\Http\Controllers\PublicArea\Contact\ContactController;
use App\Http\Controllers\PublicArea\Home\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');





Route::get('/', [HomeController::class, 'index'])->name('home-index');

///Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact-index');


///Dashboard
Route::get('/dashbord', [DashbordController::class, 'index'])->name('dashbord');

///Blog
Route::get('/bloger', [BlogController::class, 'index'])->name('bloger-index');


require __DIR__.'/auth.php';

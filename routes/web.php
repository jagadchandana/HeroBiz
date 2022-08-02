<?php

use App\Http\Controllers\Blog\BlogController;
use App\Http\Controllers\MemberArea\Dashboard\DashbordController;
use App\Http\Controllers\MemberArea\TesterController;
use App\Http\Controllers\PublicArea\Contact\ContactController;
use App\Http\Controllers\PublicArea\Home\HomeController;
use App\Http\Controllers\PublicArea\Request\RequestMembershipController;
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

///Request-Membership
Route::get('/request/membership', [RequestMembershipController::class, 'index'])->name('request-index');

///Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact-index');


///Dashboard
Route::get('/dashbord', [DashbordController::class, 'index'])->name('dashbord');

///Blog
Route::get('/bloger', [BlogController::class, 'index'])->name('bloger-index');

//test
Route::get('/test', [TesterController::class, 'index'])->name('tester');

//email represent
Route::get('/mailable', function () {
    $member = App\Models\Member::find(1);

    return new App\Mail\WelcomeUser($member);
});


require __DIR__.'/auth.php';

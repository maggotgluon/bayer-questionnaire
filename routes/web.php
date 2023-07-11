<?php

use App\Http\Controllers\Auth\EmailVerificationController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Passwords\Confirm;
use App\Http\Livewire\Auth\Passwords\Email;
use App\Http\Livewire\Auth\Passwords\Reset;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Auth\Verify;

use App\Http\Livewire\Admin\Dashboard as admin_dashboard;
use App\Http\Livewire\Admin\Overview as admin_overview;
use App\Http\Livewire\Admin\Users as admin_users;
use App\Http\Livewire\Quiz\Question as client_quiz;
use App\Http\Livewire\Quiz\Result as client_result;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', client_quiz::class)->name('home');
Route::middleware('guest')->group(function () {
    Route::get('login', Login::class)
        ->name('login');

    Route::get('register', Register::class)
        ->name('register');
});

Route::get('password/reset', Email::class)
    ->name('password.request');

Route::get('password/reset/{token}', Reset::class)
    ->name('password.reset');

Route::middleware('auth')->group(function () {
    // Route::view('/', 'welcome')->name('home');
    Route::get('/dash', admin_dashboard::class)->name('dashboard');
    Route::get('/admin/overview', admin_overview::class)->name('overview');
    Route::get('/admin/users', admin_users::class)->name('users');
    Route::get('email/verify', Verify::class)
        ->middleware('throttle:6,1')
        ->name('verification.notice');

    Route::get('password/confirm', Confirm::class)
        ->name('password.confirm');
});

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', EmailVerificationController::class)
        ->middleware('signed')
        ->name('verification.verify');

    Route::get('out',function(){
        Auth::logout();
        return redirect(route('home'));
    })->name('out');

    Route::post('logout', LogoutController::class)
        ->name('logout');
});


Route::get('/quiz', client_quiz::class)->name('quiz');
Route::get('/result/{path}/{result}/{age}', client_result::class)->name('result');

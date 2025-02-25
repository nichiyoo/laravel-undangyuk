<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', fn() => view('index'))->name('landing');
Route::get('/contact', [App\Http\Controllers\MessageController::class, 'create'])->name('contact.create');
Route::post('/contact', [App\Http\Controllers\MessageController::class, 'store'])->name('contact.store');

Route::get('/dashboard', function () {
  $user = Auth::user();
  return $user->role == 'admin' ? redirect()->route('admin.dashboard') : redirect()->route('user.dashboard');
})->name('dashboard')->middleware('auth');

Route::middleware(['auth'])
  ->prefix('user')
  ->as('user.')
  ->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/invitations/{invitation}/success', [App\Http\Controllers\InvitationController::class, 'success'])->name('invitations.success');
    Route::resource('invitations', App\Http\Controllers\InvitationController::class);
  });

Route::middleware(['auth', 'role:admin'])
  ->prefix('admin')
  ->as('admin.')
  ->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    Route::resource('users', App\Http\Controllers\Admin\UserController::class)->only('index');
    Route::resource('messages', App\Http\Controllers\Admin\MessageController::class)->except('edit', 'update');
    Route::resource('invitations', App\Http\Controllers\Admin\InvitationController::class)->except('create', 'store');
  });

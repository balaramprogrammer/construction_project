<?php

use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('about-us', [WebsiteController::class, 'about'])->name('about');
Route::get('contact-us', [WebsiteController::class, 'contact'])->name('contact');
Route::get('projects', [WebsiteController::class, 'projects'])->name('projects');
Route::get('services', [WebsiteController::class, 'services'])->name('services');
Route::get('How-we-work', [WebsiteController::class, 'work_process'])->name('work_process');
Route::get('admin-login', [WebsiteController::class,'admin_login'])->name('admin_login');

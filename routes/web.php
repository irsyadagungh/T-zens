<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/coba', function () {
    return view('/layouts/detail');
});

// Sign In
Route::get('/sign-up', function () {
    return view('sign-up');
});
Route::post('/sign-up/add', [LoginController::class, 'add']);

// Login
Route::get('/login', function () {
    return view('login');
});
Route::post('/login', [LoginController::class, 'login']);
Route::post('/login/done', [LoginController::class, 'loginDone']);

// Lupa Password
Route::get('/forgot', function () {
    return view('forgot-pass');
});
Route::post('/forgot/login-forgot', function () {
    return view('login-forgot');
});

// Organisasi
Route::get('/organisasi/detil-organisasi', function () {
    return view('detil-organisasi');
});
Route::get('/organisasi', function () {
    return view('organisasi');
});

// Acara
Route::get('/acara', function () {
    return view('acara');
});
Route::get('/acara/detil-acara', function () {
    return view('detil-acara');
});

// Admin
Route::get('/dashboard/view', function () {
    return view('admin');
});

// Kontak
Route::get('/kontak', function () {
    return view('contact');
});

// Admin Acara
Route::get('/admin/viewAcara', function () {
    return view('admin-acara');
});
Route::get('/admin/viewAcara/upload', function () {
    return view('acara-upload');
});

// Admin Organisasi
Route::get('/admin/viewOrganisasi/upload', function () {
    return view('upload-organisasi');
});
Route::get('/admin/viewAcara/edit', function () {
    return view('acara-edit');
});
Route::get('/admin/viewOrganisasi', function () {
    return view('admin-organisasi');
});
Route::get('/admin/viewOrganisasi/edit', function () {
    return view('edit-admin-organisasi');
});

// Edit
Route::post('/admin/viewAcara/edit2', [App\Http\Controllers\AdminController::class, 'editAcara']);
Route::post('/admin/viewOrganisasi/edit', [App\Http\Controllers\AdminController::class, 'editOrgan']);

// create
Route::post('/admin/viewAcara/upload/create', [App\Http\Controllers\AdminController::class, 'createAcara']);
Route::post('/admin/viewOrganisasi/edit/create', [App\Http\Controllers\AdminOrganisasiController::class, 'createOrganisasi']);
Route::post('/admin/viewOrganisasi/edit3', [App\Http\Controllers\AdminController::class, 'editOrganisasi']);

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

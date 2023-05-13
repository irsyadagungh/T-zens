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

Route::get('/sign-up', [ViewController::class, 'viewSign']);
Route::post('/sign-up/add', [LoginController::class, 'add']);

Route::get('/login/view', [ViewController::class, 'viewLogin']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/login/done', [ViewController::class, 'loginDone']);

Route::get('/forgot', [ViewController::class, 'viewForgot']);

Route::get('/forgot/login-forgot', [ViewController::class, 'viewLoginForgot']);

Route::get('/organisasi/detil-organisasi', [ViewController::class, 'viewDetilOrganisasi']);

Route::get('/organisasi', [ViewController::class, 'viewOrganisasi']);

Route::get('/acara', [ViewController::class, 'viewAcara']);

Route::get('/acara/detil-acara', [ViewController::class, 'viewDetilAcara']);

Route::get('/dashboard/view', [ViewController::class, 'viewAdmin']);

Route::get('/kontak', [ViewController::class, 'viewContact']);
Route::post('/admin/viewAcara', [ViewController::class, 'viewAdminAcara']);

Route::get('/admin/viewAcara/upload', [ViewController::class, 'viewAdminAcaraUpload']);
Route::get('/admin/viewAcara/edit', [ViewController::class, 'viewAdminAcaraEdit']);
Route::get('/admin/viewAcara/delete', [App\Http\Controllers\AdminController::class, 'delete']);
Route::post('/admin/viewAcara/upload/create', [App\Http\Controllers\AdminController::class, 'createAcara']);
Route::post('/admin/viewOrganisasi/edit/create', [App\Http\Controllers\AdminOrganisasiController::class, 'createOrganisasi']);
Route::get('/admin/viewOrganisasi', [ViewController::class, 'viewAdminOrganisasi']);

Route::get('/admin/viewOrganisasi/edit', [ViewController::class, 'viewAdminOrganisasiEdit']);
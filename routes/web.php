<?php

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Employees', function () {
   return view('Admin/Admin-Employees');
});
Route::get('/Departments', function () {
   return view('Admin/Admin-Departments');
});
Route::get('/Leaves', function () {
   return view('Admin/Admin-Leaves');
});
Route::get('/Questions', function () {
   return view('Admin/Admin-Questions');
});
Route::get('/Profile', function () {
   return view('Admin/profile view');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



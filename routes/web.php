<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonarC;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;

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
Route::get('/wl', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('wms/index');
});
Route::get('/qr', function () {
    return view('wms/qr');
});

Route::post('donar',[DonarC::class,'data']);
// Route::post('donar',[DonarC::class,'vldt']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/table', function () {
//     return view('table');
// });

Route::get('home',[DonarC::class,'showData']);
Route::get('/delete/{id}',[Donarc::class,'deleteMe']);
// Route::get('/home',[DonarC::class,'showData1']);


// admin
// Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    
//     Route::namespace('Auth')->group(function(){
//         //login
        
//     })
// })
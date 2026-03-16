<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentationController;

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
    return view('portfolio');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/portofolio', function () {
    return view('portfolio');
});

Route::get('auth', function () {
    return redirect('dashboard');
})->name('login');

Route::get('auth/redirect', function () {
    return redirect('dashboard');
});

Route::get('auth/callback', function () {
    return redirect('dashboard');
});

Route::get('auth/logout', function () {
    return redirect('dashboard');
});

Route::prefix('dashboard')->group(
    function () {
        Route::get('/', function () {
            return view('dashboard.layout');
        });
        Route::get('/profile', function () {
            return view('dashboard.profile');
        });
        Route::resource('halaman', \App\Http\Controllers\halamancontroller::class);
        Route::resource('documentation', DocumentationController::class);
    }
);


Route::get('halaman', function(){
    return redirect()->route('halaman.index');
});

Route::get('documentation', function(){
    return redirect()->route('documentation.index');
});

Route::get('dash', function(){
    return 'Ini halaman dash!';
});

Route::get('test', function(){
    return 'Test route berhasil!';
});

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KegiatanController;

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



Auth::routes([
    'register' => false
]);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::group(['prefix' => '/dashboard'], function(){
    Route::resource('/kegiatan', KegiatanController::class);
});

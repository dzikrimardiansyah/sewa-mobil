<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailMobilController;
use App\Http\Controllers\LoginController;
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

Route::resource('/', LoginController::class);


route::group(['prefix'=>'backsite', 'as'=>'backsite.','middleware'=>['auth:sanctum','verified']], function(){

    //dashboard
    Route::resource('dashboard', DashboardController::class);
    Route::resource('detail-mobil', DetailMobilController::class);

});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

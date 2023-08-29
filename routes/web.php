<?php

use App\Http\Controllers\User\CarrierController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\SubmitController;

use App\Http\Controllers\Admin\HomeController as HomeAdminController;
use App\Http\Controllers\Admin\SubmitController as SubmitAdminController;
use App\Http\Controllers\Admin\CarrierController as CarrierAdminController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
Route::get('/', function () { 
    return view('user.welcome');}
);

Auth::routes();

Route::group(['middleware' => 'auth'], function(){
    // user routes
    Route::group(['prefix' => 'user', 'as' => 'user.'], function(){

        Route::get('/home', [HomeController::class, 'index'])->name('home');
        Route::get('/home', [HomeController::class, 'logout'])->name('logout');

        Route::get('/carrier', [CarrierController::class, 'index'])->name('carrier.index');
        Route::get('carrier/{carrier:identifier}', [CarrierController::class, 'make'])->name('carrier.make');
        Route::post('carrier/{carrier:identifier}', [CarrierController::class, 'store'])->name('carrier.store');
        
        Route::get('submit/{submit:identifier}',[SubmitController::class, 'show'])->name('submit.show');
        Route::get('submit/{submit:identifier}/edit',[SubmitController::class, 'edit'])->name('submit.edit');
        Route::put('submit/{submit:identifier}',[SubmitController::class, 'update'])->name('submit.update');
        Route::delete('submit/{submit:identifier}',[SubmitController::class, 'destroy'])->name('submit.destroy');
        
    });

    // admin routes

    // Route::prefix('admin')
    // ->middleware('is_admin')
    // ->name()
    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'is_admin'], function(){
        Route::get('/home', [HomeAdminController::class, 'index'])->name('home');

        Route::get('/home', [SubmitAdminController::class, 'index'])->name('submit.index');
        Route::get('/identifier/approval', [SubmitAdminController::class, 'moreEditted'])->name('submit.moreEditted');
        Route::get('/identifier/approval/{carrier:identifier}', [SubmitAdminController::class, 'moreEdittedInformation'])->name('submit.moreEdittedInformation');
        Route::put('/identifier/approval/{carrier:identifier}', [SubmitAdminController::class, 'update'])->name('submit.update');

        Route::get('/carrier', [CarrierAdminController::class, 'index'])->name('carrier.index');
        Route::post('/carrier', [CarrierAdminController::class, 'store'])->name('carrier.store');
    });

});


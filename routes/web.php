<?php

use App\Http\Controllers\Admin\DestinationController as AdminDestinationController;
use App\Http\Controllers\Admin\TourController as AdminTourController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'index']);
Route::get('/tour', [PagesController::class, 'tour']);
Route::get('/tour/show/{tour}', [PagesController::class, 'tourDetail']);
Route::get('/destination', [PagesController::class, 'destination']);
Route::get('/destination/show/{destination}', [PagesController::class, 'destinationDetail']);

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){


    Route::get('/', [AuthController::class, 'dashboard']);

    Route::group(['prefix' => 'destination'], function(){

        Route::get('/', [AdminDestinationController::class, 'index']);
        Route::post('/', [AdminDestinationController::class, 'store']);
        Route::get('/create', [AdminDestinationController::class, 'create']);
        Route::get('/show/{destination}', [AdminDestinationController::class, 'show']);
        Route::post('/update/{destination}', [AdminDestinationController::class, 'update']);
        Route::get('/delete/{destination}', [AdminDestinationController::class, 'delete']);

    });

    Route::group(['prefix' => 'tour'], function(){

        Route::get('/', [AdminTourController::class, 'index']);
        Route::post('/', [AdminTourController::class, 'store']);
        Route::get('/create', [AdminTourController::class, 'create']);
        Route::get('/show/{tour}', [AdminTourController::class, 'show']);
        Route::post('/update/{tour}', [AdminTourController::class, 'update']);
        Route::get('/delete/{tour}', [AdminTourController::class, 'delete']);
    });

    Route::group(['prefix' => 'admin'], function(){

        Route::get('/', [AdminUserController::class, 'index']);
        Route::post('/', [AdminUserController::class, 'store']);
        Route::get('/create', [AdminUserController::class, 'create']);
        Route::get('/show/{user}', [AdminUserController::class, 'show']);
        Route::post('/update/{user}', [AdminUserController::class, 'update']);
        Route::get('/delete/{user}', [AdminUserController::class, 'delete']);

    });

});
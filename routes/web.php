<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\User;

use App\Http\Controllers\AppController;
use App\Http\Controllers\App;


use App\Http\Controllers\VipController;
use App\Http\Controllers\Vip;

use App\Http\Controllers\TurkificationController;
use App\Http\Controllers\Turkification;

use App\Http\Controllers\TransferMoneyFirmController;
use App\Http\Controllers\TransferMoneyFirm;




Route::get('/', function () {
    return view('backend.dashboard');
});


#--------------User------------------
// Route::resource([
//     'user' => UserController::class,
//     'app' => AppController::class,
//     'vip' => VipController::class,
//     'turkification' => TurkificationController::class,
//     'transfer-money-firm' => TransferMoneyFirmController::class,
    
    

// ]);



Route::resource(
    'user', UserController::class,
);
Route::resource(
    'app' , TurkificationController::class,
);
Route::resource(
    'vip' , TurkificationController::class,
);
Route::resource(
    'turkification' , TurkificationController::class,
);
Route::resource(
    'transfer-money-firm' , TurkificationController::class,
);
Route::get('users/{id}/category', [UserController::class, 'show_category']);
#--------------User------------------

#--------------App------------------



#--------------App------------------





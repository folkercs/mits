<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\DBController;
use App\Http\Controllers\ReservationController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('v1')->group(function () {
    Route::get('/status',fn()=>response()->json(['status' =>'ok']));
    Route::get('/restaurant/{id}',[RestaurantController::class,'list']);
    Route::get('/restaurants',[RestaurantController::class,'listall']);    

    Route::get('/menu-items/{id}',[MenuController::class,'listmenu']);

    Route::get('/dbreset',[DBController::class,'resetdb']);

    Route::get('/reservations/{id}',[ReservationController::class,'listres']);
    Route::post('/reservations',[ReservationController::class,'storeres']);


});

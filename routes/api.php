<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('v1')->group(function () {
    Route::get('/status',fn()=>response()->json(['status' =>'ok']));
    Route::get('/restaurant/{id}',[RestaurantController::class,'list']);
    Route::get('/restaurants',[RestaurantController::class,'listall']);    
});

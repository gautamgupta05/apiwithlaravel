<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dummyAPI;
use App\Http\Controllers\DeviceController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Get DummyData 
Route::get("data",[dummyAPI::class,'getData']);

// Get With Prameter Data by Id from database
Route::get('list/{id?}',[DeviceController::class,'list']);

// add Data with api
Route::post('add',[DeviceController::class,'add']);

// Update data with api / PUT Method
Route::put('update',[DeviceController::class,'update']);

// delete data with api
Route::delete("delete/{id}",[DeviceController::class,'delete']);
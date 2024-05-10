<?php

use App\Http\Controllers\CountryController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\IdentifyController;
use App\Http\Controllers\StatusController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Grupo de rutas de la api
Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers'], function () {
    Route::apiResource('employees', EmployeesController::class);
    Route::apiResource('departments', DepartmentsController::class);
    Route::apiResource('countries', CountryController::class);
    Route::apiResource('identifies', IdentifyController::class);
    Route::apiResource('statuses', StatusController::class);
});

<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PlansController;



Route::prefix('plans')->group(function () {

    Route::get('/', [PlansController::class, 'getPlans']);
    Route::post('/',[PlansController::class, 'createPlans']);
    Route::get('{idPlans}', [PlansController::class, 'showPlans']);
    Route::put('{idPlans}', [PlansController::class, 'updatePlans']);
    Route::delete('{idPlans}', [PlansController::class, 'deletePlans']);   
});


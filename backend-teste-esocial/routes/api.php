<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DomainController;

Route::get('/ping', function () {
    return response()->json(['pong' => true], 200);
});

Route::get('/domains', [DomainController::class, 'index']);
Route::get('/domain/{id}', [DomainController::class, 'show']);
Route::post('/domain', [DomainController::class, 'store']);
Route::put('/domain/{id}', [DomainController::class, 'update']);
Route::delete('/domain/{id}', [DomainController::class, 'destroy']);

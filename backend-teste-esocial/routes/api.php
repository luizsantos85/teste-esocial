<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/ping', function(){
    return response()->json(['pong' => true],200);
});


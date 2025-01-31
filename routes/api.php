<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/post', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/comments', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

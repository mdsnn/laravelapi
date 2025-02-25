<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/posts', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/dashboard', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/messages', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/notify', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

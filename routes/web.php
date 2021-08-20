<?php

use Illuminate\Support\Facades\Route;


Route::get('/',[\App\Http\Controllers\ClientController::class,'getPosts']);
Route::get('/{id}',[\App\Http\Controllers\ClientController::class,'getPostById']);
Route::get('/update/{id}',[\App\Http\Controllers\ClientController::class,'updatePostById']);
Route::get('/add',[\App\Http\Controllers\ClientController::class,'addPost']);
Route::get('/delete/{id}',[\App\Http\Controllers\ClientController::class,'deletePostById']);




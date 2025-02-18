<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('projects', ProjectController::class);
Route::apiResource('categories', CategoryController::class);
Route::apiResource('projects.tasks', TaskController::class)
    ->scoped(['task' => 'project']);
Route::apiResource('categories.tasks', TaskController::class)
    ->scoped(['task' => 'category']);

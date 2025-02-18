<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Laravel 10
//Route::apiResource('projects', ProjectController::class);
//Route::apiResource('projects.tasks', TaskController::class)
//    ->scoped(['task' => 'project']);

//Route::apiResource('categories', CategoryController::class);
//Route::apiResource('categories.tasks', TaskController::class)
//    ->scoped(['task' => 'category']);

// Laravel 11
// public routes
Route::apiResource('projects', ProjectController::class)
    ->only(['index', 'show']);
Route::apiResource('categories', CategoryController::class)
    ->only(['index', 'show']);

Route::apiResource('projects.tasks', TaskController::class)
    ->scoped()
    ->only(['index', 'show']);
Route::apiResource('categories.tasks', TaskController::class)
    ->scoped()
    ->only(['index', 'show']);

// protected routes
Route::apiResource('projects', ProjectController::class)
    ->only(['store', 'update', 'destroy'])
    ->middleware(['auth:sanctum', 'throttle:api']);
Route::apiResource('categories', CategoryController::class)
    ->only(['store', 'update', 'destroy'])
    ->middleware(['auth:sanctum', 'throttle:api']);

Route::apiResource('projects.tasks', TaskController::class)
    ->scoped()
    ->only(['store', 'update', 'destroy'])
    ->middleware(['auth:sanctum', 'throttle:api']);
Route::apiResource('categories.tasks', TaskController::class)
    ->scoped()
    ->only(['store', 'update', 'destroy'])
    ->middleware(['auth:sanctum', 'throttle:api']);

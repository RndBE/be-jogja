<?php

use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\HomepageController;
use App\Http\Controllers\Api\PageSettingController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\SolutionController;
use App\Http\Controllers\Api\SubSolutionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes — /api/v1
|--------------------------------------------------------------------------
*/

// Homepage aggregate
Route::get('/homepage', [HomepageController::class, 'index']);

// Solutions
Route::get('/solutions', [SolutionController::class, 'index']);
Route::get('/solutions/{slug}', [SolutionController::class, 'show']);

// Sub-Solutions
Route::get('/sub-solutions/{slug}', [SubSolutionController::class, 'show']);

// Products
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{slug}', [ProductController::class, 'show']);

// Projects
Route::get('/projects', [ProjectController::class, 'index']);
Route::get('/projects/featured', [ProjectController::class, 'featured']);
Route::get('/projects/{slug}', [ProjectController::class, 'show']);

// Articles / Wawasan
Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/{slug}', [ArticleController::class, 'show']);

// Clients
Route::get('/clients', [ClientController::class, 'index']);

// Page Settings
Route::get('/page-settings/{group}', [PageSettingController::class, 'show']);

// Contact Form
Route::post('/contact', [HomepageController::class, 'contact']);

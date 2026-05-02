<?php

use App\Http\Controllers\Api\AboutPageController;
use App\Http\Controllers\Api\ArticleController;
use App\Http\Controllers\Api\ChatbotController;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\CmsContentController;
use App\Http\Controllers\Api\HomepageController;
use App\Http\Controllers\Api\PageSettingController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\SolutionController;
use App\Http\Controllers\Api\SubSolutionController;
use App\Http\Controllers\Api\TestimonialController;
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

// Testimonials
Route::get('/testimonials', [TestimonialController::class, 'index']);

// Page Settings
Route::get('/page-settings/{group}', [PageSettingController::class, 'show']);

// About Page (Tentang Kami)
Route::get('/about-page', [AboutPageController::class, 'index']);

// Chatbot
Route::post('/chatbot', [ChatbotController::class, 'chat']);
Route::post('/chatbot/escalate', [ChatbotController::class, 'escalate']);
Route::get('/chatbot/poll', [ChatbotController::class, 'poll']);

// Contact Form
Route::post('/contact', [HomepageController::class, 'contact']);

// External CMS API (protected by CMS_API_TOKEN)
Route::middleware('cms.api')->prefix('cms')->group(function () {
    Route::get('/{resource}', [CmsContentController::class, 'index']);
    Route::post('/{resource}', [CmsContentController::class, 'store']);
    Route::get('/{resource}/{record}', [CmsContentController::class, 'show']);
    Route::match(['put', 'patch'], '/{resource}/{record}', [CmsContentController::class, 'update']);
    Route::delete('/{resource}/{record}', [CmsContentController::class, 'destroy']);
});

<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Productos\ProductController;

Route::apiResource('products',ProductController::class);


<?php

use App\Models\Tractor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/products', function () {
    $tractors = Tractor::all();


    return response()->json([
        ['id' => 1, 'name' => 'Laptop', 'price' => 1500.99],
        ['id' => 2, 'name' => 'Mouse', 'price' => 25.50]
    ]);
});

Route::get('/blogsjson', [BlogController::class, 'indexjson']);
Route::get('/blogs', [HomeController::class, 'getAllBlogs']); // Получить все блоги
Route::get('/blogs/{id}', [HomeController::class, 'getBlogById']); // Получить блог по ID
Route::post('/blogstore', [HomeController::class, 'store']);
// Маршруты для products
Route::get('/products', [HomeController::class, 'getAllProducts']); // Получить все продукты
Route::get('/products/{id}', [HomeController::class, 'getProductById']); // Получить продукт по ID

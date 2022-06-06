<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\IngredientsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::middleware('auth:api')->get('/product', function (Request $request){
//    return $request->products();
//});

Route::resource('/products', ProductsController::class);
Route::resource('/categories', CategoriesController::class);
Route::resource('/ingredients', IngredientsController::class);

/** For future use with Auth */
/*
Route::get('/products', ProductsController::class, 'index');
Route::post('/products', ProductsController::class, 'store');
Route::put('/products', ProductsController::class, 'update');
*/


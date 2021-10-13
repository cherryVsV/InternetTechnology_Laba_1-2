<?php

use App\Http\Controllers\Pages\CatalogMainPage\CatalogMainController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('subcategories/{id}', [CatalogMainController::class, 'getSubcategories']);
Route::get('filters/{id}', [CatalogMainController::class, 'getFilters']);
Route::get('category-product/{id}', [CatalogMainController::class, 'getCategoryProductsNumber']);
Route::post('products/categories', [\App\Http\Controllers\Pages\CartPage\CartController::class, 'getProductsByCategory']);
Route::post('add/subscription', [\App\Http\Controllers\Pages\PersonalAccount\WaitListPage\WaitListController::class, 'addSubscription']);
Route::get('categories', [\App\Http\Controllers\Pages\IndexPage\IndexController::class, 'getCategories']);
Route::post('fast/order', [\App\Http\Controllers\Pages\PersonalAccount\OrderListPage\OrderListController::class, 'makeFastOrder']);
Route::post('send/message', [\App\Http\Controllers\Pages\HelpPage\HelpController::class, 'getNewQuestion']);
Route::post('store/question/file', [\App\Http\Controllers\Pages\HelpPage\HelpController::class, 'storeFile']);
Route::post('new/phone/request', [\App\Http\Controllers\Pages\ContactPage\ContactController::class, 'addPhoneRequest']);
Route::post('new/order', [\App\Http\Controllers\Pages\Cart1Page\Cart1Controller::class, 'addNewOrder']);

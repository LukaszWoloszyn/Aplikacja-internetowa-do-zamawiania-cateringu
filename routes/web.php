<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RecipeController;
use Illuminate\Support\Facades\Route;

//strona głowna
Route::get('/home', [HomeController::class, 'home'])->name('home');

//konkretna oferta:
Route::controller(RecipeController::class)->group(function () {
    Route::get('/offer/{id}', 'main1')->name('recipes.main');
});


//wszystkie diety
Route::get('/all', [HomeController::class, 'main1'])->name('main1');

//przepis na danie
Route::get('/recip', [RecipeController::class, 'recip'])->name('recip');


//zamowienia dla admina
Route::get('/orders', [AccountController::class, 'order'])->name('order');

Route::get('/create', [OfferController::class, 'create'])->name('admin.createOff');
Route::post('/store', [OfferController::class, 'store'])->name('admin.storeOff');

//edytowanie
Route::get('/admin/offers/edit', [OfferController::class, 'adminEdit'])->name('admin.offers.edit');
Route::put('/admin/offers/{id}', [OfferController::class, 'update'])->name('admin.offers.update');

//usuwanie
Route::delete('/admin/offers/{id}', [OfferController::class, 'destroy'])->name('admin.offers.destroy');
Route::get('/admin/offers', [OfferController::class, 'adminIndex'])->name('admin.offers.index');


//logowanie
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login.authenticate');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/admin/users/create', [AccountController::class, 'create'])->name('admin.users.create');
Route::post('/admin/users', [AccountController::class, 'store'])->name('admin.users.store');

Route::middleware(['auth'])->group(function () {
    Route::get('/user/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/user/orders/create/{offer_id?}', [OrderController::class, 'create'])->name('orders.create');
    Route::post('/user/orders', [OrderController::class, 'store'])->name('orders.store');
    Route::get('/user/orders/{id}/edit', [OrderController::class, 'edit'])->name('admin.edit');
    Route::put('/user/orders/{id}', [OrderController::class, 'update'])->name('admin.update');
    Route::delete('/user/orders/{id}', [OrderController::class, 'destroy'])->name('admin.destroy');
    //przepisy
    Route::get('/recipes', [RecipeController::class, 'index'])->name('admin.recipe');
    Route::get('/recipes/create', [RecipeController::class, 'create'])->name('admin.createRecipe');
    Route::post('/recipes', [RecipeController::class, 'store'])->name('admin.storeRecipe');
    Route::get('/recipes/{id}/edit', [RecipeController::class, 'edit'])->name('admin.editRecipe');
    Route::put('/recipes/{id}', [RecipeController::class, 'update'])->name('admin.updateRecipe');
    Route::delete('/recipes/{id}', [RecipeController::class, 'destroy'])->name('admin.destroyRecipe');
});
















<?php

use App\Http\Controllers\API\ManufacturerController;
use App\Http\Controllers\API\AuthController;
use App\Http\Middleware\CheckRole;
use App\Http\Controllers\ManufacturerController;



// Маршрути, які вимагають аутентифікації
Route::middleware('auth:api')->group(function () {
    // для перегляду списку всіх виробників
    Route::get('/manufacturers', [ManufacturerController::class, 'index']);
});

// Маршрути, які вимагають аутентифікації та ролі адміністратора або редактора
Route::middleware('auth:api', 'role:administrator,editor')->group(function () {
    //  для пошуку виробників за країною
    Route::get('/manufacturers/{country}', [ManufacturerController::class, 'getByCountry']);
});


// Маршрут для реєстрації нового користувача
Route::post('/register', [AuthController::class, 'register']);

// Маршрут для входу користувача
Route::post('/login', [AuthController::class, 'login']);


Route::middleware('auth:api')->group(function () {
    // Ваші захищені маршрути
});

Route::middleware(['auth:api', 'auth.role:admin,editor'])->group(function () {
    // Ваші захищені маршрути для адміністраторів та редакторів
});
Route::middleware('auth:api')->group(function () {
    Route::get('manufacturers', [ManufacturerController::class, 'index']);
    Route::get('manufacturers/by-country', [ManufacturerController::class, 'getByCountry'])
        ->middleware('auth.role:admin,editor');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/profile/{id}', [ProfileController::class, 'getProfile']);
Route::get('/profiles', [ProfileController::class, 'getAllProfiles']);
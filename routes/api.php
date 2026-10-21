<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WahanaController;

Route::get('/wahana', [WahanaController::class, 'index']);
Route::post('/wahana', [WahanaController::class, 'store']);

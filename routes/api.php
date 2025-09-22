<?php

use App\Http\Controllers\AdminConfigurationController;
use App\Http\Controllers\AdminPanel;
use App\Http\Controllers\AppointmentForm;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HealthinsurancesController;
use App\Http\Controllers\plansController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContratController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\FonctionController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\Documents_employeeController;

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
Route::apiResource('employees',EmployeeController::class);
Route::get('/employees/search/{nom}', [EmployeeController::class, 'search']);
Route::apiResource('contrats',ContratController::class);
Route::apiResource('departements',DepartementController::class);
Route::apiResource('documents_employees',Documents_employeeController::class);
Route::apiResource('fonctions',FonctionController::class);
// Route::get('/employees', [, 'index']);
// Route::post('/employees', [EmployeeController::class, 'store']);
// Route::get('/employee/{id}', [EmployeeController::class, 'show']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

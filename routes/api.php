<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\InstructorController;


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
Route::get('Training/Instructors', function () {
    return response()->json([
        'name' => 'theljani',
        'surname' => 'Alaeddine',
        'job' => 'IT instructor & Full Stack Developer',
    ]);
});

Route::apiResource('instructors', InstructorController::class);

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Program;
use App\Http\Resources\ProgramResource;
use App\Models\Category;
use App\Http\Resources\CategoryResource;
use App\Http\Controllers\ProgramController;

Route::get('/programs', fn() => ProgramResource::collection(Program::with('category')->get()));
Route::get('/categories', fn() => CategoryResource::collection(Category::all()));


Route::get('/programs', fn() => ProgramResource::collection(Program::with('category')->get()));
Route::post('/programs', [ProgramController::class, 'store']);
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

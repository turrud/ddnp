<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\TeamController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\AboutController;
use App\Http\Controllers\Api\AwardController;
use App\Http\Controllers\Api\MethodController;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\PartnerController;
use App\Http\Controllers\Api\PermissionController;
use App\Http\Controllers\Api\ProArchitecturController;
use App\Http\Controllers\Api\ProjectInteriorController;

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

Route::post('/login', [AuthController::class, 'login'])->name('api.login');

Route::middleware('auth:sanctum')
    ->get('/user', function (Request $request) {
        return $request->user();
    })
    ->name('api.user');

Route::name('api.')
    ->middleware('auth:sanctum')
    ->group(function () {
        Route::apiResource('roles', RoleController::class);
        Route::apiResource('permissions', PermissionController::class);

        Route::apiResource('homes', HomeController::class);

        Route::apiResource('contacts', ContactController::class);

        Route::apiResource(
            'project-interiors',
            ProjectInteriorController::class
        );

        Route::apiResource('pro-architecturs', ProArchitecturController::class);

        Route::apiResource('abouts', AboutController::class);

        Route::apiResource('profiles', ProfileController::class);

        Route::apiResource('teams', TeamController::class);

        Route::apiResource('methods', MethodController::class);

        Route::apiResource('partners', PartnerController::class);

        Route::apiResource('clients', ClientController::class);

        Route::apiResource('awards', AwardController::class);

        Route::apiResource('users', UserController::class);
    });

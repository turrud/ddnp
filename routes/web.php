<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\MethodController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ViewHomeController;
use App\Http\Controllers\ViewAboutController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ViewContactController;
use App\Http\Controllers\ViewProjectController;
use App\Http\Controllers\ProArchitecturController;
use App\Http\Controllers\ProjectInteriorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ViewHomeController::class ,'index'])->name('home');

// Route::get('/about', [ViewAboutController::class, 'index'])->name('about');
Route::get('/about/profile', [ViewAboutController::class, 'profile'])->name('about.profil');
Route::get('/about/team', [ViewAboutController::class, 'team'])->name('about.team');
Route::get('/about/design-method', [ViewAboutController::class, 'design_method'])->name('about.design_method');
Route::get('/about/partner', [ViewAboutController::class, 'partner'])->name('about.partner');
Route::get('/about/client', [ViewAboutController::class, 'client'])->name('about.client');
Route::get('/about/award', [ViewAboutController::class, 'award'])->name('about.award');

// Route::get('/projects', [ViewProjectController::class, 'index'])->name('projects');
Route::get('/projects/interior-design', [ViewProjectController::class, 'interiorDesign'])->name('projects.interior_design');
Route::get('/projects/architecture-design', [ViewProjectController::class, 'architectureDesign'])->name('projects.architecture_design');

Route::get('/contact', [ViewContactController::class ,'index'])->name('contacts');

Route::middleware(['auth:sanctum', 'verified'])
    ->get('/dashboard', function () {
        return view('dashboard');
    })
    ->name('dashboard');

Route::prefix('/')
    ->middleware(['auth:sanctum', 'verified'])
    ->group(function () {
        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);

        Route::resource('homes', HomeController::class);
        Route::resource('contacts', ContactController::class);
        Route::resource('project-interiors', ProjectInteriorController::class);
        Route::resource('pro-architecturs', ProArchitecturController::class);
        Route::resource('abouts', AboutController::class);
        Route::resource('profiles', ProfileController::class);
        Route::resource('teams', TeamController::class);
        Route::resource('methods', MethodController::class);
        Route::resource('partners', PartnerController::class);
        Route::resource('clients', ClientController::class);
        Route::resource('awards', AwardController::class);
    });
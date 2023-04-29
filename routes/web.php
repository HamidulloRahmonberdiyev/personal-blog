<?php

use App\Http\Controllers\AdminAppealController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminFileController;
use App\Http\Controllers\AdminFilterController;
use App\Http\Controllers\AdminPeopleController;
use App\Http\Controllers\AdminPortfolioController;
use App\Http\Controllers\AdminResumeController;
use App\Http\Controllers\AdminRoleController;
use App\Http\Controllers\AdminSkillController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AppealController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Psy\VersionUpdater\Downloader;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



#  FRONTEND ROUTES 

Route::get('/', [MainController::class, 'main'])->name('main');

Route::get('categories/{category}/category', [CategoryController::class, 'category'])->name('categories.category');

Route::post('appeal/store', [AppealController::class, 'store'])->name('appeal.store');

Route::get('files/{file}/download', [DownloadController::class, 'download'])->name('file.download');


#  BACKEND ROUTES

Auth::routes();

Route::prefix('admin')->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('appeal/filter', [AdminFilterController::class, 'filter_appeal'])->name('filter');

    Route::resource('people', AdminPeopleController::class);

    Route::resource('resumes', AdminResumeController::class);

    Route::resource('categories', AdminCategoryController::class);

    Route::resource('portfolios', AdminPortfolioController::class);

    Route::resource('skills', AdminSkillController::class);

    Route::resource('files', AdminFileController::class);

    Route::resource('users', AdminUserController::class);

    Route::resource('roles', AdminRoleController::class);

    Route::resource('appeals', AdminAppealController::class);

})->middleware('auth');

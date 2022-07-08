<?php

use App\Http\Controllers\Category\CategoryController;
use App\Http\Controllers\Category\CssController;
use App\Http\Controllers\Category\HtmlController;
use App\Http\Controllers\Category\JavascriptController;
use App\Http\Controllers\Category\PhpController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Project\AngularContrller;
use App\Http\Controllers\Project\LaravelController;
use App\Http\Controllers\dashbord\calenderController;
use App\Http\Controllers\dashbord\scheduleController;
use App\Http\Controllers\dashbord\settingController;
use App\Http\Controllers\dashbord\taskController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about');

Route::get('/contact-us',[HomeController::class, 'contact'])->name('contact');

Route::get('/dashBord',[HomeController::class, 'dashBord'])->name('dashBord');

Route::get('/project', [HomeController::class, 'project'])->name('project');

Route::get('/category', [HomeController::class, 'category'])->name('category');

Route::get('/html', [HtmlController::class, 'html'])->name('html');

Route::get('/css', [CssController::class, 'css'])->name('css');

Route::get('php', [PhpController::class, 'php'])->name('php');

Route::get('/javaScript', [JavascriptController::class, 'javaScript'])->name('javaScript');

Route::get('/angular', [AngularContrller::class, 'angular'])->name('angular');

Route::get('/laravel', [LaravelController::class, 'lara'])->name('laravel');

Route::get('/calender', [calenderController::class, 'calender'])->name('calender');

Route::get('/schedule', [scheduleController::class, 'schedule'])->name('schedule');

Route::get('/setting', [settingController::class, 'setting'])->name ('setting');

Route::get('/Ourtask', [taskController::class, 'task'])->name('task');

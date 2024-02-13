<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdddataController;

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
Route::get('/', function () {return view('welcome');});
Route::get('/home', function () {return view('home');})->name('login');
Route::get('/login', function () { return view('login');});
Route::get('/show', function () { return view('show');});
//เงินสดย่อย
Route::get('/cash', function () {return view('cash');})->name('adddata');
Route::get('/cash1', function () { return view('cash1');})->name('adddata');
Route::get('/cash2', function () {return view('cash2');})->name('adddata');
Route::get('/cash3', function () {return view('cash3');})->name('adddata');
//เพิ่มข้อมูล
Route::get('/adddata', [AdddataController::class, 'index']);
Route::post('/adddata', [AdddataController::class, 'index']);



Auth::routes();

Route::middleware(['auth','user-role:views'])->group(function(){
    Route::get('/views/home',[HomeController::class,'viewsHome'])->name('home.views');
});
//user route
Route::middleware(['auth','user-role:user'])->group(function(){
    Route::get('/home',[HomeController::class,'userHome'])->name('home');
});
//Editor route
Route::middleware(['auth','user-role:adminle1'])->group(function(){
    Route::get('/adminle1/home',[HomeController::class,'adminle1Home'])->name('home.adminle1');
});
//Admin route
Route::middleware(['auth','user-role:adminle2'])->group(function(){
    Route::get('/adminle2/home',[HomeController::class,'adminle2Home'])->name('home.adminle2');
});
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

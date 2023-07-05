<?php

use App\Models\Employee;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PostController;

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

Route::get('/', [pagesController::class,'index']);

Route::get('/about', [pagesController::class,'about']);

Route::get('/users/{id}/{cop}', [pagesController::class,'users']);

Route::get('/employee', [EmployeeController::class,'index']);

Route::get('/add-employee', [EmployeeController::class, 'create']);

Route::post('/store-employee', [EmployeeController::class, 'store']);

Route::get('/edit-employee/{id}', [EmployeeController::class, 'edit']);

Route::put('/update-employee/{id}', [EmployeeController::class, 'update']);

Route::get('delete-employee/{id}', [EmployeeController::class, 'delete']);
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//Route::get('/posts',[PostController::class, 'index']);

Route::middleware(['auth', 'isAdmin'])->group(function(){
    Route::resource('/posts','App\Http\Controllers\PostController');
});



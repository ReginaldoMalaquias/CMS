<?php

<<<<<<< HEAD


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ConfigController;
Use App\Http\Controllers\HomeController;
=======
use Illuminate\Support\Facades\Route;

>>>>>>> 024a9256b0abb869bc79ac7d70dfb2a511d517f3
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

<<<<<<< HEAD
Route::get('/', [HomeController::class,'index']);

Route::get('/home', [HomeController::class,'index']);
Route::get('/config/user', [HomeController::class,'user']);
=======
Route::get('/', function () {
    return view('welcome');
});
>>>>>>> 024a9256b0abb869bc79ac7d70dfb2a511d517f3

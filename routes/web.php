<?php

use App\Http\Controllers\Frontend\AuthController;
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

Route::get('/', function () {
    return view('pages.backend.dashboard.index');
});

// route login and register
Route::prefix("auth")->group(function () {
    Route::get("/", [AuthController::class, "login"])->name("auth.login");
    Route::post("/", [AuthController::class, "loginPost"])->name("auth.login.post");
    Route::get("/register", [AuthController::class, "register"])->name("auth.register");
    Route::post("/register", [AuthController::class, "registerPost"])->name("auth.register.post");
});

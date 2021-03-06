<?php

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
use App\Http\Controllers\CompanyController;

use App\Http\Controllers\BlogController;


Route::get('/', function () {
    return "Am working so hard..";
});

Route::resource('companies', CompanyController::class);
Route::resource('blog', BlogController::class);

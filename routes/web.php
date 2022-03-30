<?php

use App\Http\Controllers\ProductController;
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
    return view('app');
});

// //__Create Migration__//
// php artisan make:migration create_projects_table --create=projects
// //__Create Controller & Model//
// Php artisan make:controller ProjectController --resource --model=Project


Route::resource('products', ProductController::class);

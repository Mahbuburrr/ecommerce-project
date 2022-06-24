<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::controller(HomeController::class)->group(

    function()
    {

        route::get('/redirect','redirect');
        route::get('/','index');
          route::get('/','index');
          route::post('/search','search');
    }
);

Route::controller(AdminController::class)->group(

    function()
    {

        route::get('/product','product');
        
        route::post('/uploadproduct','uploadproduct');
        route::get('/showproduct','showproduct');
        route::get('/deleteproduct/{id}','deleteproduct');
        route::get('/updateview/{id}','updateview'); 

        route::post('/updateproduct/{id}','updateproduct'); 


       
    }
);


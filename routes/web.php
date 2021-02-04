<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\categroiesController;
use App\Http\Controllers\admin\articlesController;



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
    return view('Admin.Header');
});


Route::group(['prefix'=>'Admin'],function(){
    Route::get('/Dashboard',[categroiesController::class,'index']);
    Route::resource('categroies',CategroiesController::class);

    Route::get('/Articles',[articlesController::class,'index']);
    Route::resource('Articles',articlesController::class);
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminLoginController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\HomeController;
// use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;


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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function(){

    Route::group(['middleware' => 'admin.guest'],function(){
        Route::get('/login',[AdminLoginController::class, 'index'])->name('admin.login');
        Route::post('/authenticate',[AdminLoginController::class, 'authenticate'])->name('admin.authenticate');
    });

    Route::group(['middleware' => 'admin.auth'],function(){
        Route::get('/dashboard',[HomeController::class, 'index'])->name('admin.dashboard');
        Route::get('/logout',[HomeController::class, 'logout'])->name('admin.logout');

        //Category Routes
        Route::get('/categories',[CategoryController::class,'index'])->name('categories.index');


        Route::get('/categories/create',[CategoryController::class,'create'])->name('categories.create');
        Route::post('/categories',[CategoryController::class,'store'])->name('categories.store');

        Route::get('/getSlug', function(Request $request){

            // echo $request->nameval; exit;

            // print_r($request->all());
            $slug = '';

            if(!empty($request->nameval)){
                $slug = Str::slug($request->nameval);
            }

            return response()->json([
                'status' => true,
                'slug' => $slug
            ]);
        })->name('getSlug');
    });

});
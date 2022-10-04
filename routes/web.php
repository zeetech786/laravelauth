<?php

use App\Http\Controllers\ArrayController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\UserProfileController;
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


Route::post('/arrays', [ArrayController::class, 'store']);
Route::get('test',function(){

    $cars = ['2'=>'Toyota','162'=>'Ferrari','17'=>'Audi Q7'];
    return view('array',['cars'=>$cars]);

});
Route::get('/', function () {
    return view('welcome');
});

    //Crud Project Route with extra function
    Route::post('/profile/search', [UserProfileController::class, 'search'])->name('profile.search');
//Crud project
    Route::resource('profile',UserProfileController::class)
        ->parameters(['profile' => 'userProfile']);
//Route::post('profile/search','UserProfileController@search');
    Route::resource('/posts', PostsController::class);
//Laravel Breeze
    Route::get('show', [ShowController::class,'index']);
    Route::view('/home','home');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');






require __DIR__.'/auth.php';

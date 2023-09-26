<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Http\Request;
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
    return view('welcome');
});


Route::post('users', function (Request $request) {
return $request ;
    return view ('users');
});

//
//Route::get('users/{id}', function ($id) {
//    if ($id == 'yousf') {
//
//        return 'admin';
//
//    } else {
//
//        return 'mamdouh';
//
//    }
//
//    return $id;
//});
//
//Route::get('/users', function () {
//
//    return view('users');
//});


Route::controller(PostController::class)->group(function () {

    Route::get('posts', 'showUsers');
    Route::get('posts/create', 'createPosts');
    Route::get('posts/edit/{id}', 'editPosts');
    Route::get('posts/update/{id}', 'updatePosts');
    Route::get('posts/delete/{id}', 'deletePosts');
});


//Route::get('/posts', [PostController::class, 'showUsers']);
//Route::get('/posts/create', [PostController::class, 'createPosts']);
//Route::get('/posts/edit/{id}', [PostController::class, 'editPosts']);
//Route::get('/posts/update/{id}', [PostController::class, 'updatePosts']);
//Route::get('/posts/delete/{id}', [PostController::class, 'deletePosts']);


Route::resource('users', \App\Http\Controllers\UserController::class);

//Route::get('user_profile',UserProfileController::class);
Route::get('user_profile',[UserProfileController::class ,'userProfile']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

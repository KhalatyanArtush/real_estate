<?php

use App\Http\Controllers\DownloadFileController;
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


Route::group(['namespace' => 'Post'], function () {

    Route::get('/post', 'IndexController')->name('post.index');
    Route::get('/post/{post}', 'ShowController')->name('post.show');


});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::group(['namespace' => 'Post'], function () {
        Route::get('/post', 'IndexController')->name('admin.post.index');
        Route::get('/post/creat', 'CreatController')->name('admin.post.creat');
        Route::post('/post', 'StoreController')->name('admin.post.store');
        Route::get('/post/{post}', 'ShowController')->name('admin.post.show');
        Route::get('/post/{post}/edit', 'EditController')->name('admin.post.edit');
        Route::patch('/post/{post}', 'UpdateController')->name('admin.post.update');
        Route::delete('/post/{post}', 'DestroyController')->name('admin.post.delete');

    });
    Route::group(['namespace' => 'Home'], function () {
        Route::get('/home', 'IndexController')->name('admin.home.index');
        Route::get('/home/creat', 'CreatController')->name('admin.home.creat');
        Route::post('/home', 'StoreController')->name('admin.home.store');
        Route::get('/home/{home}', 'ShowController')->name('admin.home.show');
        Route::get('/home/{home}/edit', 'EditController')->name('admin.home.edit');
        Route::patch('/home/{home}', 'UpdateController')->name('admin.home.update');
        Route::delete('/home/{home}', 'DestroyController')->name('admin.home.delete');

    });

    Route::group(['namespace' => 'Agent'], function () {
        Route::get('/agent', 'IndexController')->name('admin.agent.index');
        Route::get('/agent/creat', 'CreatController')->name('admin.agent.creat');
        Route::post('/agent', 'StoreController')->name('admin.agent.store');
        Route::get('/agent/{agent}', 'ShowController')->name('admin.agent.show');
        Route::get('/agent/{agent}/edit', 'EditController')->name('admin.agent.edit');
        Route::patch('/agent/{agent}', 'UpdateController')->name('admin.agent.update');
        Route::delete('/agent/{agent}', 'DestroyController')->name('admin.agent.delete');

    });

    Route::group(['namespace' => 'User'], function () {
        Route::get('/user', 'IndexController')->name('admin.user.index');
        Route::get('/user/creat', 'CreatController')->name('admin.user.creat');
        Route::post('/user', 'StoreController')->name('admin.user.store');
        Route::get('/user/{user}', 'ShowController')->name('admin.user.show');
        Route::get('/user/{user}/edit', 'EditController')->name('admin.user.edit');
        Route::patch('/user/{user}', 'UpdateController')->name('admin.user.update');
//        Route::delete('/agent/{agent}', 'DestroyController')->name('admin.agent.delete');

    });
});


Route::group(['namespace' => 'Home'], function () {
    Route::get('/', 'IndexController')->name('home.index');

});


//
//Route::get('/', function () {
//    return view('index');
//})->name('index');

Route::get('/agents', 'AgentController')->name('agents');

Route::get('/about', 'AboutController')->name('about');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

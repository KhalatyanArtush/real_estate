<?php

use App\Http\Controllers\DownloadFileController;
use Illuminate\Support\Facades\Auth;
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
    Route::get('/posts', 'IndexController')->name('post.index');
    Route::get('/post/{post}', 'ShowController')->name('post.show');

});


Route::group(['namespace' => 'Administrator', 'prefix' => 'administrator', 'middleware' => 'administrator'], function () {
    Route::group(['namespace' => 'User'], function () {
        Route::get('/user', 'IndexController')->name('administrator.user.index');
        Route::get('/user/creat', 'CreatController')->name('administrator.user.creat');
        Route::post('/user', 'StoreController')->name('administrator.user.store');
//        Route::get('/user/{user}', 'ShowController')->name('administrator.user.show');
        Route::get('/user/{user}/edit', 'EditController')->name('administrator.user.edit');
        Route::patch('/user/{user}', 'UpdateController')->name('administrator.user.update');
        Route::delete('/user/{user}', 'DestroyController')->name('administrator.user.delete');

    });
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

    Route::group(['namespace' => 'homeSlider'], function () {
        Route::get('/homeSlider', 'IndexController')->name('admin.homeSlider.index');
        Route::get('/homeSlider/creat', 'CreatController')->name('admin.homeSlider.creat');
        Route::post('/homeSlider', 'StoreController')->name('admin.homeSlider.store');
        Route::get('/homeSlider/{homeSlider}', 'ShowController')->name('admin.homeSlider.show');
        Route::get('/homeSlider/{homeSlider}/edit', 'EditController')->name('admin.homeSlider.edit');
        Route::patch('/homeSlider/{homeSlider}', 'UpdateController')->name('admin.homeSlider.update');
        Route::delete('/homeSlider/{homeSlider}', 'DestroyController')->name('admin.homeSlider.delete');
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

    Route::group(['namespace' => 'BuildingType'], function () {
        Route::get('/buildingType', 'IndexController')->name('admin.buildingType.index');
        Route::get('/buildingType/creat', 'CreatController')->name('admin.buildingType.creat');
        Route::post('/buildingType', 'StoreController')->name('admin.buildingType.store');
        Route::get('/buildingType/{buildingType}', 'ShowController')->name('admin.buildingType.show');
        Route::get('/buildingType/{buildingType}/edit', 'EditController')->name('admin.buildingType.edit');
        Route::patch('/buildingType/{buildingType}', 'UpdateController')->name('admin.buildingType.update');
        Route::delete('/buildingType/{buildingType}', 'DestroyController')->name('admin.buildingType.delete');

    });

    Route::group(['namespace' => 'BuyRent'], function () {
        Route::get('/buyRent', 'IndexController')->name('admin.buyRent.index');
        Route::get('/buyRent/creat', 'CreatController')->name('admin.buyRent.creat');
        Route::post('/buyRent', 'StoreController')->name('admin.buyRent.store');
        Route::get('/buyRent/{buyRent}', 'ShowController')->name('admin.buyRent.show');
        Route::get('/buyRent/{buyRent}/edit', 'EditController')->name('admin.buyRent.edit');
        Route::patch('/buyRent/{buyRent}', 'UpdateController')->name('admin.buyRent.update');
        Route::delete('/buyRent/{buyRent}', 'DestroyController')->name('admin.buyRent.delete');

    });

    Route::group(['namespace' => 'city'], function () {
        Route::get('/city', 'IndexController')->name('admin.city.index');
        Route::get('/city/creat', 'CreatController')->name('admin.city.creat');
        Route::post('/city', 'StoreController')->name('admin.city.store');
        Route::get('/city/{city}', 'ShowController')->name('admin.city.show');
        Route::get('/city/{city}/edit', 'EditController')->name('admin.city.edit');
        Route::patch('/city/{city}', 'UpdateController')->name('admin.city.update');
        Route::delete('/city/{city}', 'DestroyController')->name('admin.city.delete');

    });

    Route::group(['namespace' => 'district'], function () {
        Route::get('/district', 'IndexController')->name('admin.district.index');
        Route::get('/district/creat', 'CreatController')->name('admin.district.creat');
        Route::post('/district', 'StoreController')->name('admin.district.store');
        Route::get('/district/{district}', 'ShowController')->name('admin.district.show');
        Route::get('/district/{district}/edit', 'EditController')->name('admin.district.edit');
        Route::patch('/district/{district}', 'UpdateController')->name('admin.district.update');
        Route::delete('/district/{district}', 'DestroyController')->name('admin.district.delete');

    });

    Route::group(['namespace' => 'Region'], function () {
        Route::get('/region', 'IndexController')->name('admin.region.index');
        Route::get('/region/creat', 'CreatController')->name('admin.region.creat');
        Route::post('/region', 'StoreController')->name('admin.region.store');
        Route::get('/region/{region}', 'ShowController')->name('admin.region.show');
        Route::get('/region/{region}/edit', 'EditController')->name('admin.region.edit');
        Route::patch('/region/{region}', 'UpdateController')->name('admin.region.update');
        Route::delete('/region/{region}', 'DestroyController')->name('admin.region.delete');

    });

    Route::group(['namespace' => 'Repair'], function () {
        Route::get('/repair', 'IndexController')->name('admin.repair.index');
        Route::get('/repair/creat', 'CreatController')->name('admin.repair.creat');
        Route::post('/repair', 'StoreController')->name('admin.repair.store');
        Route::get('/repair/{repair}', 'ShowController')->name('admin.repair.show');
        Route::get('/repair/{repair}/edit', 'EditController')->name('admin.repair.edit');
        Route::patch('/repair/{repair}', 'UpdateController')->name('admin.repair.update');
        Route::delete('/repair/{repair}', 'DestroyController')->name('admin.repair.delete');

    });

    Route::group(['namespace' => 'Street'], function () {
        Route::get('/street', 'IndexController')->name('admin.street.index');
        Route::get('/street/creat', 'CreatController')->name('admin.street.creat');
        Route::post('/street', 'StoreController')->name('admin.street.store');
        Route::get('/street/{street}', 'ShowController')->name('admin.street.show');
        Route::get('/street/{street}/edit', 'EditController')->name('admin.street.edit');
        Route::patch('/street/{street}', 'UpdateController')->name('admin.street.update');
        Route::delete('/street/{street}', 'DestroyController')->name('admin.street.delete');

    });

    Route::group(['namespace' => 'Village'], function () {
        Route::get('/village', 'IndexController')->name('admin.village.index');
        Route::get('/village/creat', 'CreatController')->name('admin.village.creat');
        Route::post('/village', 'StoreController')->name('admin.village.store');
        Route::get('/village/{village}', 'ShowController')->name('admin.village.show');
        Route::get('/village/{village}/edit', 'EditController')->name('admin.village.edit');
        Route::patch('/village/{village}', 'UpdateController')->name('admin.village.update');
        Route::delete('/village/{village}', 'DestroyController')->name('admin.village.delete');

    });

    Route::group(['namespace' => 'Type'], function () {
        Route::get('/type', 'IndexController')->name('admin.type.index');
        Route::get('/type/creat', 'CreatController')->name('admin.type.creat');
        Route::post('/type', 'StoreController')->name('admin.type.store');
        Route::get('/type/{type}', 'ShowController')->name('admin.type.show');
        Route::get('/type/{type}/edit', 'EditController')->name('admin.type.edit');
        Route::patch('/type/{type}', 'UpdateController')->name('admin.type.update');
        Route::delete('/type/{type}', 'DestroyController')->name('admin.type.delete');

    });

    Route::group(['namespace' => 'About'], function () {
        Route::get('/about', 'IndexController')->name('admin.about.index');
//        Route::get('/about/creat', 'CreatController')->name('admin.about.creat');
//        Route::post('/about', 'StoreController')->name('admin.about.store');
        Route::get('/about/{about}/edit', 'EditController')->name('admin.about.edit');
        Route::patch('/about/{about}', 'UpdateController')->name('admin.about.update');
        Route::delete('/about/{about}', 'DestroyController')->name('admin.about.delete');

    });
    Route::group(['namespace' => 'OurServise'], function () {
        Route::get('/ourServise', 'IndexController')->name('admin.ourServise.index');
        Route::get('/ourServise/creat', 'CreatController')->name('admin.ourServise.creat');
        Route::post('/ourServise', 'StoreController')->name('admin.ourServise.store');
        Route::get('/ourServise/{ourServise}', 'ShowController')->name('admin.ourServise.show');
        Route::get('/ourServise/{ourServise}/edit', 'EditController')->name('admin.ourServise.edit');
        Route::patch('/ourServise/{ourServise}', 'UpdateController')->name('admin.ourServise.update');
        Route::delete('/ourServise/{ourServise}', 'DestroyController')->name('admin.ourServise.delete');

    });

    Route::group(['namespace' => 'Contacts'], function () {
        Route::get('/contacts', 'IndexController')->name('admin.contacts.index');
        Route::get('/contacts/creat', 'CreatController')->name('admin.contact.creat');
        Route::post('/contacts', 'StoreController')->name('admin.contact.store');
        Route::get('/contacts/{contact}', 'ShowController')->name('admin.contact.show');
        Route::get('/contacts/{contact}/edit', 'EditController')->name('admin.contact.edit');
        Route::patch('/contacts/{contact}', 'UpdateController')->name('admin.contact.update');
        Route::delete('/contacts/{contact}', 'DestroyController')->name('admin.contact.delete');

    });
    Route::group(['namespace' => 'File'], function () {
        Route::delete('/file', 'DestroyController')->name('admin.file.delete');
//        Route::get('/file/creat', 'CreatController')->name('admin.file.creat');
//        Route::post('/file', 'StoreController')->name('admin.file.store');
//        Route::get('/file/{file}', 'ShowController')->name('admin.file.show');
//        Route::get('/file/{file}/edit', 'EditController')->name('admin.file.edit');
//        Route::patch('/file/{file}', 'UpdateController')->name('admin.file.update');
//        Route::delete('/file/{file}', 'DestroyController')->name('admin.file.delete');

    });

    Route::group(['namespace' => 'Video'], function () {
        Route::delete('/video', 'DestroyController')->name('admin.video.delete');
//        Route::get('/video/creat', 'CreatController')->name('admin.video.creat');
//        Route::post('/video', 'StoreController')->name('admin.video.store');
//        Route::get('/video/{video}', 'ShowController')->name('admin.video.show');
//        Route::get('/video/{video}/edit', 'EditController')->name('video.video.edit');
//        Route::patch('/video/{video}', 'UpdateController')->name('admin.video.update');
//        Route::delete('/video/{video}', 'DestroyController')->name('admin.video.delete');

    });

});


Route::group(['namespace' => 'Home'], function () {
    Route::get('/', 'IndexController')->name('home.index');

});
Route::group(['namespace' => 'MyPage'], function () {
    Route::get('/myPage/{myPage}', 'UserPostController')->name('myPage');
    Route::post('/myPage', 'UserPostStoreController')->name('myPage.store');
    Route::delete('/myPage/{myPage}', 'UserPostDeleteController')->name('myPage.delete');

});

Route::get('/agents', 'AgentController')->name('agents');
Route::get('/abouts', 'AboutController')->name('about');
Route::get('/contacts', 'ContactController')->name('contacts');


Route::get('/files', 'FileController')->name('file');
Route::get('/videos', 'VideoController')->name('video');

Route::get('/send', 'mailController')->name('sendMail');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



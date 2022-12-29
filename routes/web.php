<?php

use App\Http\Controllers\web\CommentController;
use App\Http\Controllers\web\ProfileUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\AuthController;
use App\Http\Controllers\web\PostController;


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

Route::get('/',function (){
    return \Illuminate\Support\Facades\Redirect::route('login');
});
Route::get('/storage', function () {
    \Illuminate\Support\Facades\Artisan::call('storage:link');
});
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('request-register',[AuthController::class,'RequestRegister'])->name('request-register');
Route::get('logout', [AuthController::class, 'getLogout'])->name('logout');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('postlogin');
Route::group(['middleware' => 'check_user'], function () {
    Route::get('friend', [App\Http\Controllers\web\FriendController::class, 'viewFriend'])->name('friend');
    Route::get('home', [App\Http\Controllers\web\HomeController::class, 'viewHome'])->name('home');

    Route::group(['prefix' => 'profile'], function () {
//        Route::get('{idUser}/post', [PostController::class, 'list'])->name('post.list');
        Route::get('{idUser}/about', [ProfileUserController::class, 'viewAbout'])->name('about.list');
        Route::get('{idUser}/friend', [ProfileUserController::class, 'viewFriend'])->name('friend.list');
        Route::get('{idUser}/image', [ProfileUserController::class, 'viewImage'])->name('image.list');

        Route::group([
            'prefix' => '{idUser}/post',
            'as' => 'post.',
        ], function () {
            Route::get('/list', [PostController::class, 'list'])->name('list');
            Route::post('/', [PostController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [PostController::class, 'edit'])->name('edit');
            Route::put('/update/{id}', [PostController::class, 'update'])->name('update');
            Route::delete('/delete/{id}', [PostController::class, 'destroy'])->name('destroy');
            Route::get('/{id}', [PostController::class, 'detail'])->name('detail');
            Route::post('/like/{id}', [PostController::class, 'like'])->name('like');
            Route::delete('/unlike/{id}', [PostController::class, 'unlike'])->name('unlike');
        });

        Route::group([
            'prefix' => 'comment',
            'as' => 'comment.',
        ], function () {
            Route::post('/', [CommentController::class, 'store'])->name('store');
            Route::put('update/{id}', [CommentController::class, 'update'])->name('update');
            Route::delete('delete/{id}', [CommentController::class, 'destroy'])->name('destroy');
        });
    });

    Route::group(['prefix' => 'update'], function () {
        Route::put('avatar/{idUser}', [ProfileUserController::class, 'updateAvatar'])->name('update.avatar');
        Route::put('banner/{idUser}', [ProfileUserController::class, 'updateBanner'])->name('update.banner');
    });

        //friend
    Route::prefix('friend')->group(function (){
        Route::name('friend-')->group(function(){
            Route::get('/index',[\App\Http\Controllers\web\FriendController::class,'index'])->name('index');
            Route::get('/view' ,[\App\Http\Controllers\web\FriendController::class,'viewFriend'])->name('view');
            Route::post('/add',[\App\Http\Controllers\web\FriendController::class,'addfriend'])->name('add') ;
            Route::get('/acept/{group_id}',[\App\Http\Controllers\web\FriendController::class,'acept'])->name('acept');
            Route::get('/acept-friend',[\App\Http\Controllers\web\FriendController::class,'aceptFriend'])->name('acept_2');
        });
    });


    //message
    Route::prefix('message')->group(function () {
        Route::name('message-')->group(function () {
            Route::get('/index', [\App\Http\Controllers\web\MessageController::class, 'index'])->name('index');
            Route::get('/add-message/{id}', [\App\Http\Controllers\web\MessageController::class, 'addMessage'])->name('add');
            Route::get('/send-message', [\App\Http\Controllers\web\MessageController::class, 'sendMessage'])->name('send');
            Route::get('/render-message', [\App\Http\Controllers\web\MessageController::class, 'renderMess'])->name('render');
            Route::get('/delete/{id}',[\App\Http\Controllers\web\MessageController::class,'delete'])->name('delete');

        });
    });

});


Route::prefix('admin')->group(function () {
    Route::get('/', [\App\Http\Controllers\admin\AuthController::class, 'viewLoginAdmin'])->name('admin');
    Route::get('/login', [\App\Http\Controllers\admin\AuthController::class, 'viewLoginAdmin'])->name('login-admin');
    Route::post('/login-in', [\App\Http\Controllers\admin\AuthController::class, 'LoginAdmin'])->name('login-request-admin');
    Route::get('/logout', [\App\Http\Controllers\admin\AuthController::class, 'logoutAdmin'])->name('logout-admin');
    Route::post('/login-in', [\App\Http\Controllers\admin\AuthController::class, 'LoginAdmin'])->name('login-request-admin');

    Route::group(['middleware' => 'check_admin'], function () {
        Route::get('/dashboard', [\App\Http\Controllers\admin\DashboardController::class, 'index'])->name('dashboard');
        // user-admin
        Route::prefix('user-admin')->group(function () {
            Route::name('useradmin-')->group(function () {
                Route::get('/index', [\App\Http\Controllers\admin\UserAdminController::class, 'index'])->name('index');
                Route::get('/add', [\App\Http\Controllers\admin\UserAdminController::class, 'add'])->name('add');
                Route::post('/add', [\App\Http\Controllers\admin\UserAdminController::class, 'create'])->name('create');
                Route::get('/edit/{id}', [\App\Http\Controllers\admin\UserAdminController::class, 'edit'])->name('edit');
                Route::post('/update/{id}', [\App\Http\Controllers\admin\UserAdminController::class, 'update'])->name('update');
                Route::get('/delete/{id}', [\App\Http\Controllers\admin\UserAdminController::class, 'delete'])->name('delete');
                Route::get('/reset-password/{id}', [\App\Http\Controllers\admin\UserAdminController::class, 'resetPassword'])->name('reset-password');
                Route::get('/load-api',[\App\Http\Controllers\admin\UserAdminController::class,'Load_API'])->name('load-api');
            });
        });

        // site-info
        Route::prefix('site-info')->group(function () {
            Route::name('site-info-')->group(function () {
                Route::get('/index', [\App\Http\Controllers\admin\site_info\InfoController::class, 'index'])->name('index');
                Route::post('/update', [\App\Http\Controllers\admin\site_info\InfoController::class, 'update'])->name('update');
            });
        });

        //user
        Route::prefix('user')->group(function (){
            Route::name('user-')->group(function (){
                Route::get('/index',[\App\Http\Controllers\admin\user\UserController::class,'index'])->name('index');
                Route::get('/add',[\App\Http\Controllers\admin\user\UserController::class,'add'])->name('add');
                Route::post('/create',[\App\Http\Controllers\admin\user\UserController::class,'create'])->name('create');
                Route::get('/reset-password/{id}',[\App\Http\Controllers\admin\user\UserController::class,'resetPassword'])->name('reset-password');
                Route::get('/edit/{id}',[\App\Http\Controllers\admin\user\UserController::class,'edit'])->name('edit');
                Route::post('/update/{id}',[\App\Http\Controllers\admin\user\UserController::class,'update'])->name('update');
                Route::get('/view/{id}',[\App\Http\Controllers\admin\user\UserController::class,'view'])->name('view');
                Route::get('/delete/{id}',[\App\Http\Controllers\admin\user\UserController::class,'delete'])->name('delete');
            });
        });

        Route::prefix('group_banner')->group(function () {
            Route::name('group_banner-')->group(function () {
                Route::get('/index', [\App\Http\Controllers\admin\groupbanner\GroupBannerController::class, 'index'])->name('index');
                Route::get('/add', [\App\Http\Controllers\admin\groupbanner\GroupBannerController::class, 'add'])->name('add');
                Route::post('/create', [\App\Http\Controllers\admin\groupbanner\GroupBannerController::class, 'create'])->name('create');
//                Route::post('/create',[\App\Http\Controllers\admin\user\UserController::class,'create'])->name('create');
//                Route::get('/reset-password/{id}',[\App\Http\Controllers\admin\user\UserController::class,'resetPassword'])->name('reset-password');
                Route::get('/edit/{id}', [\App\Http\Controllers\admin\groupbanner\GroupBannerController::class, 'edit'])->name('edit');
                Route::post('/update/{id}', [\App\Http\Controllers\admin\groupbanner\GroupBannerController::class, 'update'])->name('update');
//                Route::get('/view/{id}',[\App\Http\Controllers\admin\user\UserController::class,'view'])->name('view');
                Route::get('/delete/{id}',[\App\Http\Controllers\admin\groupbanner\GroupBannerController::class,'delete'])->name('delete');
            });
        });
        //banner
        Route::prefix('banner')->group(function () {
            Route::name('banner-')->group(function () {
                Route::get('/index', [\App\Http\Controllers\admin\banner\BannerController::class, 'index'])->name('index');
                Route::get('/add', [\App\Http\Controllers\admin\banner\BannerController::class, 'add'])->name('add');
                Route::post('/create', [\App\Http\Controllers\admin\banner\BannerController::class, 'create'])->name('create');
//                Route::post('/create',[\App\Http\Controllers\admin\user\UserController::class,'create'])->name('create');
//                Route::get('/reset-password/{id}',[\App\Http\Controllers\admin\user\UserController::class,'resetPassword'])->name('reset-password');
                Route::get('/edit/{id}', [\App\Http\Controllers\admin\banner\BannerController::class, 'edit'])->name('edit');
                Route::post('/update/{id}', [\App\Http\Controllers\admin\banner\BannerController::class, 'update'])->name('update');
//                Route::get('/view/{id}',[\App\Http\Controllers\admin\user\UserController::class,'view'])->name('view');
//                Route::get('/delete/{id}',[\App\Http\Controllers\admin\user\UserController::class,'delete'])->name('delete');
            });
        });
        //post
        Route::prefix('post')->group(function (){
            Route::name('post-')->group(function (){
                Route::get('/index',[\App\Http\Controllers\admin\post\PostController::class,'index'])->name('index');
                Route::get('/delete/{id}',[\App\Http\Controllers\admin\post\PostController::class,'delete'])->name('delete');
            });
        });
        //post
        Route::prefix('comment')->group(function (){
            Route::name('comment-')->group(function (){
                Route::get('/index',[\App\Http\Controllers\admin\comment\CommentController::class,'index'])->name('index');
                Route::get('/delete/{id}',[\App\Http\Controllers\admin\comment\CommentController::class,'delete'])->name('delete');
            });
        });
    });

});


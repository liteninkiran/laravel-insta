<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\FollowsController;
use App\Mail\NewUserWelcomeMail;

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

Auth::routes();

Route::get('/email', function()
{
    return new NewUserWelcomeMail();
});

Route::post('/follow/{user}', [FollowsController::class, 'store'])->name('follow.store');

Route::get ('/'                , [PostsController::class, 'index' ])->name('post.index' );
Route::get ('/post/create'     , [PostsController::class, 'create'])->name('post.create');
Route::post('/post'            , [PostsController::class, 'store' ])->name('post.store' );
Route::get ('/post/{post}'     , [PostsController::class, 'show'  ])->name('post.show'  );
Route::get ('/post/{post}/edit', [PostsController::class, 'edit'  ])->name('post.edit'  );

Route::get('/profile/{user}'     , [ProfilesController::class, 'index' ])->name('profile.show'  );
Route::put('/profile/{user}'     , [ProfilesController::class, 'update'])->name('profile.update');
Route::get('/profile/{user}/edit', [ProfilesController::class, 'edit'  ])->name('profile.edit'  );


/*

    Verb        Path                    Action      Route Name
    ----------------------------------------------------------------
    GET         /photo                  index       photo.index
    GET         /photo/create           create      photo.create
    POST        /photo                  store       photo.store
    GET         /photo/{photo}          show        photo.show
    GET         /photo/{photo}/edit     edit        photo.edit
    PUT/PATCH   /photo/{photo}          update      photo.update
    DELETE      /photo/{photo}          destroy     photo.destroy

*/


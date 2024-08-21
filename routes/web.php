<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CommentController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Frontend\PostController as FrontendPostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [UserController::class, 'Index'])->name('index');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Route
Route::middleware(['auth', 'roles:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');
    Route::post('/admin/change/password', [AdminController::class, 'AdminPasswordUpdate'])->name('admin.password.update');

    // Category All Routes
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/admin/all/category', 'AllCategory')->name('all.category');
        Route::get('/admin/add/category', 'AddCategory')->name('add.category');
        Route::post('/admin/store/category', 'StoreCategory')->name('store.category');
        Route::get('/admin/edit/category/{id}', 'EditCategory')->name('edit.category');
        Route::post('/admin/update/category', 'UpdateCategory')->name('update.category');
        Route::get('/admin/delete/category/{id}', 'DeleteCategory')->name('delete.category');
    });
    // Post All Routes
    Route::controller(PostController::class)->group(function () {
        Route::get('/admin/all/post', 'AllPost')->name('all.post');
        Route::get('/admin/add/post', 'AddPost')->name('add.post');
        Route::post('/admin/store/post', 'StorePost')->name('store.post');
        Route::get('/admin/edit/post/{id}', 'EditPost')->name('edit.post');
        Route::post('/admin/update/post', 'UpdatePost')->name('update.post');
        Route::get('/admin/delete/post/{id}', 'DeletePost')->name('delete.post');
        //video
        Route::get('/admin/all/video', 'AllVideo')->name('all.video');
        Route::get('/admin/add/video', 'AddVideo')->name('add.video');
        Route::post('/admin/store/video', 'StoreVideo')->name('store.video');
        Route::get('/admin/edit/video/{id}', 'EditVideo')->name('edit.video');
        Route::post('/admin/update/video', 'UpdateVideo')->name('update.video');
        Route::get('/admin/delete/video/{id}', 'DeleteVideo')->name('delete.video');
        // comments
        Route::get('/admin/blog/comment','AdminBlogComment')->name('admin.blog.comment');
        Route::get('/admin/comment/reply/{id}', 'AdminCommentReply')->name('admin.comment.reply');
        Route::post('/reply/message', 'ReplyMessage')->name('reply.message');
        Route::get('/change/status/{id}', 'ChangeStatus')->name('change.status');
    });
});

    // Post Details Route
    Route::get('/post/details/{slug}', [FrontendPostController::class, 'PostDetails']);

    // Post Category List Route
    Route::get('/post/cat/list/{id}', [FrontendPostController::class, 'PostCatList']);

    // Post Route
    Route::get('/post', [FrontendPostController::class, 'PostList'])->name('blog.list');

    // Post Comment Route
    Route::post('/store/comment', [CommentController::class, 'StoreComment'])->name('store.comment');




require __DIR__ . '/auth.php';

<?php

use App\Http\Controllers\DashboardpostController;
use App\Http\Controllers\LaporController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Models\post;
use App\Models\category;
use App\Models\User;

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
    return view('Home',[
        "title" => "Home",
    ]);
});



Route::get('/posts',[PostController::class, 'index']);


// halaman single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
        return view('categories', [
          'title' => 'Post Kategori',
          'categories' => category::all()
        ]);
});

// kategori mengarah ke view posts (dimatikan karena route sudah ada dimodel)
// Route::get('/categories/{category:slug}', function(category $category) {
//         return view('posts', [
//           'title' => "Artikel Berdasarkan Kategori : $category->name",
//           'posts' => $category->posts->load('category', 'user'),
//         ]);
// });

// route untuk tampilan post dari user ngambil dari view post
    // Route::get('/authors/{author:ketua}', function(User $author) {
    //     return view('posts', [
    //       'title' => "Artikel Dari Author: $author->ketua",
    //       'posts' => $author->posts->load('category', 'user'),
    //     ]);
    // });  

  
Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'authenticate']);
Route::post('/logout',[LoginController::class, 'logout']);


Route::get('/dashboard', function(){
  return view('dashboard.index');
})->middleware('auth');

// route untuk slug
Route::get('/dashboard/posts/checkSlug', [DashboardpostController::class, 'checkSlug']);

Route::resource('/dashboard/posts', DashboardpostController::class)->middleware('auth');
Route::post('/dashboard/posts/store', [DashboardpostController::class, 'store'])->middleware('auth');

Route::resource('/dashboard/lapor', LaporController::class)->middleware('auth');

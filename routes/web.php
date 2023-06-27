<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckInController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SingInController;
use App\Http\Controllers\CreateCourseController;
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
//printipal page
Route::get('/', function () {return view('welcome');})->name('/');

// Login and register users
Route::get('/SingUp', [CheckInController::class, 'create'])->name('create');

Route::get('/SingIn', function () {return view('Login.SingIn');})->name('SingIn');

Route::post('/toRegister', [CheckInController::class, 'store'])->name('toRegister');

Route::get('/index', [CheckInController::class, 'index'])->name('index');

Route::get('/show/{show}', [CheckInController::class, 'show'])->name('show');

Route::get('/show/{show}/edit', [CheckInController::class, 'edit'])->name('edit');

Route::patch('/blog/{show}', [CheckInController::class, 'update'])->name('update');

Route::delete('/blog/{show}', [CheckInController::class, 'destroy'])->name('destroy');

// login resource
Route::post('/SingInresources', [SingInController::class, 'store'])->name('validate.singIn');


// make a post
Route::get('/post', [PostsController::class, 'index'])->name('posts.index');

Route::get('/createcategory', [PostsController::class, 'create'])->name('post.create');

Route::post('/post.store', [PostsController::class, 'store'])->name('posts.store');

Route::get('/post/{posts}', [PostsController::class, 'show'])->name('show.post');

Route::get('/posts/{posts}/edit', [PostsController::class, 'edit'])->name('edit.posts');

Route::patch('/posts/{posts}', [PostsController::class, 'update'])->name('update.posts');

Route::delete('/posts/{posts}', [PostsController::class, 'destroy'])->name('destroy.posts');

// create course

// Route::get('/post/{posts}', [CreateCourseController::class, 'index'])->name('create.course.index');

Route::get('/course/{posts}/create', [CreateCourseController::class, 'create'])->name('course.create');

Route::post('/createCourseStore', [CreateCourseController::class, 'store'])->name('create.course.store');

Route::get('/post/{post}/course/{course}', [CreateCourseController::class, 'show'])->name('create.course.show');

Route::get('/post/{post}/course/{course}/edit', [CreateCourseController::class, 'edit'])->name('edit.course.posts');

Route::patch('/post/{post}/course/{course}', [CreateCourseController::class, 'update'])->name('update.course.posts');

Route::delete('/post/{post}/course/{course}', [CreateCourseController::class, 'destroy'])->name('destroy.course.posts');

//products
Route::get('/products', function () {return view('products.product');})->name('products');

//services
Route::get('/services', function () {return view('services.services');})->name('services');

//Discover
Route::get('/discover', function () {return view('discover.discover');})->name('discover');
//blog

Route::get('/blog', function() { return view('blogs.blog');})->name('blog');


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use App\Models\Product;
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

Route::get('/', [ProductController::class, 'index']);

// // explore page
// Route::get('/explore', function() {
//     return view('explore', [
//         'products' => Product::all()
//     ]);
// });

// explore page
Route::get('/explore', [ProductController::class, 'explore']);

// create a product
Route::get('/CreateService', [ProductController::class, 'create'])->middleware('auth');

// store a product
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

// show project page
Route::get('/project', [ProjectController::class, 'project']);

// show create service detail
Route::get('/CreatingProduct', function () {
    return view('create-service-des');
});

// show create project detail
Route::get('/CreatingProject', function () {
    return view('create-project-des');
});

// create a product
Route::get('/CreateProject', [ProjectController::class, 'create'])->middleware('auth');

// store a product
Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');

//show product details
Route::get('/service-detail/{product}', [ProductController::class, 'show'])->name('service-detail');

//show product details
Route::get('/projectdetails/{project}', [ProjectController::class, 'show'])->name('projectdetails');

// show seller profile
Route::get('/service-detail/{product}/sellerProfile', [ProductController::class, 'sellerProfile'])->name('seller-profile')->middleware('guest');

// profile page
Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');

// manage
Route::get('/manage', [ProfileController::class, 'manage'])->name('manage')->middleware(('auth'));

// Show Edit Form
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit')->middleware('auth');

// Update product
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update')->middleware('auth');

// Delete product
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy')->middleware('auth');

// Delete projects
Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy')->middleware('auth');

// Delete cart
Route::delete('/cart/{cart_id}', [ProductController::class, 'destroyFromCart'])->name('cart.destroy')->middleware('auth');

// Delete order
Route::delete('/orders/{order}', [ProductController::class, 'destroyFromOrder'])->name('orders.destroy')->middleware('auth');

// sort products
Route::get('/explore', [ProductController::class, 'sort'])->name('products.sort');

// add to cart
Route::post('add_to_cart',[ProductController::class,'addToCart'])->middleware('auth');

// show cart
Route::get('/cart', [ProductController::class, 'cart'])->name('cart')->middleware('auth');

// show payment
Route::get('/pay', [ProductController::class, 'pay'])->name('pay')->middleware('auth');

// add to order
Route::post('add_to_order',[ProductController::class,'addToOrder'])->middleware('auth');

// show cart
Route::get('/order', [ProductController::class, 'order'])->name('order')->middleware('auth');

// show register create form
Route::get('/register', [UserController::class, 'register'])->middleware('guest');

// create new users 
Route::post('/users', [UserController::class, 'store'])->name('users.store');

// logout
Route::post('/logout', [UserController::class, 'logout']);

// Show Login Form
Route::get('/login', [UserController::class, 'loginPage'])->name('loginPage')->middleware('guest');

// login
Route::post('/users/authenticate', [UserController::class, 'authenticate'])->name('login')->middleware('guest');


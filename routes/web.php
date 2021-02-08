<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\CategoryController;
use App\Http\Livewire\AddReview;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/businesses/{slug}/{id}', function () {
    return view('business');
});

Route::get('/', function () {
    return view('home', [
        'newBusinesses' => \App\Models\Business::limit(4)->get(),
        'recentReviews' => \App\Models\Review::limit(4)->get()
    ]);
});


Route::get('/businesses/{businessId}/reviews/create', AddReview::class);

Auth::routes();
Route::get('/admin/categories', function(){
    return view('admin.categories');
});
Route::get('/admin/businesses', function(){
    return view('admin.businesses');
})->middleware('auth');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::post('/reviews', [ReviewController::class, 'store']);
// Route::delete('reviews/{review}', [ReviewController::class, 'destroy']);

// Route::post('/businesses', [BusinessController::class, 'store']);
// Route::delete('/businesses/{business}', [BusinessController::class, 'destroy']);

// Route::post('/categories', [CategoryController::class, 'store']);

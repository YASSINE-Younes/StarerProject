<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\ThemeController;
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


//  Comments ROUTE 
Route::post('/comment/store', [CommentController::class, 'store'])->name('comment.store');


//  Blog ROUTE 
Route::get('my-blogs' , [BlogController::class , 'myblogs'])->name('blogs.my-blogs');
Route::resource('blogs', BlogController::class)->except('index');

//  Contact ROUTE 
 Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');

//  SUBSCRIPER ROUTE 
 Route::post('/subscriber/store', [SubscriberController::class, 'store'])->name('subscriber.store');


 

//  THEME ROUTE 
Route::controller(ThemeController::class)->name('theme.')->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/category/{id}','category')->name('category');
    Route::get('/contact','contact')->name('contact');
 
  

});









// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

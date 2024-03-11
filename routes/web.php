<?php

use App\Http\Controllers\backend\postController;
use App\Http\Controllers\frontend\homeController;
use App\Http\Controllers\ProfileController;
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
// Frontend Routs
Route::get('/',[homeController::class,'index'])->name('home');

Route::get('/about', function(){
    return view('frontend.about.index');
})->name('about');

Route::get('/contact', function(){
    return view('frontend.contact.index');
})->name('contact');


// Backend Routs
Route::middleware(['auth', 'verified'])->group(function () {
    // load dashboard page
    Route::get('/dashboard',function(){
        return view('backend.dashboard.index')
            ->with('pageName','Dashboard');
    })->name('dashboard');

    // load posts list page
    Route::get('/dashbord/posts',[postController::class,'index'])->name('dashboard.post');

    // load edit post page for seleced post
    Route::get('/dashbord/posts/edit/{id}',[postController::class,'edit'])->name('dashboard.post.edit');

    // update selected post
    Route::put('/dashbord/posts/edit/{id}/update',[postController::class,'update'])->name('dashboard.post.update');

    // soft delete selected post 
    Route::get('/dashboard/posts/edit/{id}/delete',[postController::class,'delete'])->name('dashboard.post.delete');



    Route::get('/dashbord/posts/create',function(){
        return view('backend.post.create')
            ->with('pageName','Create Post');
    })->name('dashboard.post.create');

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

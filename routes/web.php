<?php

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
    Route::get('/dashboard',function(){
        return view('backend.dashboard.index')
            ->with('pageName','Dashboard');
    })->name('dashboard');

    Route::get('/dashbord/posts',function(){
        return view('backend.post.index')
            ->with('pageName','Post');
    })->name('dashboard.post');

    Route::get('/dashbord/posts/create',function(){
        return view('backend.post.create')
            ->with('pageName','Create Post');
    })->name('dashboard.post.create');

    Route::get('/dashbord/posts/edit',function(){
        return view('backend.post.edit')
            ->with('pageName','Edit Post');
    })->name('dashboard.post.edit');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

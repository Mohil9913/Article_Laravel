<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('index');
});

Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::post('/userlogin', [LoginController::class, 'userlogin'])->name('login.post');

Route::get('/signup', [LoginController::class, 'signup'])->name('signup');

Route::post('/usersignup', [LoginController::class, 'usersignup'])->name('signup.post');



Route::group(['middleware' => 'auth'], function() {
    
    Route::get('/home', [ArticleController::class, 'home'])->name('home');
    
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/myArticles', function () {
        return view('myArticles');
    })->name('myArticles');
    
    Route::get('/read/{id?}', [ArticleController::class, 'viewArticle'])->name('view');
    
    Route::get('/publish/{id?}', [ArticleController::class, 'publish'])->name('publish');

    Route::post('/publish', [ArticleController::class, 'create'])->name('publish.post');

    Route::get('/dashboard', [ArticleController::class, 'dashboard'])->name('dashboard');

    Route::post('/edit/{id?}', [ArticleController::class, 'update'])->name('publish.save');

    Route::get('/delete/{id?}', [ArticleController::class, 'delete'])->name('delete');
});
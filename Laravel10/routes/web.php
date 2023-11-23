<?php

// request  

use App\Http\Controllers\BlogController;
use App\Models\posts;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

route::prefix('/blog')->name('blog.')->controller(BlogController::class)->group(function (){
    Route::get('/', 'index')->name('index');

    Route::get('/{slug}-{post}', 'show')->where([
        'post' => '[0-9]+',
        'slug'=> '[a-z0-9\-]+'
    ])->name('show');
    
    // Route::get('/{post}', 'show')->where([
    //     'post'=> '[a-z0-9\-]+'
    // ])->name('show');


    // Route::get('/{post:slug}', 'show')->where([
    //     'post'=> '[a-z0-9\-]+'
    // ])->name('show');
    
});
<?php

// request  

use App\Http\Controllers\BlogController;
use App\Models\posts;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Route;

/** 
 * Le modèle binding nous permet de lier un paramètre de route à un modèle de base de données.
 *  Par exemple, supposons que nous avons une route qui prend un ID et un slug comme paramètres
*/

Route::get('/', function () {
     return view('welcome');
});

// Le modèle binding nous permet de lier un paramètre de route à un 
// modèle de base de données. Par exemple, supposons que nous avons une route qui
//  prend un ID et un slug comme paramètres.

route::prefix('/blog')->name('blog.')->controller(BlogController::class)->group(function (){
    Route::get('/', 'index')->name('index');

    /* 
        Route::get('/{slug}-{id}', 'show')->where([
            'id' => '[0-9]+',
            'slug'=> '[a-z0-9\-]+'
        ])->name('show');
    */

    
        Route::get('/{slug}-{post}', 'show')->where([
            'post'=> '[0-9]+',
            'slug'=> '[a-z0-9\-]+'
        ])->name('show');
    
    /*        
        Route::get('/{post:slug}', 'show')->where([
            'post'=> '[a-z0-9\-]+'
        ])->name('show');
    */


});
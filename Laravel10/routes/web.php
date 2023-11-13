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



/*
            DEBUGBAR
   Laravel Debugbar, comme son nom l'indique, va générer une barre qui vous permettra d'inspecter différentes choses sur le framework.
    Vous pourrez notamment voir quelle partie de code a pris le plus de temps, les erreurs, les différentes vues incluses par votre système,
    les informations concernant la route, les requêtes SQL, les modèles, etc.

    Pour installer le package de debugbar
    
    ---- `` composer require barryvdh/laravel-debugbar --dev `` -----
*/

/*
            IDE HELPER
    Du même auteur, Laravel IDE Helper permettra de générer des fichiers pour avoir une meilleur complétion au niveau de votre éditeur.
    L'installation se fait aussi au travers de composer.

    ---- `` composer require --dev barryvdh/laravel-ide-helper `` -----
    ---- `` php artisan ide-helper:models `` -----



    
*/
<?php

// request  

use App\Models\posts;
use Illuminate\Http\Request; 
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

//  chapitre L'ORM  

    //  communiquer avec une base  de donnee avec laravel  
    // l'orem c'st le demunitif de Object Relationnel Mapping  
    // ce  sont des classes qui vont  permettre d'interagir avec les donnee en BD qui vont permettre  de  les representent  sous forme d'objet 
// a la place de creer  la table et creer les infos d'interieur  dans la ravel on a : 
// - on va utiliser le systeme  de migration 
// creer une migration qui va permettre de rajouter les infos  dans notre BD (nomme notre migration)
// php artisan make:migration create_admins_table 






Route::get('/', function () {
    return view('welcome');
});


    Route::get('/blog' ,function (Request $request) {

        // Ajouter des donnees
            // $post = new posts();
            //$post->title = 'new post';
            //  $post ->slug = 'new_post';
            // $post-> content = 'le post de cette interface est newpost ';
            // $post->save();

            //return $post ;
        // rucuperer les donner 
            //  return $post::all([ 'id', 'title', 'content']) ;
            //  $post = post::all(['title','id', 'content']) ;
            //  $post = post::paginate(2 ,['id', 'title']) ;
            //  $post = post::where('id' , '>' , 1)->limit(1)->get();

            //    $post = post::find(2) ;

        //modifier title 
            //  $post->title = 'New title';

        //methode classique delete ,save 
            //  $posts-> delete() ;
                //  dd($posts[0] ->title );
                // dd($posts -> first());
                // $post = posts()::Create([
                //     'title'=> 'mon nouveau' ,
                //     'slug'=> 'neauveau ' ,
                //     'content' => 'neauveau contenu ' 

                // ]) ;

        // modifier
            $post = posts::where( 'id' ,'>',0)->update([
                'title' => 'title updated',
                'content' => 'content updated' 
            ]) ;
            dd($post) ;
            return ($post) ;
    })->name('index');
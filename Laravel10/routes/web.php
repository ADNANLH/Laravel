<?php

// request  

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; 

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
// lancer server 




   // ROUTING

Route::get('/', function () {
    return view('welcome');
});

//the type of chaine de caracter  text/html; charset=UTF-8



// Route::get('/blog' ,function ()  {
//     return  'Bonjour Mr adnan';   


// });

// lien : http://127.0.0.1:8000/blog
// display : Bonjour Mr adnan

//  le serveur est  aasez intelligent pour savoir quel type de  retour il doit fair 

Route::get('/blog' ,function ()  {
    return  [
    //    recuperer les parametre suplementair (APP php standard )
        "name" => $_GET['name'], 
       "article" => "Article-1" ,
       "test" => "test"    
    ]; 
});

// lien : http://127.0.0.1:8000/blog?name=lharrak
// display : {"name":"lharrak","article":"Article-1","test":"test"}


    //   la bonne maniere de recuperer les  parametre suplementaire  dans  le cadre d'une APP laravel
  
Route::get('/blog' ,function (Request $request)  {
    // return  
        // "name" => $request ->path(),
            // display : {"name":"blog","article":"Article1","test ":"test"}

        // "name" => $request ->url(),
            // display : {"name":"http:\/\/127.0.0.1:8000\/blog","article":"Article1","test ":"test"}
                    
        // "name" => $request ->all()
            // va prendre tous les paraletre et va l'afficher sous form de table
            // lien :  http://127.0.0.1:8000/blog?name=Adnan&age=22&ville=tanger
            // display :  {"name":{"name":"Adnan","age":"22","ville":"tanger"}} 
                    
        //  "name" => $request ->input('name')
            // si ont a besoint d'une infos specifique use methode input('cle') 
            // lien : http://127.0.0.1:8000/blog?name=adnan&age=22&ville=tanger
            // display :  {"name":"adnan"}

        //   l'avanatage de cet methode when we have nothing  ne vas pas avoir un erreur  
            // lien : http://127.0.0.1:8000/blog
            // display : {"name":null}

});


    // lien : http://127.0.0.1:8000/blog/my-first-chance-15 

    //  display : {"slug":"my","id":"first-chance-15"}
            // Pour la recuperation des parametre type 'chaine de carractere ' qui se trouve dans l'URL  
            // cuz it is defficult to change all the links partout. Solution = nommination des liens pour les trouver tres rapidement 
         
    Route::prefix('/blog')->name('blog.')->group(function()  {
        Route::get('/' ,function (Request $request) {

            return [
                "link" => \route('blog.show',['slug' => 'article' ,'id'=> 16]),
            ];
            // "link" => '/blog/my-first-chance-15 ' ,
            // pour generer auto notre root 
        })->name('index');
        // commande to show the list of route that i have php artisan route:list  
        // ont va utilise une method global Route(fisrt P nom de notre root , secode P optionel  ce sont les parametre a spicifier dans L'url )
        // dans le cadre de l'affichage d'un article il faut passer un slug + ID 
        // modele binding l'exucution apres routage  ( l'ordre est obligatoir dans ce cas ) 
        Route::get('/{slug}/{id}', function (string $slug ,string $id, Request $request ) {
            // return 'BONJOURjj';
    
            return [
                "slug" => $slug ,
                'id' => $id ,
                'name'  =>$request ->input ('name'),
                //  lien : http://127.0.0.1:8000/blog/my-first-chance-15?name=yas
                //  display : {"slug":"my-first-chance","id":"15","name":"yas"}
    
            ];

                    
            // methode suplemmenteire  specifier des contraintes sur un parametre je veux l'id = sa soit just le nombre  et slug = le resete 
            // {"slug":"my-first-chance","id":"15"}
            // i can add the request to know the name 
            // regular expression 
        })->where([
            'id' => '[0-9]+',
            'slug' => '[a-z0-9\-]+'
        ])->name('show');
        
    });           
    // PREFIX
    //  regrouper plusieurs routes lorsque ils ont des points communs  on peut dire les deux root ont le meme prefix  . on change l'url une seul fois l'orsque of fait prefix 

    // pour fair un changement a plusieur route a un seul endroit 
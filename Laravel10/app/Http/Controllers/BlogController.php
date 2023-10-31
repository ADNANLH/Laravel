<?php

namespace App\Http\Controllers;

use App\Models\posts;
use Illuminate\Http\Request;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\RedirectResponse;


// Les Controllers ce sont simplement des classes qui ont comme objectif de regrouper...
// les fonctions qui vont contenir la logique de notre application. Au niveau de Laravel,...
// je peux créer un contrôleur grâce à la commande php artisan make:controller.


//les controller se sont des manières d'organiser le code et regrouper les methodes de la meme logique et qui permet une code bien organiser 

class BlogController extends Controller
{
    //

    public function index (): Paginator {
        return posts::paginate(25);

    }

    public function show(string $slug, string $id): RedirectResponse | posts
    {
        $post = posts::findOrFaild($id);
        if($post->slug ==! $slug ){
            return to_route('blog.show', ['slug' => $post->slug, 'id'=>$post->id]);
        }
        return $post;
    }
}

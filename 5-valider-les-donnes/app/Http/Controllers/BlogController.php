<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogFilterRequest;
use App\Models\posts;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

// Les Controllers ce sont simplement des classes qui ont comme objectif de regrouper...
// les fonctions qui vont contenir la logique de notre application. Au niveau de Laravel,...
// je peux créer un contrôleur grâce à la commande php artisan make:controller.


//les controller se sont des manières d'organiser le code et regrouper les methodes de la meme logique et qui permet une code bien organiser 

class BlogController extends Controller
{
    // 12:49 min

    public function index (BlogFilterRequest $request): View {

        
        // $validator = Validator::make([
        //     'title' => 'title title',

        // ], [
        //     'title' => 'required|min:8'
        //     // 'title' => ['required', 'min:8', 'regex']
        //     // 'title' => [Rule::('posts')->ignore(2)]
        //     // 'title' => ['unique:posts']
        // ]);

        
        // dd($validator->fails());
            // aficher true ou false
        // dd($validator->errors()); 
            // aficher les message d'errors
        // dd($validator->validated());
            // aficher les element qui ont valider
            
        dd($request->validated());
        return view ('blog.index', [
            'posts' => posts::paginate(2)
        ]);
        
    }

    public function show(string $slug, string $id): RedirectResponse | View
    {
        $post = posts::findOrFail($id);
        if($post->slug !== $slug ){
            return to_route('blog.show', ['slug' => $post->slug, 'id' => $post->id]);
        }
        return view('blog.show', [
            'post' => $post
        ]);
    }
}

//  php artisan make:request BlogFilterRequest
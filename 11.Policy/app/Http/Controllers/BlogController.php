<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;
use Illuminate\Support\Facades\Gate;

class BlogController extends Controller
{

    public function index()
    {
        $Blogs = Blog::paginate(4);
        return view('blog.index', compact('Blogs'));
    }


    public function create()
    {
        // dd(Gate::allows('isAdmin'));

        // dd(Gate::role());
        if (Gate::denies('create', Blog::class)) {
            return abort(403);
        }
        $Categories = Categorie::all();
        return view('blog.create', compact('Categories'));
    }


    public function store(BlogRequest $request)
    {
        $validated = $request->validated();
        Blog::create($validated);
        return redirect('/')->with('success', "L'article a bien été sauvegardé");
    }

    public function show(Blog $blog)
    {
        if (Gate::denies('view', $blog)) {
            return abort(403);
        }
        return view('blog.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        if (Gate::denies('update', $blog)) {
            return abort(403);
        }
        $Categories = Categorie::all();
        return view('blog.edit', compact('blog', 'Categories'));
    }

    public function update(BlogRequest $request, Blog $blog)
    {

        $blog->update($request->validated());
        return redirect('/')->with('success', "L'article a bien été modifier");
    }

    // public function destroy(Blog $blog)
    // {
    //     $blog->delete();
    //     return redirect('/')->with('success', "L'article a bien été modifier");
    // }
}
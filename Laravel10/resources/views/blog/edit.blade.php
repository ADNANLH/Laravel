@extends('base')

@section('title', 'Modifier un article')

@section('content')
    <form action="" method="POST">
        @csrf
        <div>
            <label for="title">Titre</label>
            <input type="text" name="title" value="{{ old('title', $post->title) }}">
            @error('title')
                {{$message}}
            @enderror
            
        </div>

        <div>
            <label for="slug">Slug</label>
            <input type="text" name="slug" id="slug" value="{{ old('slug', $post->slug) }}">
            @error('slug')
                {{$message}}
            @enderror
            
        </div>
        
        <div>
            <textarea name="content" > {{old('content', $post->content)}}</textarea>
            @error('content')
                {{$message}}
            @enderror

        </div>
       
            <button name="btn">Modifier</button>
    </form>

   
@endsection
 
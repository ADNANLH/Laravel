@extends('base')

@section('title', 'Créer un article')

@section('content')
    <form action="" method="POST">
        @csrf
        <div>
            <input type="text" name="title" value="{{ old('title', 'Mon titre') }}">
            @error('title')
                {{$message}}
            @enderror
            
        </div>
        
        <div>
            <textarea name="content" > {{old('content', 'Contenue de démenstration')}}</textarea>
            @error('content')
                {{$message}}
            @enderror

        </div>
        <div>
             @error('slug')
                {{$message}}
            @enderror
        </div>
            <button name="btn">Enregistrer</button>
    </form>

   
@endsection
 
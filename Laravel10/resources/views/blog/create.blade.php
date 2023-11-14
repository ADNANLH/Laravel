@extends('base')

@section('title', 'Créer un article')

@section('content')
    <form action="" method="POST">
        @csrf
        <div>
            <input type="text" name="title" value="Article de démentstration">
            @error('title')
                {{$message}}
            @enderror
            
        </div>
        
        <div>
            <textarea name="content" > Contenue de démenstration</textarea>
            @error('content')
                {{$message}}
            @enderror

        </div>
        <button name="btn">Enregistrer</button>
    </form>

   
@endsection
 
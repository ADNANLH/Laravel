@extends('base')

@section('title', 'Créer un article')

@section('content')
    <form action="" method="POST">
        <input type="text" name="title" value="Article de démentstration">
        <textarea name="content" > Contenue de démenstration</textarea>
        <button name="btn">Enregistrer</button>
    </form>
   
@endsection
 
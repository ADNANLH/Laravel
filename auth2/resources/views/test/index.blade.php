@extends('test.base') <!-- Extend the 'base' layout -->

@section('title', 'show test') <!-- Define content for the 'title' yield section -->

@section('content')
    <h1>Welcome to My Page</h1>  
    <a href="{{route('blog.create')}}" class="btn btn-primary">Ajouter test</a>
 

    @foreach($tables as $table)
<article>
  <h3>{{$table->test}}</h3>
  <p>
    {{$table->name}}
  </p>
  <p>
    {{$table->content}}
  </p>
  <p>
  </p>
</article>
{{$tables->links()}}
@endforeach

@endsection


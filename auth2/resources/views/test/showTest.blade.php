@extends('test.base') <!-- Extend the 'base' layout -->

@section('title', 'Title') <!-- Define content for the 'title' yield section -->

@section('content')
    <h1>Welcome to My Page</h1>



    @if(isset($table))
        <article>
            <h3>{{ $table->test }}</h3>
            <p>{{ $table->name }}</p>
            <p>{{ $table->content }}</p>
        </article>
    @else
        <p>Table not found or does not exist.</p>
    @endif
@endsection
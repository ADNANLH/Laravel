@extends('test.base') <!-- Extend the 'base' layout -->

@section('title', 'Create un article') <!-- Define content for the 'title' yield section -->

@section('content')
<form action="" method="Post">
    @csrf

    <div class="form-group">
        <label for="test">Test:</label>
        <input type="text" class="form-control" id="test" name="test" value="test demo">
    </div>

    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" value="name demo">
    </div>

    <div class="form-group">
        <label for="content">Content:</label>
        <textarea class="form-control" id="content" name="content">content</textarea>
    </div>


    <button href="{{route('blog.create')}}" class="btn btn-primary">Enregistrer</button>
</form>
@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif
</div>

@endsection


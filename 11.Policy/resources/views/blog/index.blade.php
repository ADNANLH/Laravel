@extends('layout.layout')
@section('title', 'Mon Blog')
@section('content')
    <h1>Mon Blog</h1>



    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Blog Name</th>
                <th scope="col">Slug</th>
                <th scope="col">Categorie</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Blogs as $Blog)
                <tr>
                    <td>
                        {{ $Blog->name }}
                    </td>
                    <td>
                        {{ $Blog->slug }}
                    </td>
                    <td>
                        {{ $Blog->categorie->name }}
                    </td>
                    <td>
                        @can('update', $Blog)
                            <a class="btn btn-success" href="{{ route('edit', ['blog' => $Blog->id]) }}"
                                class="card-link text-info ">Edit</a>
                        @endcan
                        @can('view', $Blog)
                            <a class="btn btn-light" href="{{ route('show', ['blog' => $Blog->id]) }}" class="card-link ">show</a>
                        @endcan
                    </td>
            @endforeach
            </tr>
        </tbody>
    </table>

    {{ $Blogs->links() }}
    </div>
@endsection

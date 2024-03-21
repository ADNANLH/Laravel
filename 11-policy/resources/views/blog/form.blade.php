<form action="" method="POST" class="vstack gap-2">
    @csrf
    @method($post->id ? "PATCH" : "POST")
    <div class="form-group">
        <label for="title">Titre</label>
        <input type="text" class="form-control" name="title" value="{{ old('title', $post->title) }}">
        @error('title')
            {{$message}}
        @enderror  
    </div>

    <div class="form-group">
        <label for="slug">Slug</label>
        <input type="text" class="form-control" name="slug" id="slug" value="{{ old('slug', $post->slug) }}">
        @error('slug')
            {{$message}}
        @enderror
    </div>
    
    <div class="form-group">
        <label for="content">Description</label>
        <textarea name="content" class="form-control"> {{old('content', $post->content)}}</textarea>
        @error('content')
            {{$message}}
        @enderror
    </div>

        <button name="btn" class="btn btn-primary">
            @if ($post->id)
                Modifier  
            @else
                Créer    
            @endif    
        </button>
</form>

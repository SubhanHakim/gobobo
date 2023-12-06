@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Post</h1>
    </div>

    <div class="col-lg-8">
        <form method="POST" action="/dashboard/posts/{{$post->id}}">
            @method("put")
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">title</label>
                <input type="text"
                    class="form-control @error('title')
                    is-invalid
                @enderror"
                    id="title" name="title" value="{{ old('title', $post->title) }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text"
                    class="form-control @error('slug')
                    is-invali
                @enderror"
                    id="slug" name="slug" value="{{ old('slug', $post->slug) }}">
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text"
                    class="form-control @error('city')
                    is-invalid
                @enderror"
                    id="city" name="city" value="{{ old('city', $post->city) }}">
                @error('city')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">Country</label>
                <input type="text"
                    class="form-control @error('country')
                    is-invalid
                @enderror"
                    id="country" name="country" value="{{ old('country', $post->country) }}">
                @error('country')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="whattsap" class="form-label">whattsap</label>
                <input type="text"
                    class="form-control @error('whattsap')
                    is-invalid
                @enderror"
                    id="whattsap" name="whattsap" value="{{ old('whattsap', $post->whattsap) }}">
                @error('whattsap')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input type="email"
                    class="form-control @error('email')
                    is-invalid
                @enderror"
                    id="email" name="email" value="{{ old('email', $post->email)  }}">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">alamat</label>
                <input type="text"
                    class="form-control @error('alamat')
                    is-invalid
                @enderror"
                    id="alamat" name="alamat" value="{{ old('alamat', $post->alamat) }}">
                @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="instagram" class="form-label">instagram</label>
                <input type="text"
                    class="form-control @error('instagram')
                    is-invalid
                @enderror"
                    id="instagram" name="instagram" value="{{ old('instagram', $post->instagram) }}">
                @error('instagram')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="category_id">
                    <option selected>Open this select menu</option>
                    @foreach ($categories as $category)
                        @if (old('category_id', $post->category_id) == $category->id)
                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Body</label>
                @error('desc')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <input id="desc" type="hidden" name="desc" value="{{old('desc', $post->desc)}}">
                <trix-editor input="desc"></trix-editor>

            </div>

            <button type="submit" class="btn btn-primary">Update Post</button>
        </form>
    </div>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        })

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
    </script>
@endsection

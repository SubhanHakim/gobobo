@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">


                <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left"></i>Back to all my post</a>
                <a href="/dashboard/posts/{{ $post->id }}/edit" class="btn btn-warning"><i
                        class="bi bi-pencil"></i>edit</a>
                <form action="/dashboard/posts/{{ $post->id }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i
                            class="bi bi-trash3"></i>Delete</button>
                </form>

                <div class="d-flex flex-column justify-content-center align-items-center">
                    <h1 class="mb-3">{{ $post->title }}</h1>
                    <p>{{ $post->city }}, {{ $post->country }}</p>
                </div>

                @if ($post->image)
                    <div style="max-height: 350px; overflow: hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mt-3" alt="">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400/?hotel,villa" class="img-fluid mt-3" alt="">
                @endif

                <p class="fs-5">{{ $post->desc }}</p>
            </div>
        </div>
    </div>
@endsection

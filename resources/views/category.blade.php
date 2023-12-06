@extends('layout.main')

@section('container')
    <div class="container">
        <h1>Post Category : {{ $category }}</h1>

        @foreach ($posts as $post)
            <div class="d-flex gap-5 justify-comtent-between">
                <div class="card" style="width: 18rem;">
                    @if ($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mt-3 z-index-1" alt="">
                    @else
                        <img src="https://source.unsplash.com/1200x800/?hotel,villa" class="image rounded" alt="...">
                    @endif
                    <div class="keterangan card-body">
                        <h5 class="card-title">{{ $post->title }} </h5>
                        <p class="card-text" data-readmore-length='100'>{!! $post->excerpt !!}</p>
                        <a href="/detail/{{ $post->slug }}" class="btn btn-primary w-100 ">Check</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

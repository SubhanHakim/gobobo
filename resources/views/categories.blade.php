@extends('layout.main')

@section('container')
    <div class="container category d-flex flex-column align-items-center justify-content-center">
        <div class="w-100 d-flex flex-column align-items-center justify-content-center gap-5">
            <h1 class="fs-1 mb-2">Catagories</h1>
            <div class="row gap-5">
                @foreach ($categories as $category)
                    <div class="card border rounded-4" style="width: 18rem;">
                        <img src="https://source.unsplash.com/1200x800/?hotel,villa" class="image rounded" alt="...">
                        <div class="card-body">
                            <h4 class="card-title short-text"><a class="nav-link"
                                    href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h4>
                                    <a href="/categories/{{$category->slug}}" class="btn btn-primary show-more-btn">Show More</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
@endsection

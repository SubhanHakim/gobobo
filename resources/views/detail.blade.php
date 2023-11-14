@extends('layout.main')

@section('container')
    <nav class="navbar navbar-detail navbar-expand-lg bg-light navbar-dark">
        <div class="container d-flex justify-content-start">
            <a class="navbar-brand text-uppercase text-dark fw-bold" href="#">Gobobo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    @include('partials.detailPage')
@endsection

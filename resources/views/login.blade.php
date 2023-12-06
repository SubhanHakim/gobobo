@extends('layout.main')

@section('container')
    <div class="bg-sigin">
        <div class="d-flex image-signin">
            <div class="container-signin">
                <div class="atas">
                    <img class="header-image" src="..\assets\img-signin.png" alt="">
                </div>

                <div class="centered">
                    <h1 class="text-signin">Login to your account </h1>
                    <h2 class="text-center">Explore GOBOBO comfortably, you can see which villa will be your holiday choice
                        today </h2>
                </div>
            </div>
            <div class="right">
                <h1 class="text-sigin">SIGN IN</h1>
                <div class="form-signin">
                    @if (session()->has('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('status') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('loginError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form action="/signin" method="POST">
                        @csrf
                        <label for="name">USERNAME</label><br>
                        <input
                            class="@error('name')
                            is-invalid
                        @enderror"
                            type="text" id="name" name="name" value="{{ old('name') }}" autofocus required><br>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="password">PASSWORD:</label><br>
                        <input type="password" id="password" name="password" value="" required><br><br>
                        <input type="submit" value="LOGIN">
                    </form>
                    <small class="d-block text-center mt-3 fs-3">Not Register? <a href="/register">Register Now</a></small>
                </div>
            </div>
        </div>
    </div>
@endsection

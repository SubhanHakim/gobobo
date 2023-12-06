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
                <h1 class="text-sigin text-uppercase">Sign Up</h1>
                <div class="form-signin">
                    <form action="/register" method="POST">
                        @csrf
                        <label for="name">USERNAME</label><br>
                        <input class="@error('name')
                        is-invalid
                    @enderror"
                            type="text" id="name" name="name" value="{{old('name')}}" placeholder="Username"><br>
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>
                        <label for="email">Email</label><br>
                        <input
                            class="@error('email')
                            is-invalid
                        @enderror"
                            type="email" id="email" name="email" value="{{old('email')}}" placeholder="Email"><br>
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>
                        <label for="password">PASSWORD:</label><br>
                        <input
                            class="@error('password')
                            is-invalid
                        @enderror"
                            type="password" id="password" name="password" value=""><br>
                            @error('password')
                                {{ $message }}
                            @enderror
                            <br>
                        <input type="submit" value="Register">
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

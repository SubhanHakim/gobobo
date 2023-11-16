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
                    <h2 class="text-center">Explore GOBOBO comfortably, you can see which villa will be your holiday choice today </h2>                
            </div>
        </div>
        <div class="right">
                <h1 class="text-sigin">SIGN IN</h1>
            <div class="form-signin">
                <form action="/action_page.php">
                    <label for="fname">USERNAME</label><br>
                    <input type="text" id="fname" name="fname" value=""><br>
                    <label for="lname">PASSWORD:</label><br>
                    <input type="text" id="lname" name="lname" value=""><br><br>
                    <input type="submit" value="LOGIN">
                </form> 
            </div>
        </div>
    </div>
</div>

@endsection
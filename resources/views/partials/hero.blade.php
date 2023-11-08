<div class="container-fluid bg-image d-flex justify-content-center align-items-center">
   <div class="hero-section d-flex flex-column gap-5 justify-content-evenly">
    <div class="heading">
        <h1 class="text-white heading text-center">enjoy the new atmosphere without any disturbance</h1>
    </div>
    <div class="icon d-flex justify-content-between align-items-center text-center text-white">
        @foreach ($posts as $post)
            <div class="info">
                <img src={{$post["image"]}} alt="">
                <p>{{number_format($post["total"],0,"",".")}} {{$post["Title"]}}</p>
            </div>
        @endforeach
    </div>
   </div>
</div>
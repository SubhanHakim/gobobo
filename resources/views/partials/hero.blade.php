<section class="">
    <div class="container d-flex justify-content-center align-items-center h-100 w-100">
        <div class="d-flex flex-column justify-content-around gap-5 h-auto align-items-center">
            <div class="heading">
                <h1 class="text-white heading text-center">enjoy the new atmosphere without any disturbance</h1>
            </div>
            <button class="btn btn-secondary btn-edit"><a class="nav-link" href="#vacation">Explore GOBOBO</a></button>
            <div class="d-flex justify-content-evenly w-100 align-items-center h-100">
                @foreach ($posts as $post)
                    <div class="d-flex justify-content-between align-items-center text-center text-white">
                        <div class="info">
                            <img src={{ $post['image'] }} alt="">
                            <p>{{ number_format($post['total'], 0, '', '.') }} {{ $post['title'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

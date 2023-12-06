
<div class="container mt-5">
    <div class="row d-flex align-items-center">
        <div class="col-3 align-items-center">
            <div class="d-flex gap-2">
                <a href="/" class="nav-link text-black-50 fs-5">Home</a>
                <p class="fs-5 text-black">/</p>
                <a href="/categories/{{$detail->category->slug}}" class="nav-link active text-black fs-5">{{$detail->category->name}}</a>
                <p class="fs-5 text-black">/</p>
                <p href="#" class="">By. {{$detail->user->name}}</p>
            </div>
        </div>
        <div class="col">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <h1>{{ $detail['title'] }}</h1>
                <p>{{ $detail['city'] }}, {{ $detail['country'] }}</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-5 gap-1">
            <img src="../assets/villa_1.png" style="width: 525px; height: 100%;" alt="VILLA">
        </div>
        <div class="col-7">
            <img src="../assets/villa_1_2.png" alt="VILLA">
            <img src="../assets/villa_1_3.png" class="mt-4" alt="VILLA">
        </div>

    </div>
    <div class="mt-5">
        <div>
            <h2>About The Place</h2>
        </div>
        <div class="row gap-5">
            <div class=" col-6">
                <p class="text-start">{!! $detail['desc'] !!}</p>
            </div>
            <div class="col">
                <div>
                    <h1>Infromation</h1>
                    <div class="border p-5 rounded">
                        <div class="d-flex gap-2">
                            <i class="bi bi-whatsapp fs-5"></i>
                            <p class="fs-5">{{$detail['whattsap']}}</p>
                        </div>
                        <div class="d-flex gap-2">
                            <i class="bi bi-instagram fs-5"></i>
                            <p class="fs-5">{{$detail['instagram']}}</p>
                        </div>
                        <div class="d-flex gap-2">
                            <i class="bi bi-envelope fs-5"></i>
                            <p class="fs-5">{{$detail['email']}}</p>
                        </div>
                        <div class="d-flex gap-2">
                            <i class="bi bi-geo-alt fs-5"></i>
                            <p class="fs-5">{{$detail['alamat']}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5">
        <div class=" d-flex flex-column w-100">
            <div class="d-flex w-100 align-items-left">
                <h4>Treasure to Choose</h4>
            </div>
            <div class="w-5 d-flex justify-content-between w-100">
                @foreach ($sures as $sure)
                    <div class="imgtc">
                        <img src={{ $sure['image'] }} width="263" height="157.51" alt="">
                        <h6>{{ $sure['nama'] }}</h6>
                        <p class="text-secondary">{{ $sure['tempat'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

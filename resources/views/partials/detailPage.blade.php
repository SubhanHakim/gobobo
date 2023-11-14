<div class="container mt-5">
    <div class="row d-flex align-items-center">
        <div class="col-2 align-items-center">
            <div class="d-flex gap-2">
                <a href="/" class="nav-link text-black-50 fs-5">Home</a>
                <p class="fs-5 text-black">/</p>
                <a href="" class="nav-link active text-black fs-5">Villa Details</a>
            </div>
        </div>
        <div class="col">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <h1>{{ $detail['title'] }}</h1>
                <p>{{ $detail['kota'] }}, {{ $detail['country'] }}</p>
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
                <p class="text-start">{{ $detail['desc'] }}</p>
                <div class="row">
                    @foreach ($feature as $features)
                        <div class="col-3">
                            <div class="text-center">
                                <img src={{ $features['img'] }} alt="Testing">
                                <p class="mt-2">{{ $features['qty'] }} {{ $features['title'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col">
                <div class="p-2 border h-100">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>
</div>

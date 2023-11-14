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
                <div class="p-2 border h-100 rounded-5">
                    <div class="p-5">
                        <div class="col-md-6">
                            <h3>Start Booking</h3>
                            <div class="d-flex">
                                <h3 class="text-success">80$ <span class="text-secondary">per Night</span>
                                </h3>

                            </div>
                            <div class="form-group">
                                <label for="how-long-you-will-stay">How long will you stay?</label>
                                <input type="number" class="form-control" id="how-long-you-will-stay" placeholder="Enter the number of nights">
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Pick a date</h5>
                                        <input type="date" class="form-control" id="pick-a-date">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="text-center">You will pay $160 USD per 2 nights</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="button" class="btn btn-primary">Continue to Book</button>
                            </div>
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
                    <img src={{$sure["image"]}} width="263" height="157.51" alt="">
                    <h6>{{$sure['nama']}}</h6>
                    <p class="text-secondary">{{$sure['tempat']}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="mt-5">
        <div class="row gap-5 justify-content-center align-items-center">
            <div class="col-4">
                <img src="../assets/ulasan.png" width="365.98" alt="">
            </div>
            <div class="col">
                <div class="d-flex flex-column">
                    <div>
                        <h6>Happy Family</h6>
                    </div>
                    <div>
                        <img src="../assets/stars.svg" alt="">
                    </div>
                    <div>
                        <h5 style="width: 40%;">As a husband i can pick a great trip with my own lovely family... thank you</h5>
                        <p class="text-secondary">Agis Nursyam</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
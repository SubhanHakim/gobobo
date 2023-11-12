<div class="container">
    <div class="box">
        <div class="d-flex justify-content-center">
            <h2>POPULAR VILLA DESTINATIONS IN INDONESIA</h2>
        </div>
        <div class="popular mt-5">
            <div class="w-100 d-flex justify-content-between">
                @foreach ($populs as $popul)
                <div class="card-circle popul-size">
                    <img src={{$popul["image"]}} class="rounded-circle img-fluid">
                    <div class="">
                        <h3>{{$popul["city"]}}</h3>
                        <p>{{$popul["total"]}} Akomodasi</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
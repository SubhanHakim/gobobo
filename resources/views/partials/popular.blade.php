<div class="container section-popular ">
    <div class=" d-flex flex-column w-100">
        <div class="heading d-flex w-100 justify-content-center align-items-center">
            <h1>POPULAR VILLA DESTINATIONS IN INDONESIA</h1>
        </div>
        <div class="box">
            @foreach ($populs as $popul)
            <div class="card-popular">
                <img src={{$popul["image"]}} class="card-img" alt="">
                <h2>{{$popul["city"]}}</h2>
                <p>{{$popul["total"]}} akomodasi</p>
            </div>
            @endforeach
        </div>
    </div>
</div>
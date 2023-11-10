<div class="container fluid">
    <div>
        <h2>Vacation With Family</h2>
    </div>
    <div class="display">
        @foreach ($lists as $list)
        <div class="card" style="width: 18rem;">
                <img src={{$list["image"]}} class="card-img-top" alt="...">
                <div class="text">
                    <p>{{$list["title"]}}</p>
                    <p>{{$list["kota"]}}, {{$list["country"]}}</p>
                </div>
                <div class="check">
                    <h2>{{$list["status"]}}</h2>
                </div>
        </div>
        @endforeach
    </div>
</div>

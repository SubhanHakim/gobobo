<div class="container">
    <div>
        <h2>Vacation With Family</h2>
    </div>
    <div class="row gap-4">
        @foreach ($lists as $list)
        <div class="card">
                <img src={{$list["image"]}} class=" w-100 h-100" alt="...">
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

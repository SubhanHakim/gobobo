<div class="container most">
    <div>
        <h2>Vacation With Family</h2>
    </div>
    <div class="row gap-4 ">
        @foreach ($lists as $list)
            <div class="card">
                <div class="incard">
                    <img src={{ $list['image'] }} class="h-100 image" alt="...">
                    <div class="middle">
                        <div class="text-check"><a href="/detail/{{$list["slug"]}}">Check</a></div>
                    </div>
                    <div class="text">
                        <p>{{ $list['title'] }}</p>
                        <p>{{ $list['kota'] }}, {{ $list['country'] }}</p>
                    </div>
                    <div class="check">
                        <h2>{{ $list['status'] }}</h2>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

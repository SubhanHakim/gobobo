<div class="container most" id="vacation">
    <div>
        <h2>Vacation With Family</h2>
    </div>
    <div class="row gap-4 align-items-center">
        @foreach ($lists as $list)
            @if ($list->count())
                <div class="card">
                    <div class="incard">
                        @if ($list->image)
                            <img src="{{ asset('storage/' . $list->image) }}" class="image img-fluid z-index-1 rounded-4" style="width: 30rem; height: 15rem;" alt="">
                        @else
                            <img src="https://source.unsplash.com/1200x800/?hotel,villa" class="image img-fluid image rounded rounded-4 z-index-1"
                                alt="...">
                        @endif

                        <div class="middle">
                            <div class="text-check"><a href="/detail/{{ $list->slug }}">Check</a></div>
                        </div>
                        <div class="text">
                            <p>{{ $list['title'] }}</p>
                            <p>{{ $list['city'] }} {{ $list['country'] }}</p>
                        </div>
                    </div>
                </div>
            @else
                <p class="text-center fs-4">No Post Found</p>
            @endif
        @endforeach
    </div>
</div>

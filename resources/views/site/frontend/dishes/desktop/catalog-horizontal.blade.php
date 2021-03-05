@foreach ($dishes as $dish)
    <div class="card mb-3 my-border-left-info">
        <div class="row g-0">
            <div class="col-md-3">
                <img src="{{ asset('images/demo/demo2/'.$dish->img) }}" alt="..." class="card-img-top">
                <div class="card-img-overlay">
                    <div class="position-absolute top-0 start-0 p-3">
                        <div class="h2">
                            <span class="badge bg-light text-dark rounded-pill">
                                {{ number_format($dish->price, 0, '', '.') }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card-body">
                    <h5 class="card-title">{{ Str::limit($dish->name, 30) }}</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
@endforeach

{{ $dishes->links() }}

<div class="row row-cols-3 g-3 mb-3">
    @foreach ($dishes as $dish)
        <div class="col">
            <div class="card my-border-bottom-info">
                <img src="{{ asset('images/demo/demo2/'.$dish->img) }}" class="card-img-top" alt="...">
                <div class="card-img-overlay">
                    <div class="position-absolute top-0 end-0 p-3">
                        <div class="h1">
                            <span class="badge bg-light text-dark rounded-pill">
                                {{ number_format($dish->price, 0, '', '.') }}
                            </span>
                        </div>
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item fw-bold">
                        {{ Str::limit($dish->name, 50) }}
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        @lang('Вес (грамм.)')
                        <span class="badge bg-primary rounded-pill">
                            {{ $dish->weight }}
                        </span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        A second list item
                        <span class="badge bg-primary rounded-pill">2</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        A third list item
                        <span class="badge bg-primary rounded-pill">1</span>
                    </li>
                </ul>
            </div>
        </div>
    @endforeach
</div>

{{ $dishes->links() }}

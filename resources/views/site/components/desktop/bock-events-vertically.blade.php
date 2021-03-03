@foreach($events as $key => $event)

    <div class="col">
        <div class="card h-100 shadow-sm my-border-bottom-info">
            <img src="{{ asset('images/demo/demo1/'.$event->img) }}" class="card-img-top" alt="...">

            <div class="card-img-overlay">
                <div class="position-absolute top-0 start-0 p-3">
                    <span class="badge bg-light text-muted">
                        <a href="#" class="text-decoration-none text-muted">
                            {{ $event->type->name }}
                        </a>
                    </span>
                    <br>
                    <span class="badge bg-light text-muted">
                        <a href="#" class="text-decoration-none text-muted">
                            {{ $event->format->name }}
                        </a>
                    </span>
                </div>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    @lang('Цена')
                    <span class="badge bg-primary rounded-pill">
                        {{ number_format(rand(100000, 1000000), 0, '', '.') }}
                        <i class="fas fa-ruble-sign"></i>
                    </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    @lang('Кол-во человек')
                    <span class="badge bg-primary rounded-pill">
                        {{ number_format(rand(1, 10000), 0, '', '.') }}
                        <i class="fas fa-ruble-sign"></i>
                    </span>
                </li>
            </ul>
        </div>
    </div>

@endforeach

@foreach($events as $key => $event)

    <div class="col">
        <div class="card h-100 shadow-sm my-border-bottom-info">
            <a href="#" class="stretched-link" data-bs-toggle="modal"
               data-bs-target="#existMenuModal"
               wire:click="sendParamsToExistMenuModal({{ $event->id }})">
                <img src="{{ asset('images/demo/demo1/'.$event->img) }}" class="card-img-top" alt="...">
            </a>

            <div class="card-img-overlay">
                <div class="position-absolute top-0 start-0 p-3">
                    <span class="badge bg-light text-dark rounded-pill">
                        {{ $event->type->name }}
                    </span>
                    <br>
                    <span class="badge bg-light text-dark rounded-pill">
                        {{ $event->format->name }}
                    </span>
                    <br>
                    <span class="badge bg-light text-dark rounded-pill">
                        {{ $event->style->name }}
                    </span>
                </div>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    @lang('Цена')
                    <span class="badge bg-primary rounded-pill">
                        {{ number_format($event->price, 0, '', '.') }}
                        <i class="fas fa-ruble-sign"></i>
                    </span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    @lang('Кол-во человек')
                    <span class="badge bg-primary rounded-pill">
                        {{ number_format($event->persons, 0, '', '.') }}
                        <i class="fas fa-ruble-sign"></i>
                    </span>
                </li>
            </ul>
        </div>
    </div>

@endforeach

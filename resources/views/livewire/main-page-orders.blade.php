<div>
    @component('site.components.desktop.bock-header',['header' => 'Мероприятия, которые мы обслуживали'])
        <div class="mt-3 text-muted">
            @lang('Посмотрите проекты которые мы выполнили. Вы также можете посмотреть меню этих проектов - возможно что-то можете взять за основу')
        </div>
    @endcomponent

    <div class="container-xl">
        @foreach($eventTypes as $eventType)
            @php
                $active = 'btn-light';
                $badge = 'bg-secondary';
            @endphp
            @if($eventType->type_id == $selectedTypeId)
                @php
                    $active = 'btn-primary';
                    $badge = 'bg-light text-dark';
                @endphp
            @endif
            <button type="button" class="btn m-1 {{ $active }}"
                    wire:click="selectEventType({{ $eventType->type_id }})">
                {{ $eventType->type->name }}
                <span class="badge {{ $badge }} rounded-pill">{{ number_format($eventType->count, 0, '', '.') }}</span>
            </button>
        @endforeach

        <div wire:loading>
            <button class="btn btn-light" type="button">
                <span class="spinner-grow spinner-grow-sm text-primary" role="status" aria-hidden="true"></span>
            </button>
        </div>

        <div class="row row-cols-md-4 g-3 mt-3">
            @include('site.components.desktop.bock-events-vertically', ['events' => $events])
        </div>

    </div>

</div>

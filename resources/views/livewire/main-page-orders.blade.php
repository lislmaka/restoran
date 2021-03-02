<div>
    @component('site.components.desktop.bock-header',['header' => 'Мероприятия, которые мы обслуживали'])
        <div class="mt-3 text-muted">
            @lang('')
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

        <div class="card mt-3">
            <div class="card-body">
                This is some text within a card body. {{ $selectedTypeId }}
            </div>
        </div>

    </div>

</div>

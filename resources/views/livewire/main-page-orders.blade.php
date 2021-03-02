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
            @endphp
            @if($loop->first)
                @php
                    $active = 'btn-primary';
                @endphp
            @endif
            <button type="button" class="btn m-1 {{ $active }}">
                {{ $eventType->type->name }}
                <span class="badge bg-secondary">{{ number_format($eventType->count, 0, '', '.') }}</span>
            </button>
        @endforeach

        <div class="card mt-3">
            <div class="card-body">
                This is some text within a card body.
            </div>
        </div>

    </div>

</div>

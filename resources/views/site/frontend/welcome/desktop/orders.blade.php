@component('site.components.desktop.bock-header',['header' => 'Мероприятия, которые мы обслуживали'])
    <div class="mt-3 text-muted">
        @lang('')
    </div>
@endcomponent

@php
    $testArray = [
    'Вечеринка',
    'Выставка',
    'Деловой завтрак',
    'Деловой обед',
    'День рождения',
    'Детский праздник',
    'Конференция',
    'Корпоратив',
    'Свадьба',
    'Юбилей',
];
@endphp

<div class="container-xl">
    @foreach($testArray as $test)
        @php
            $active = 'btn-light';
        @endphp
        @if($loop->first)
            @php
                $active = 'btn-primary';
            @endphp
        @endif
        <button type="button" class="btn m-1 {{ $active }}">
            {{ $test }}
            <span class="badge bg-secondary">{{ number_format(rand(1000, 10000), 0, '', '.') }}</span>
        </button>
    @endforeach

    <div class="card mt-3">
        <div class="card-body">
            This is some text within a card body.
        </div>
    </div>

</div>

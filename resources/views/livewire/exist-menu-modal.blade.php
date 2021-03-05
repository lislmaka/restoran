<div class="modal-content">
    <div class="modal-header bg-secondary text-white">
        <div class="modal-title lead fw-bold" id="existMenuModalLabel">
            @if($eventId)
                @lang('Тип')
                <span class="badge bg-light text-muted rounded-pill">{{ $event->type->name }}</span>
                , @lang('формат')
                <span class="badge bg-light text-muted rounded-pill">{{ $event->format->name }}</span>
                , @lang('кол-во человек')
                <span class="badge bg-light text-muted rounded-pill">{{ number_format(rand(10, 100), 0, '', '.') }}</span>
                , @lang('цена')
                <span class="badge bg-light text-muted rounded-pill">{{ number_format(rand(10000, 100000), 0, '', '.') }}</span>
            @endif
            <div wire:loading>
                <span class="badge bg-warning text-dark ms-3 rounded-pill">
                    <span class="spinner-grow spinner-grow-sm text-primary" role="status" aria-hidden="true"></span>
                    @lang('Идет обновление...')
                </span>
            </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        ddd
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('Закрыть')</button>
    </div>
</div>


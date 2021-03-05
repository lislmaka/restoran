<div class="modal-content">
    <div class="modal-header bg-secondary text-white">
        <div class="modal-title lead fw-bold" id="existMenuModalLabel">
            @if($eventId)
                @lang('Готовое меню')
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
        @if($eventId)
            <div class="row">
                <div class="col-8">
                    <div class="alert alert-warning" role="alert">
                        Вы можете заказать данное меню как есть либо взять его за основу для своего нового меню. Скопируйте меню и отредактируйте согласно ваших пожеланий
                    </div>
                    <div class="alert alert-warning" role="alert">
                        Вы можете обратиться в службу поддержки и наши сотрудники помогут вам составить правильное меню согласно ваших пожеланий. Это быстро и бесплатно!
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-header lead fw-bold">
                            @lang('Информация по меню')
                            <div wire:loading>
                                <button class="btn btn-sm btn-light" type="button">
                                    <span class="spinner-grow spinner-grow-sm text-primary" role="status" aria-hidden="true"></span>
                                </button>
                            </div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                @lang('Тип')
                                <span class="badge bg-primary rounded-pill">{{ $event->type->name }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                @lang('Формат')
                                <span class="badge bg-primary rounded-pill">{{ $event->format->name }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                @lang('Стиль')
                                <span class="badge bg-primary rounded-pill">{{ $event->style->name }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                @lang('Кол-во человек')
                                <span
                                    class="badge bg-primary rounded-pill">{{ number_format($event->persons, 0, '', '.') }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                @lang('Блюд в меню (шт.)')
                                <span class="badge bg-primary rounded-pill">{{ number_format(rand(10, 100), 0, '', '.') }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                @lang('Вес блюд по меню (грамм)')
                                <span class="badge bg-primary rounded-pill">{{ number_format(rand(100, 10000), 0, '', '.') }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                @lang('Цена на 1-го чел. (руб.)')
                                <span class="badge bg-primary rounded-pill">{{ number_format(floor($event->price / $event->persons), 0, '', '.') }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    @lang('Еды на 1-го чел. (грамм)')
                                </div>
                                <span class="badge bg-primary rounded-pill">{{ number_format(floor(rand(100, 10000) / $event->persons), 0, '', '.') }}</span>
                            </li>

                            <li class="list-group-item list-group-item-primary d-flex justify-content-between align-items-center">
                                <div class="fw-bold">
                                    @lang('Итоговая стоимость')
                                </div>
                                <span
                                    class="badge bg-primary rounded-pill">{{ number_format($event->price, 0, '', '.') }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        @else
        @endif
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">@lang('Скопировать меню')</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('Скачать меню в формате Excel')</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('Закрыть')</button>
    </div>
</div>


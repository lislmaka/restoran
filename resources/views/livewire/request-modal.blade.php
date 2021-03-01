<div class="modal-content">
    <div class="modal-header bg-secondary text-white">
        <div class="modal-title lead fw-bold" id="helpModalLabel">
            @lang('Заявка на составление меню')
            <span class="badge bg-danger rounded-pill">@lang('бесплатно')</span>
            <div wire:loading>
                <span class="badge bg-light text-muted ms-3 rounded-pill">
                    <span class="spinner-grow spinner-grow-sm text-primary" role="status" aria-hidden="true"></span>
                    @lang('Идет обновление...')
                </span>

            </div>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        @if($isOrderCreated)
            <div class="alert alert-light" role="alert">
                <div class="h2 alert-heading">
                    &#128578; Заявка успешно отправлена!
                    Номер вашей заявки <span class="badge bg-success rounded-pill">{{ $orderNumber }}</span>
                </div>

                <div class="h4 alert-heading">
                    Что будет дальше...
                </div>

                <div class="my-3 lead">
                    <span class="badge bg-secondary rounded-pill">1</span>
                    Если у нас возникнут вопросы, то наш сотрудник свяжется с вами для уточнения необходимых деталей по
                    вашему заказу. Это необходимо для того что-бы правильно составить меню
                </div>

                <div class="my-3 lead">
                    <span class="badge bg-secondary rounded-pill">2</span>
                    В течении 1 часа вы получите полностью готовое меню согласно указанных вами
                    пожеланий. Всю необходимую информацию вы получите на e-mail, который вы указали при оформлении
                    заявки
                </div>

                <div class="my-3 lead">
                    <span class="badge bg-secondary rounded-pill">3</span>
                    Если вас устроит наше предложение то мы с радостью выполним ваш заказ
                </div>
            </div>
        @else
            <div class="row mb-3">
                <div class="col">
                    <label for="eventType" class="form-label fw-bold text-muted">@lang('Тип мероприятия')</label>
                    <select class="form-select" id="eventType"
                            wire:model="eventTypeSelected">
                        <option value="0">@lang('Тип мероприятия')</option>
                        @foreach($eventTypes as $eventType)
                            @php
                                $selected = '';
                            @endphp
                            @if($eventType->id == $eventTypeSelected)
                                $selected = 'selected';
                            @endif
                            <option {{ $selected }} value="{{ $eventType->id }}">{{ $eventType->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label for="eventFormat" class="form-label fw-bold text-muted">@lang('Формат мероприятия')</label>
                    <select class="form-select" id="eventFormat"
                            wire:model="eventFormatSelected">
                        <option value="0">@lang('Формат мероприятия')</option>
                        @foreach($eventFormats as $eventFormat)
                            @php
                                $selected = '';
                            @endphp
                            @if($eventFormat->id == $eventFormatSelected)
                                $selected = 'selected';
                            @endif
                            <option {{ $selected }} value="{{ $eventFormat->id }}">{{ $eventFormat->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label for="eventStyle" class="form-label fw-bold text-muted">@lang('Общие требование')</label>
                    <select class="form-select" id="eventStyle"
                            wire:model="eventStyleSelected">
                        <option value="0">@lang('Общие требование')</option>
                        @foreach($eventStyles as $eventStyle)
                            @php
                                $selected = '';
                            @endphp
                            @if($eventStyle->id == $eventStyleSelected)
                                $selected = 'selected';
                            @endif
                            <option {{ $selected }} value="{{ $eventStyle->id }}">{{ $eventStyle->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="budget" class="form-label fw-bold text-muted">
                        @lang('Бюджет мероприятия')
                    </label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="10000" id="budget"
                               wire:model="budget">
                        <span class="input-group-text">@lang('руб.')</span>
                    </div>
                </div>
                <div class="col">
                    <label for="countOfPeoples" class="form-label fw-bold text-muted">
                        @lang('Кол-во человек')
                    </label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="10" id="countOfPeoples"
                               wire:model="countOfPeoples">
                        <span class="input-group-text">@lang('чел.')</span>
                    </div>
                </div>
                <div class="col">
                    <label class="form-label fw-bold text-muted">
                        @lang('Способ доставки')
                    </label>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="eventDeliveryYes" value="1" checked
                               wire:model="eventDelivery">
                        <label class="form-check-label" for="eventDeliveryYes">
                            @lang('Нужна доставка')
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="eventDeliveryNo" value="0"
                               wire:model="eventDelivery">
                        <label class="form-check-label" for="eventDeliveryNo">
                            @lang('Самовывоз')
                        </label>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <div class="mb-3">
                        <label for="eventOptions"
                               class="form-label fw-bold text-muted">@lang('Дополнительные опции по заказу')</label>
                        <div class="small text-muted">
                            Не переживайте если вы не знаете что именно вам будет нужно. Наш сотрудник поможет вам определиться с выбором
                        </div>
                    </div>
                    @foreach($eventOptions as $eventOption)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="eventOptions_{{ $eventOption->id }}" value="{{ $eventOption->id }}"
                            wire:model="eventOptionsSelected">
                            <label class="form-check-label" for="eventOptions_{{ $eventOption->id }}">{{ $eventOption->name }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="eventDate" class="form-label fw-bold text-muted">
                        @lang('Дата мероприятия')
                    </label>
                    <input type="date" class="form-control" id="eventDate"
                           wire:model="eventDate">
                </div>
                <div class="col">
                    <label for="eventTime" class="form-label fw-bold text-muted">
                        @lang('Начало мероприятия')
                    </label>
                    <input type="time" class="form-control" id="eventTime"
                           wire:model="eventTime">
                </div>
                <div class="col">

                </div>
            </div>
            @if($eventDelivery)
                <div class="row mb-3">
                    <div class="col">
                        <label for="eventAddress" class="form-label fw-bold text-muted">
                            @lang('Адрес мероприятия')
                        </label>
                        <input type="text" class="form-control" id="eventAddress"
                               wire:model="eventAddress">
                    </div>
                </div>
            @else

            @endif
            <div class="row mb-3">
                <div class="col">
                    <label for="eventDescription" class="form-label fw-bold text-muted">
                        @lang('Ваши пожелания к заказу')
                    </label>
                    <textarea class="form-control" id="eventDescription" rows="3"
                              wire:model="eventDescription"></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="eventOwnerName" class="form-label fw-bold text-muted">
                        @lang('Ваше имя')
                        <span class="badge bg-light rounded-pill text-danger">*</span>
                    </label>
                    <input type="text" class="form-control" id="eventOwnerName"
                           wire:model="eventOwnerName">
                </div>
                <div class="col">
                    <label for="eventOwnerPhone" class="form-label fw-bold text-muted">
                        @lang('Телефон')
                        <span class="badge bg-light rounded-pill text-danger">*</span>
                    </label>
                    <input type="text" class="form-control" id="eventOwnerPhone"
                           wire:model="eventOwnerPhone">
                </div>
                <div class="col">
                    <label for="eventOwnerEmail" class="form-label fw-bold text-muted">
                        @lang('E-Mail')
                        <span class="badge bg-light rounded-pill text-danger">*</span>
                    </label>
                    <input type="text" class="form-control" id="eventOwnerEmail"
                           wire:model="eventOwnerEmail">
                </div>
            </div>
        @endif
    </div>
    @if($isOrderCreated)
        <div class="modal-footer bg-light">
            <button type="button" class="btn btn-lg btn-secondary" data-bs-dismiss="modal">
                @lang('Закрыть')
            </button>
        </div>
    @else
        <div class="modal-footer bg-light">
            <button type="button" class="btn btn-lg btn-primary"
                    wire:click="createOrder">
                @lang('Получить меню бесплатно')
            </button>
        </div>
    @endif
</div>

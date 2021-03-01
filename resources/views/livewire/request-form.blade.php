<div class="card border-light shadow-lg">
    <div class="card-header lead fw-bold">
        @lang('Узнать состав и стоимость меню')
        <span class="badge bg-danger rounded-pill">@lang('бесплатно')</span>
    </div>
    <div class="card-body">
        <form>
            <div class="mb-3">
                <label for="eventType" class="form-label fw-bold text-muted">
                    @lang('Тип мероприятия')
                </label>
                <select class="form-select" id="eventType"
                        wire:model="eventTypeSelected"
                        wire:click="setSessionEventTypeSelected">
                    <option value="0">@lang('Выберите тип мероприятия')</option>
                    @foreach($eventTypes as $eventType)
                        <option value="{{ $eventType->id }}">{{ $eventType->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="eventFormat" class="form-label fw-bold text-muted">
                    @lang('Формат мероприятия')
                </label>
                <select class="form-select" id="eventFormat"
                        wire:model="eventFormatSelected"
                        wire:click="setSessionEventFormatSelected">
                    <option value="0">@lang('Выберите формат мероприятия')</option>
                    @foreach($eventFormats as $eventFormat)
                        <option value="{{ $eventFormat->id }}">{{ $eventFormat->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="text-center">
                <button type="button" class="btn btn-lg btn-primary" data-bs-toggle="modal"
                        data-bs-target="#requestModal"
                        wire:click="requestSendParamsToModal">
                    @lang('Получить меню бесплатно')
                </button>
            </div>
        </form>
    </div>
</div>

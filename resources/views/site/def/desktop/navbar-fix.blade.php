<div class="container-xxl">
    <div class="row">
        <div class="col-11 d-flex justify-content-start align-items-center p-2">

            <div class="lead">
                <span class="badge bg-transparent text-muted me-3">{{ config('site.site_phone') }}</span>
            </div>

            <div class="lead">
                <span class="badge bg-transparent text-muted me-3">{{ config('site.site_work_time') }}</span>
            </div>

            <div class="lead">
                <span class="badge bg-transparent text-muted me-3">{{ config('site.site_email') }}</span>
            </div>

            <a class="btn btn-primary" href="#" role="button">@lang('Бесплатный расчет меню')</a>
        </div>
        <div class="col-1 d-flex justify-content-end align-items-center">
            @guest
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-light text-muted" href="{{ route('login') }}" role="button">
                        @lang('Вход')
                    </a>
{{--                    @if(Route::has('register'))--}}
{{--                        <a class="btn btn-light" href="{{ route('register') }}" role="button">--}}
{{--                            @lang('Регистрация')--}}
{{--                        </a>--}}
{{--                    @endif--}}
                </div>
            @else
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-primary" href="{{ route('logout') }}" role="button">
                        @lang('Выход')
                    </a>
                </div>
            @endguest
        </div>
    </div>
</div>


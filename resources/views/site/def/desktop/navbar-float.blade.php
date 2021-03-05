<nav class="navbar navbar-expand-md navbar-light bg-white lead">
    <div class="container-xxl">
        <a class="navbar-brand" href="{{ url('/') }}">
            <span class="h2 fw-bold">
                <span class="badge bg-light text-muted">
                    <i class="fas fa-globe"></i>
                    {{ config('app.name') }}
                </span>
            </span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                {{-- Begin dishes --}}
                @if( Route::current()->getName() == 'dishes.index' )
                    <li class="nav-item">
                        <a class="nav-link fw-bold active" href="{{ route('dishes.index') }}" title="@lang('Блюда')">
                            @lang('Блюда')
                        </a>
                    </li>
                @else
                    <li class="nav-item fw-normal">
                        <a class="nav-link" href="{{ route('dishes.index') }}" title="@lang('Блюда')">
                            @lang('Блюда')
                        </a>
                    </li>
                @endif
                {{-- End dishes --}}

                {{-- Begin --}}
                <li class="nav-item fw-normal">
                    <a class="nav-link" href="#" title="@lang('Готовые меню')">
                        @lang('Готовые меню')
                    </a>
                </li>
                {{-- End --}}

                {{-- Begin --}}
                <li class="nav-item fw-normal dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        @lang('Информация')
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">@lang('Доставка и оплата')</a></li>
                        <li><a class="dropdown-item" href="#">@lang('Перечень наших услуг')</a></li>
                        <li><a class="dropdown-item" href="#">
                                @lang('Скидки и акции')
                                <span class="badge bg-danger">Скидки</span>
                            </a>
                        </li>
                        <li><a class="dropdown-item" href="#">@lang('Выполненные работы')</a></li>
                        <li><a class="dropdown-item" href="#">@lang('Блог компании')</a></li>
                    </ul>
                </li>
                {{-- End --}}

                {{-- Begin --}}
                <li class="nav-item fw-normal">
                    <a class="nav-link" href="#" title="@lang('Контакты')">
                        @lang('Контакты')
                    </a>
                </li>
                {{-- End --}}

            </ul>
        </div>

        {{-- Begin --}}
        <div class="btn-group">
            <button type="button" class="btn btn-danger">
                @lang('Ваше меню')
                <span class="badge bg-light text-dark rounded-pill">4</span>
            </button>
            <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" id="dropdownMenuReference" data-bs-toggle="dropdown" aria-expanded="false" data-bs-reference="parent">
                <span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuReference">
                <li><a class="dropdown-item" href="#">@lang('Посмотреть меню')</a></li>
                <li><a class="dropdown-item" href="#">@lang('Заказать меню')</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">@lang('Подобрать меню автоматически')</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">@lang('Версия для печати')</a></li>
                <li><a class="dropdown-item" href="#">@lang('Экспорт меню в Excel')</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">@lang('Удалить меню')</a></li>
            </ul>
        </div>
        {{-- End --}}
    </div>
</nav>

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

                {{-- Begin events --}}
                <li class="nav-item fw-normal">
                    <a class="nav-link" href="#" title="Каталог">
                        @lang('Каталог')
                    </a>
                </li>
                {{-- End events --}}

                {{-- Begin --}}
                <li class="nav-item fw-normal">
                    <a class="nav-link" href="#" title="@lang('Авторы туров')">
                        @lang('Авторы туров')
                    </a>
                </li>
                {{-- End --}}

            </ul>

            @guest
                <div class="btn-group" role="group" aria-label="Basic example">
                    <a class="btn btn-primary" href="{{ route('login') }}" role="button">
                        @lang('Вход')
                    </a>
                    @if(Route::has('register'))
                        <a class="btn btn-light" href="{{ route('register') }}" role="button">
                            @lang('Регистрация')
                        </a>
                    @endif
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
</nav>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{--  favicon  --}}

    {{--  CSRF Token  --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="{{ $description ?? '' }}">

    <title>{{ $title ?? '' }}</title>


    {{--  Scripts  --}}
    <script src="{{ asset(mix('js/app.js')) }}" defer></script>

    {{--  Styles  --}}
    <link href="{{ asset(mix('css/app.css')) }}" rel="stylesheet">

    @stack('scripts')
</head>

<body>
<div id="app">

    @section('navbar-fix')
        @includeIf('site.def.desktop.navbar-fix')
    @show

    <div class="shadow-sm sticky-top">
        @section('navbar-float')
            @includeIf('site.def.desktop.navbar-float')
        @show
    </div>

    @yield('content')

    @if ($userAgent->isDesktop())
        @includeIf('site.def.desktop.footer')
        @includeIf('site.def.desktop.company')
        @includeIf('site.def.desktop.modals.modal_request')
    @endif

    @if ($userAgent->isMobile())
{{--        @includeIf('site.def.mobile.footer')--}}
        @includeIf('site.def.mobile.company')
    @endif

</div>
</body>

</html>

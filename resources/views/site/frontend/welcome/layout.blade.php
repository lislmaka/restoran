@extends('layouts.app')

@section('content')
    {{-- Begin Desktop --}}
    @if ($userAgent->isDesktop())
        <div class="d-none d-md-block">
            @includeIf('site.frontend.welcome.desktop.main-banner')
            @includeIf('site.frontend.welcome.desktop.covid19')
            @includeIf('site.frontend.welcome.desktop.benefits')
            @includeIf('site.frontend.welcome.desktop.action')

            @includeIf('site.frontend.welcome.desktop.orders')
        </div>
    @endif
    {{-- End Desktop --}}

    {{-- Begin Mobile --}}
    @if ($userAgent->isMobile())
        <div class="d-block d-md-none">
            @includeIf('site.frontend.welcome.mobile.main-banner')
            @includeIf('site.frontend.welcome.mobile.discount')
            @includeIf('site.frontend.welcome.mobile.benefits')
        </div>
    @endif
    {{-- End Mobile --}}
@endsection

@if ($userAgent->isDesktop())
    @push('scripts')
{{--        <livewire:styles />--}}
{{--        <livewire:scripts />--}}
        @livewireStyles
        @livewireScripts
    @endpush
@endif

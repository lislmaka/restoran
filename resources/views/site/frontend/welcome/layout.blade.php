@extends('layouts.app')

@section('content')
    {{-- Begin Desktop --}}
    @if ($userAgent->isDesktop())
        <div class="d-none d-md-block">
            @includeIf('site.frontend.welcome.desktop.main-banner')
            @includeIf('site.frontend.welcome.desktop.discount')
            @includeIf('site.frontend.welcome.desktop.benefits')
            @includeIf('site.frontend.welcome.desktop.popular-countries')
            @includeIf('site.frontend.welcome.desktop.popular-cities')
            @includeIf('site.frontend.welcome.desktop.popular-categories')
            @includeIf('site.frontend.welcome.desktop.reviews')
            @includeIf('site.frontend.welcome.desktop.map')
        </div>
    @endif
    {{-- End Desktop --}}

    {{-- Begin Mobile --}}
    @if ($userAgent->isMobile())
        <div class="d-block d-md-none">
            @includeIf('site.frontend.welcome.mobile.main-banner')
            @includeIf('site.frontend.welcome.mobile.discount')
            @includeIf('site.frontend.welcome.mobile.benefits')
            @includeIf('site.frontend.welcome.mobile.popular-countries')
            @includeIf('site.frontend.welcome.mobile.popular-cities')
            @includeIf('site.frontend.welcome.mobile.popular-categories')
{{--            @includeIf('site.frontend.welcome.mobile.reviews')--}}
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

@extends('layouts.app')

@section('content')
    {{-- Begin Desktop --}}
    @if ($userAgent->isDesktop())
        <div class="container-xxl">
            <div class="d-none d-md-block">
                @includeIf('site.def.desktop.breadcrumb')

                <div class="row">
                    <div class="col-md-9">
                        @includeIf('site.frontend.dishes.desktop.catalog-'.$catalogViewType)
                    </div>
                    <div class="col-md-3">
                        @includeIf('site.frontend.dishes.desktop.search')
                    </div>
                </div>
            </div>
        </div>
    @endif
    {{-- End Desktop --}}

    {{-- Begin Mobile --}}
    @if ($userAgent->isMobile())
        <div class="d-block d-md-none">
            @includeIf('site.def.mobile.breadcrumb')

            <div class="row">
                <div class="col-md-3">
                    @includeIf('site.frontend.dishes.mobile.search')
                </div>
                <div class="col-md-9">
                    @includeIf('site.frontend.dishes.mobile.catalog')
                </div>
            </div>
        </div>
    @endif
    {{-- End Mobile --}}
@endsection

@if ($userAgent->isDesktop())
    @push('scripts')
        @livewireStyles
        @livewireScripts
    @endpush
@endif

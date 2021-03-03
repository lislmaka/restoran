@extends('layouts.app')

@section('content')
    {{-- Begin Desktop --}}
    @if ($userAgent->isDesktop())
        <div class="container-xxl">
            <div class="d-none d-md-block">
                @includeIf('site.def.desktop.breadcrumb')

                <div class="row">
                    <div class="col-md-9">
                        @includeIf('site.frontend.pages.desktop.page-info')
                    </div>
                    <div class="col-md-3">
                        @includeIf('site.frontend.pages.desktop.menu-pages')
                        @includeIf('site.frontend.pages.desktop.menu-categories')
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
                    @includeIf('site.frontend.pages.mobile.menu_pages')
                    @includeIf('site.frontend.pages.mobile.menu_categories')
                </div>
                <div class="col-md-9">
                    @includeIf('site.frontend.pages.mobile.page_info')
                </div>
            </div>
        </div>
    @endif
    {{-- End Mobile --}}
@endsection


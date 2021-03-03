<div class="container-fluid bg-dark mt-5">
    <div class="container-xxl py-3">
        <div class="row">

            @for ($columnNumber = 1; $columnNumber <= 3; $columnNumber++)
                <div class="col-md-4">
                    @foreach($footerPageCategories as $pageCategory)
                        @if($pageCategory->column != $columnNumber)
                            @continue
                        @endif

                        <div class="card bg-transparent border-0 text-white">
                            <div class="card-header h5 fw-bold bg-transparent">
                                <a href="{{ url($pageCategory->url) }}" class="text-white text-decoration-none"
                                   title="@lang($pageCategory->name)">
                                    {{Str::upper(__($pageCategory->name))}}
                                </a>
                            </div>
                            <ul class="list-group list-group-flush">

                                @foreach($footerPages as $page)

                                    @if($page->page_category_id == $pageCategory->id)

                                        <li class="list-group-item bg-transparent">
                                            <a href="{{ route('pages.index', ['page_category' => $pageCategory->url, 'page_info' => $page->slug]) }}"
                                               class="text-white text-decoration-none" title="{{ $page->title }}">
                                                {{ Str::limit($page->title, 35) }}
                                            </a>
                                        </li>
                                    @endif

                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>
            @endfor
        </div>
    </div>
</div>

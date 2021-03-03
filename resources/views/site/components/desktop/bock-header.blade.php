<div class="mt-5">&nbsp;</div>

<div class="container-fluid">
    <div class="container-xl">
        <div class="row my-5">
            <div class="col-9">
                <h2 class="h2 fw-bold">
                    @lang($header)

                    <div wire:loading>
                        <div class="spinner-grow text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </div>

                </h2>

                {{$slot}}
            </div>
            <div class="col-3">

            </div>
        </div>
    </div>
</div>

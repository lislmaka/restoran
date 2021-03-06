<div class="container-xxl py-3">
    <div class="row">
        <div class="col-md-9">
            <div class="font-weight-normal text-center">
                &copy; {{ Config::get('app.name') }}, 2019 - {{ now()->year }} /
                {{ config('site.site_phone') }} /
                {{ config('site.site_email') }} /
                v{{ Illuminate\Foundation\Application::VERSION }}
                <br>
                @lang('Информация, размещенная на сайте, не является публичной офертой')
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-transparent border-0 mt-3">
                <div class="card-body m-0 p-0 d-flex align-self-center">
                    <a href="#"><i class="fab fa-vk h1 me-3 text-primary"></i></a>
                    <a href="#"><i class="fab fa-facebook h1 me-3 text-primary"></i></a>
                    <a href="#"><i class="fab fa-instagram h1 me-3 text-primary"></i></a>
                    <a href="#"><i class="fab fa-telegram-plane h1 me-3 text-primary"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>


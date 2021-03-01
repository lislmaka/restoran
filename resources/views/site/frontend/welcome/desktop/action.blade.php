<div class="container-fluid bg-success my-5">
    <div class="container-xl py-3">
        <div class="row">
            <div class="col-md-9 py-3 d-flex align-content-center flex-wrap">
                <div class="h2 fw-bold text-white">
                    @lang('Не можете сами составить меню?<br>Мы составим для вас меню в течении 1 часа')
                </div>
                <div class="text-white">
                    @lang('Вы получите готовое меню в формате Excel со всеми необходимыми данными по весу, цене и кол-ву блюд, исходя из ваших пожеланий. Это совершенно бесплатно и ни к чему вас не обязывает')
                </div>
            </div>

            <div class="col-md-3 py-3 d-flex align-items-center justify-content-center">
{{--                @include('site.components.desktop.button',['btn_1_title' => 'Бесплатный расчет', 'btn_1_url' => '', 'btn_style' => 'btn-light'])--}}
                <a class="btn btn-lg btn-light" href="#" role="button" data-bs-toggle="modal" data-bs-target="#requestModal">
                    &#129395;
                    @lang('Бесплатный расчет меню')
                </a>
            </div>

        </div>
    </div>
</div>

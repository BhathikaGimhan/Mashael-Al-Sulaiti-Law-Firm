<section class="pt-lg-5 pb-5 px-xxl-5">
    <div class="container-fluid px-xxl-5 px-lg-5">
        <div class="row pt-lg-5 pb-5" style="background-color: #80808012;">
            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="800" data-aos-offset="180"
                data-disable-parallax-down="md">
                <div class="px-3">
                    <div class="title-top-bar mt-4"></div>
                    {{-- <p class="fw-bold text-uppercase fs-lg mb-3 mt-4">Strategic Vision</p> --}}
                    <h1 class="logo-red mt-0 mb-5">{{ __('title.strategy') }}</h1>
                    <div class="strategy">
                        {!! trans('home.strategy.sideContent') !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-6 my-auto">

                <div class="circle2">
                    <ul class="circleWrapper wStyle2">
                        <li>
                            <div class="circleFeature fStyle2" data-cyrcleBox="cf1"
                                style="background-color: #800000; color:white"><span
                                    class="fa fa-comments fa-2x"></span></div>
                            <div class="circleBox innerStyle2" id="cf1">
                                <i class="fa fa-comments fa-2x d-none d-lg-block"
                                    style="font-size:60px; color:black"></i><br>
                                {!! trans('home.strategy.wheelContentOne') !!}
                            </div>
                        </li>
                        <li>
                            <div class="circleFeature fStyle2" data-cyrcleBox="cf6"
                                style="background-color: #800000; color:white"><span class="ai-layer fa-2x"></span>
                            </div>
                            <div class="circleBox innerStyle2" id="cf6">
                                <i class="ai-layer fa-2x d-none d-lg-block" style="font-size:60px; color:black"></i><br>
                                {!! trans('home.strategy.wheelContentTwo') !!}
                            </div>
                        </li>
                        <li>
                            <div class="circleFeature fStyle2" data-cyrcleBox="cf3"
                                style="background-color: #800000; color:white"><span
                                    class="fa fa-suitcase fa-2x"></span>
                            </div>
                            <div class="circleBox innerStyle2" id="cf3">
                                <i class="fa fa-suitcase fa-2x d-none d-lg-block"
                                    style="font-size:60px; color:black"></i><br>
                                {!! trans('home.strategy.wheelContentThree') !!}
                            </div>
                        </li>
                        <li>
                            <div class="circleFeature fStyle2" data-cyrcleBox="cf4"
                                style="background-color: #800000; color:white"><span
                                    class="fa fa-university fa-2x"></span>
                            </div>
                            <div class="circleBox innerStyle2" id="cf4">
                                <i class="fa fa-university fa-2x d-none d-lg-block"
                                    style="font-size:60px; color:black"></i><br>
                                {!! trans('home.strategy.wheelContentFour') !!}
                            </div>
                        </li>
                        <li>
                            <div class="circleFeature fStyle2" data-cyrcleBox="cf5"
                                style="background-color: #800000; color:white"><span class="fa fa-gavel fa-2x"></span>
                            </div>
                            <div class="circleBox innerStyle2" id="cf5">
                                <i class="fa fa-gavel fa-2x d-none d-lg-block"
                                    style="font-size:60px; color:black"></i><br>
                                {!! trans('home.strategy.wheelContentFive') !!}
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

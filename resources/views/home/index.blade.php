@extends('template.layout')

@section('content')

<section class="whyneed">
    <div class="container">
        <h2 class="block__header">{{ __('home.benefit.header1') }} <b><a href="{{ route('page.software') }}">{{ __('home.benefit.header2') }}</a></b> {{ __('home.benefit.header3') }}</h2>  
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col--hidden-ipad">
                <div class="whyneed__img">
                    <img src="{{ asset('imgs/img-home1.png') }}" alt="{{ $HEADER['metaTitle'] }}" title="{{ $HEADER['metaTitle'] }}" class="img-fluid">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col--12-ipad">
                <div class="wow slideInRight" data-wow-duration=".3s">
                    <div class="whyneed__param">
                        <h3>{{ __('home.benefit.title1') }}</h3>
                        <p>{{ __('home.benefit.desc1') }}</p>
                    </div>
                    <div class="whyneed__param">
                        <h3>{{ __('home.benefit.title2') }}</h3>
                        <p>{{ __('home.benefit.desc2') }}</p>
                    </div>
                    <div class="whyneed__param">
                        <h3>{{ __('home.benefit.title3') }}</h3>
                        <p>{{ __('home.benefit.desc3') }}</p>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</section>

<section class="whychose">
    <div class="container">
        <h2 class="block__header">{{ __('home.why.header') }} <b>?</b></h2>  
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col--12-ipad">
                <div class="whychose__content wow slideInLeft" data-wow-duration=".3s">
                    <p>{{ __('home.why.desc1') }}</p>
                    <p>{{ __('home.why.desc2') }}</p>
                    <a href="" class="btn--reg" data-toggle="modal" data-target="#modal--register">{{ __('home.why.register') }}</a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col--hidden-ipad">
                <div class="whychose__img">
                    <img src="{{ asset('imgs/img-home2.png') }}" class="img-fluid" title="{{ $HEADER['metaTitle'] }}" alt="{{ $HEADER['metaTitle'] }}">
                </div>   
            </div>
        </div>
    </div>
</section>

<section class="avecosystem">
    <div class="container">
        <h2 class="block__header">{{ __('home.ecosys.header') }} <b>?</b></h2>  
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 col--hidden-ipad">
                <div class="avecosystem__img">
                    <img src="{{ asset('imgs/img-home3.png') }}" class="img-fluid" title="{{ $HEADER['metaTitle'] }}" alt="{{ $HEADER['metaTitle'] }}">
                </div> 
            </div>
            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 col--12-ipad">
                <div class="avecosystem__content">
                    <div class="avecosystem__param wow slideInRight" data-wow-duration=".3s">
                        <div class="avecosystem__param__icon"><div class="icon-icon1"></div></div>
                        <div>
                            <h3>{{ __('home.ecosys.title1') }}</h3>
                            <p>{{ __('home.ecosys.desc1') }}</p>
                        </div>
                    </div>
                    <div class="avecosystem__param wow slideInRight" data-wow-duration=".3s">
                        <div class="avecosystem__param__icon"><div class="icon-icon2"></div></div>
                        <div>
                            <h3>{{ __('home.ecosys.title2') }}</h3>
                            <p>{{ __('home.ecosys.desc2') }}</p>
                        </div>
                    </div>
                    <div class="avecosystem__param wow slideInRight" data-wow-duration=".3s">
                        <div class="avecosystem__param__icon"><div class="icon-icon3"></div></div>
                        <div>
                            <h3>{{ __('home.ecosys.title3') }}</h3>
                            <p>{{ __('home.ecosys.desc3') }}</p>
                        </div>
                    </div>
                    <div class="avecosystem__param wow slideInRight" data-wow-duration=".3s">
                        <div class="avecosystem__param__icon"><div class="icon-icon4"></div></div>
                        <div>
                            <h3>{{ __('home.ecosys.title4') }}</h3>
                            <p>{{ __('home.ecosys.desc4') }}</p>
                        </div>
                    </div>
                    <div class="avecosystem__param wow slideInRight" data-wow-duration=".3s">
                        <div class="avecosystem__param__icon"><div class="icon-icon5"></div></div>
                        <div>
                            <h3>{{ __('home.ecosys.title5') }}</h3>
                            <p>{{ __('home.ecosys.desc5') }}</p>
                        </div>
                    </div>
                    <div class="avecosystem__param wow slideInRight" data-wow-duration=".3s">
                        <div class="avecosystem__param__icon"><div class="icon-icon6"></div></div>
                        <div>
                            <h3>{{ __('home.ecosys.title6') }}</h3>
                            <p>{{ __('home.ecosys.desc6') }}</p>
                        </div>
                    </div>
                </div>   
            </div>
        </div>
    </div>
</section>

<section class="custommer">
    <div class="container">
        <h2 class="block__header">{{ __('home.customers.header1') }}</h2>  
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div id="js_custommer__carousel" class="custommer__carousel owl-carousel owl-theme">
                    <div class="item">
                        <a href="https://halan.vn/">
                            <img src="https://cdn.anvui.vn/uploadv2/web/36/3692/basicinformation/2020/04/03/05/37/1585892256_1585127434_logohalan.png" class="img-fluid" title="{{ $HEADER['metaTitle'] }}" alt="{{ $HEADER['metaTitle'] }}">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://kumhosamco.com.vn">
                            <img src="https://kumhosamco.com.vn/wp-content/uploads/LOGO-KUMHO-web2.png" class="img-fluid" title="{{ $HEADER['metaTitle'] }}" alt="{{ $HEADER['metaTitle'] }}">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://interbuslines.com/">
                            <img src="{{ asset('imgs/custommer/inter.png') }}" class="img-fluid" title="{{ $HEADER['metaTitle'] }}" alt="{{ $HEADER['metaTitle'] }}">
                        </a>
                    </div>
                    <div class="item">
                        <a href="https://xevulinh.com/">
                            <img src="{{ asset('imgs/custommer/vulinh.png') }}" class="img-fluid" title="{{ $HEADER['metaTitle'] }}" alt="{{ $HEADER['metaTitle'] }}">
                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            <img src="{{ asset('imgs/custommer/hptravel.png') }}" class="img-fluid" title="{{ $HEADER['metaTitle'] }}" alt="{{ $HEADER['metaTitle'] }}">
                        </a>
                    </div>
                    <div class="item">
                        <a href="">
                            <img src="{{ asset('imgs/custommer/anhhuydatcang.png') }}" class="img-fluid" title="{{ $HEADER['metaTitle'] }}" alt="{{ $HEADER['metaTitle'] }}">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="custommerReview" style="margin-top: 80px">
    <div class="container">
    <div class="row">
        <div class="col-12">
            <div class="custommerReview">
                <h2>{{ __('home.customers.header') }} <b>?</b></h2>
                <div id="js_custommerReview" class="custommerReview__carousel owl-carousel owl-theme">
                    <div class="item custommerReview__item">
                        <img src="{{ asset('imgs/review2.png') }}" alt="">
                        <h3>{{ __('home.customers.halan.name') }}</h3>
                        <h4>{{ __('home.customers.halan.pos') }}</h4>
                        <h5><i> "{{ __('home.customers.halan.content') }}"</i></h5>
                    </div>
                    <div class="item custommerReview__item">
                        <img src="{{ asset('imgs/review1.png') }}" alt="">
                        <h3>{{ __('home.customers.inter.name') }}</h3>
                        <h4>{{ __('home.customers.inter.pos') }}</h4>
                        <h5><i> "{{ __('home.customers.inter.content') }}"</i></h5>
                    </div>
                    <div class="item custommerReview__item">
                        <img src="{{ asset('imgs/review3.png') }}" alt="">
                        <h3>{{ __('home.customers.hahai.name') }}</h3>
                        <h4>{{ __('home.customers.hahai.pos') }}</h4>
                        <h5><i> "{{ __('home.customers.hahai.content') }}"</i></h5>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection

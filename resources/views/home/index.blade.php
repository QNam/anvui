@extends('template.layout')
@section('qna')
<script type="application/ld + json">{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"AN VUI hỗ trợ bảo vệ Thương hiệu của Hãng xe thế nào?","acceptedAnswer":{"@type":"Answer","text":"Đây là tiêu chí đầu tiên của AN VUI mong muốn mang đến cho Khách hàng. Chúng tôi cung cấp từ Website,App đều mang <b>thương hiệu riêng</b> của Hãng xe. Các tin nhắn, Email và tổng đài gọi điện cho hành khách đều mang thương hiệu riêng của Hãng xe. Giúp cho Hãng xe của bạn luôn chiếm vị trí cao trên công cụ tìm kiếm và không bị các đối thủ lợi dụng thương hiệu của bạn. AN VUI tuyệt đối không sử dụng thương hiệu của Nhà Xe để tìm cách bán vé thu hoa hồng đồng thời AN VUI còn  tư vấn giúp Nhà xe phương án xây dựng và phát triển thương hiệu riêng của mình."}},{"@type":"Question","name":"AN VUI giúp nhà xe tăng doanh số bán vé bằng cách nào?","acceptedAnswer":{"@type":"Answer","text":"AN VUI không bán vé nhằm đảm bảo tính khách quan và giữ an toàn cho Hãng xe đã tin dùng AN VUI. Hành khách có thể mua vé online trực tiếp từ website của Hãng đồng thời kết nối Hãng xe với hơn : 1,500 Đại lý bán vé online lớn như Bank App, và các siêu App hiện nay trên thị trường… Sẽ giúp hãng xe tăng doanh thu cả online lẫn offline."}},{"@type":"Question","name":"Thông tin của Nhà xe được AN VUI bảo mật như thế nào?","acceptedAnswer":{"@type":"Answer","text":"Ngoài việc cam kết bảo mật thông tin của hãng xe mà AN VUI đã ký kết, AN VUI còn bàn giao tài khoản quản trị độc lập giúp Nhà xe chủ động mọi thao tác trên phần mềm như : Thêm xe, thêm tuyến, Thêm người dùng và chủ động phân quyền đến từng đối tượng.  Dữ liệu được AN VUI backup thường xuyên để đảm bảo hệ thống vận hành ổn định và an toàn."}},{"@type":"Question","name":"Làm thế nào để có thể sử dụng được sản phẩm dịch vụ của AN VUI?","acceptedAnswer":{"@type":"Answer","text":"AN VUI có mặt tại Singapore và tại Việt Nam chúng tôi có mặt tại cả 2 miền Nam, Bắc, đội ngũ tư vấn và triển khai sẽ đến trực tiếp gặp khách hàng để trao đổi và tư vấn những gói phù hợp. Ngoài ra AN VUI có tổng đài tiếp nhận yêu cầu của khách hàng : 024.9999.6666 luôn sẵn sàng để tư vấn cho bạn. Khách hàng khi có nhu cầu sử dụng sản phẩm và dịch vụ của AN VUI có thể đăng ký tư vấn online <a href='https://anvui.vn/#register'><b>tại đây</b><a>"}},{"@type":"Question","name":"Tôi cần biết thêm thông tin về AN VUI thì có những kênh nào để tham khảo?","acceptedAnswer":{"@type":"Answer","text":"Là đơn vị Startup Công Nghệ đầu tiên tại Việt Nam cung cấp giải pháp quản trị tổng thể cho doanh nghiệp Vận tải và đã nhận được hàng loạt giải thưởng như: Startup Việt, Nhân Tài Đất Việt, Sao Khuê… AN VUI cũng là Startup đã nhận được vốn đầu tư của các quỹ danh tiếng như : Vinacapital ventures, Hustle .. Nhưng trước khi lựa chọn AN VUI là đơn vị cung cấp giải pháp Chúng tôi khuyến khích khách hàng tìm hiểu kỹ thông tin về chúng tôi qua hệ thống Báo Chí, Truyền hình hoặc chính những khách hàng đang sử dụng sản phẩm và dịch vụ của AN VUI…  Kênh Youtube của AN VUI: <a href='https://www.youtube.com/channel/UCwH8pqcfHz3tll8JD0UYpwQ'>tại đây</a>"}}]}</script>
@endsection
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
                        <img src="{{ asset('imgs/review2.png') }}" title="{{ $HEADER['metaTitle'] }}" alt="{{ $HEADER['metaTitle'] }}">
                        <h3>{{ __('home.customers.halan.name') }}</h3>
                        <h4>{{ __('home.customers.halan.pos') }}</h4>
                        <h5><i> "{{ __('home.customers.halan.content') }}"</i></h5>
                    </div>
                    <div class="item custommerReview__item">
                        <img src="{{ asset('imgs/review1.png') }}" title="{{ $HEADER['metaTitle'] }}" alt="{{ $HEADER['metaTitle'] }}">
                        <h3>{{ __('home.customers.inter.name') }}</h3>
                        <h4>{{ __('home.customers.inter.pos') }}</h4>
                        <h5><i> "{{ __('home.customers.inter.content') }}"</i></h5>
                    </div>
                    <div class="item custommerReview__item">
                        <img src="{{ asset('imgs/review3.png') }}" title="{{ $HEADER['metaTitle'] }}" alt="{{ $HEADER['metaTitle'] }}">
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

@extends('master')
@section('pageTitle')
Trang chủ
@endsection
@section('content')
    <div id="show-sp-pc">
        <div class="">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @if ($listSlide)
                        @foreach($listSlide as $key => $slide)
                            <li data-target="#myCarousel" data-slide-to="{{ $key }}" class="@if ($key == 0) active @endif"></li>
                        @endforeach
                    @endif
                </ol>
                <div class="carousel-inner">
                    @if ($listSlide)
                        @foreach($listSlide as $key => $slide)
                            <div class="item @if ($key == 0) active @endif">
                                <img src="{{ $slide->link }}" alt="{{ $slide->name }}" style="width: auto; margin-left: auto; margin-right: auto;">
                            </div>
                        @endforeach
                    @endif
                </div>
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <i class="fa fa-chevron-left"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <i class="fa fa-chevron-right"></i>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="container">
            <div id="content" class="space-top-none">
                <div class="main-content">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Lựa chọn phong cách riêng của bạn</h1>
                        </div>
                        <div class="col-sm-12">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                                <ul class="nav nav-tabs nav-type">
                                    <li class="active" style="width: calc(100% / {{ $listCategory->count() + 1 }});"><a data-toggle="tab" href="#all">Tất cả</a></li>
                                    @if ($listCategory)
                                        @foreach($listCategory as $cat)
                                            <li style="width: calc(100% / {{ $listCategory->count() + 1 }});">
                                                <a data-toggle="tab" href="#menu{{$cat->id}}">{{$cat->name}}</a>
                                            </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </div>
                            <div class="col-sm-2"></div>
                            <div class="col-sm-12 row show-sp-pc">
                                <div class="tab-content tabs-content clearfix">
                                    <div id="all" class="tab-pane fade in active">
                                        @if ($listProduct)
                                            @foreach ($listProduct as $new)
                                                <div class="item content-loai-xe-364" style="display: inline-block;">
                                                    <a href="{{ route('detail', ['slug' => $new->slug]) }}">
                                                        <img class="hover-me" src="{{ $new->avatar ? $new->avatar : "" }}" alt="{{ $new->name }}"></a>
                                                    <div class="desc">
                                                        <p class="name">{{$new->name}}</p>
                                                        <p class="price">Giá từ<span> <strong>{{ number_format($new->price) }} VNĐ</strong></span></p>
                                                        <a href="javascript: void(0);">Xem chi tiết
                                                            <i class="fa fa-angle-right"></i>
                                                        </a>
                                                    </div>
                                                    <div class="item-hovered">
                                                        <img class="img-hovered"
                                                             src="{{ $new->avatar ? $new->avatar : "" }}"
                                                             alt="{{ $new->name }}">
                                                        <div class="more">
                                                            <p class="name">{{ $new->name }}</p>
                                                            <p class="price">Giá từ <strong>{{ number_format($new->price) }} VNĐ</strong></p>
                                                            <a class="btn" href="{{ route('detail', ['slug' => $new->slug]) }}">
                                                                <img src="/themes/page/images/icons/btn-more.png" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                    @if ($listCategory)
                                        @foreach($listCategory as $cat)
                                            <div id="menu{{ $cat->id }}" class="tab-pane fade">
                                                @if ($listProduct)
                                                    @foreach ($listProduct as $new)
                                                        @if ($cat->id == $new->category_id)
                                                            <div class="item content-loai-xe-364" style="display: inline-block;">
                                                                <a href="javascript: void(0);">
                                                                    <img class="hover-me" src="{{$new->avatar ? $new->avatar : ""}}" alt="Air Blade 125cc"></a>
                                                                <div class="desc">
                                                                    <p class="name">{{$new->name}}</p>
                                                                    <p class="price">Giá từ<span> <strong>{{number_format($new->price)}} VNĐ</strong></span></p>
                                                                    <a href="javascript: void(0);">Xem chi tiết <i
                                                                                class="fa fa-angle-right"></i></a>
                                                                </div>
                                                                <div class="item-hovered">
                                                                    <img class="img-hovered"
                                                                         src="{{$new->avatar ? $new->avatar : ""}}"
                                                                         alt="{{$new->name}}">
                                                                    <div class="more">
                                                                        <p class="name">{{$new->name}}</p>
                                                                        <p class="price">Giá từ <strong>{{number_format($new->price)}} VNĐ</strong></p>
                                                                        <a class="btn" href="{{ route('detail', ['slug' => $new->slug]) }}">
                                                                            <img src="/themes/page/images/icons/btn-more.png" alt="">
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div> <!-- end section with sidebar and main content -->


                </div> <!-- .main-content -->
            </div> <!-- #content -->
        </div>
        <div id="services">
            <div class="container">
                <div class="body-dichvu row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-6"><h4 class="lam-color">GIÁ ƯU ĐÃI - GIAO XE SỚM</h4>
                                <p style="text-align:justify"><span style="font-size:14px"><span
                                                style="font-family:Arial,Helvetica,sans-serif"><strong>Chúng tôi</strong>&nbsp;luôn cam kết mang lại mức giá ưu đãi nhất cho quý khách với thời gian giao xe sớm.</span></span>
                                </p></div>
                            <div class="col-md-6"><h4 class="lam-color">KHUYẾN MÃI NHIỀU NHẤT</h4>
                                <p><span style="font-size:14px"><span
                                                style="font-family:Arial,Helvetica,sans-serif">Chúng tôi luôn cập nhật sớm nhất các chương trình khuyến mãi của hãng và đại lý giành cho khách hàng.</span></span>
                                </p></div>
                            <div class="col-md-6"><h4 class="lam-color">ĐĂNG KÝ TRẢ GÓP</h4>
                                <p style="text-align:justify"><span style="font-size:14px"><span
                                                style="font-family:Arial,Helvetica,sans-serif"><strong>Chúng tôi</strong> liên kết với nhiều ngân hàng và sẽ hỗ trợ trả góp từ 70 - 85%, lãi suất thấp, thủ tục nhanh gọn.</span></span>
                                </p></div>
                            <div class="col-md-6"><h4 class="lam-color">LÁI THỬ TẬN NHÀ</h4>
                                <p>
                                    <span style="font-size:14px">Nếu quỹ thời gian của bạn hạn hẹp, <strong>Chúng tôi</strong>&nbsp;sẽ hỗ trợ bạn&nbsp;có thể trải nghiệm xe tại chính ngôi nhà của bạn!</span>
                                </p></div>
                            <div class="col-md-6"><h4 class="lam-color">TƯ VẤN TẬN TÌNH</h4>
                                <p>
                                    <span style="font-size:14px">Với đội ngũ tư vấn bán hàng trẻ đầy nhiệt huyết <strong>Chúng tôi</strong>&nbsp;sẽ&nbsp;hỗ trợ anh chị mua được chiếc xe Honda ưng ý.</span>
                                </p></div>
                            <div class="col-md-6"><h4 class="lam-color"> BẢO HÀNH TOÀN CẦU</h4>
                                <p>
                                    <span style="font-size:14px">Quý khách hãy yên tâm về xe <strong>Honda </strong>mua ở <strong>của hàng của chúng tôi</strong>, vì chúng tôi bảo hành, bảo dưỡng và sửa chữa theo tiêu chuẩn chất lượng của Honda trên toàn cầu. Cung cấp phụ tùng ô tô Honda chính hiệu.</span>
                                </p></div>
                        </div>
                    </div>
                    <div class="col-md-4"><br><br> <img
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7b/Honda_Logo.svg/2000px-Honda_Logo.svg.png"
                                height="200"
                                alt="Dich Vụ Honda" class="img-responsive lazyloading"
                                data-was-processed="true"></div>
                </div>
            </div>
        </div>
        <div id="testimonial">
            <div class="container"><h3>Nhận xét của khách hàng</h3>
                <div class="row">
                    <div class="col-md-4" style="padding-bottom: 30px">
                        <p>Tôi rất hài lòng với sự hỗ trợ của Mr. Lâm đã giúp tôi lựa chọn được chiếc xe ưng ý.</p>
                        <img style="border-radius: 50px" src="/themes/page/images/clients/kh1.jpg" alt="Nội dung" class="lazyloading" data-was-processed="true"> Đỗ Tiến Khởi
                    </div>
                    <div class="col-md-4" style="padding-bottom: 30px">
                        <p>Chị đánh giá em rất nhiệt tình, chúc em ký được nhiều hợp đồng hơn nữa.</p>
                        <img style="border-radius: 50px" src="/themes/page/images/clients/kh2.jpg" alt="Nội dung" class="lazyloading" data-was-processed="true"> Vân Lee
                    </div>
                    <div class="col-md-4" style="padding-bottom: 30px">
                        <p>Chúc cháu thành công. Nếu bạn bè người quen mua nhất định chú sẽ giới thiệu cho cháu.</p>
                        <img style="border-radius: 50px" src="/themes/page/images/clients/kh3.jpg" alt="Nội dung" class="lazyloading" data-was-processed="true">Nguyễn Hiển
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="show-sp-mobile">
        <div class="space60"></div>
        <div class="slider">
            @foreach($listSlide as $slide)
                <div style="width: 100%;"><img src="{{ $slide->link }}" width="100%"></div>
            @endforeach
        </div>
        <div class="col-sm-12">
            <h1>Lựa chọn phong cách riêng của bạn</h1>
        </div>
        @foreach($listCategory as $cat)
            <div class="wrap-type">
                <a href="{{ route('list') }}?cat={{ $cat->slug }}"><h2 style="text-transform: uppercase">{{ $cat->name }}</h2></a>
                @foreach($listProduct as $product)
                    @if($product->category_id == $cat->id)
                        <div class="item">
                            <img class="hover-me"
                                 src="{{ $product->avatar }}"
                                 alt="{{ $product->name }}">
                            <div class="desc">
                                <p class="name">{{ $product->name }}</p>
                                <p class="price">Giá từ<span> {{ number_format($product->price) }} VNĐ</span></p>
                                <a href="{{ route('detail', array('slug' => $product->slug)) }}">Xem chi tiết
                                    &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        @endforeach
    </div>
@endsection
@section('script')
<script>
    jQuery(document).ready(function(){
        jQuery('.slider').bxSlider({
            responsive: true,
            auto: true,
            nextText: '<i class="fa fa-chevron-right"></i>',
            prevText: '<i class="fa fa-chevron-left"></i>',
            controls: true
        });
        jQuery('.slider div').css({'width': 'auto', 'margin-left': 'auto', 'margin-right': 'auto'});
        jQuery('#myCarousel, .carousel').carousel()
    });
    var wHeight = $( window ).height();
    jQuery(document).on('click', '#ga-mb-menu-icon', function() {
        if (jQuery(this).hasClass('active')) {
            jQuery(this).removeClass('active');
            jQuery(this).addClass('inactive');
            jQuery('#show').css({
                'height': 'auto',
                'overflow-y': 'auto'
            });
            jQuery("#header-mb").removeClass('open');
        } else {
            jQuery(this).addClass('active');
            jQuery(this).removeClass('inactive');
            jQuery('#show').css({
                'height': wHeight,
                'overflow-y': 'hidden'
            });
            jQuery("#header-mb").addClass('open');
        }
        jQuery('#header-mb .menu-mb').stop().slideToggle(300);
    });
</script>
@endsection

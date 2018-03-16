@extends('master')
@section('pageTitle')
Trang chủ
@endsection
@section('content')
    <div class="fullwidthbanner-container">
        <div class="fullwidthbanner">
            <div class="bannercontainer">
                <div class="banner">
                    <ul>
                        @if ($listSlide)
                            @foreach($listSlide as $slide)
                                <li data-transition="boxfade" data-slotamount="20" class="active-revslide"
                                    style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                                    <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined"
                                         data-zoomstart="undefined" data-zoomend="undefined"
                                         data-rotationstart="undefined" data-rotationend="undefined"
                                         data-ease="undefined" data-bgpositionend="undefined"
                                         data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined"
                                         data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined"
                                         data-oheight="undefined">
                                        <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
                                             data-bgposition="center center" data-bgrepeat="no-repeat"
                                             data-lazydone="undefined" src="{{$slide->link}}"
                                             data-src="{{$slide->link}}"
                                             style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('{{$slide->link}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>

            <div class="tp-bannertimer"></div>
        </div>
    </div>
    <!--slider-->
    </div>
    <div class="container">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-12">
                        <h1>Lựa chọn phong cách riêng của bạn</h1>
                    </div>
                    <div class="col-sm-12">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            <ul class="nav nav-tabs nav-type">
                                <li class="active"><a data-toggle="tab" href="#all">Tất cả</a></li>
                                @if ($listCategory)
                                    @foreach($listCategory as $cat)
                                        <li><a data-toggle="tab" href="#menu{{$cat->id}}">{{$cat->name}}</a></li>
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
                                                <a href="{{route('detail', ['slug' => $new->slug])}}">
                                                    <img class="hover-me" src="{{$new->avatar ? $new->avatar : ""}}" alt="{{$new->name}}"></a>
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
                                                        <a class="btn" href="{{route('detail', ['slug' => $new->slug])}}">
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
                                        <div id="menu{{$cat->id}}" class="tab-pane fade">
                                            @if ($listProduct)
                                                @foreach ($listProduct as $new)
                                                    @if ($cat->id == $new->category_id)
                                                        <div class="item content-loai-xe-364" style="display: inline-block;">
                                                            <a href="javascript: void(0);">
                                                                <img class="hover-me" src="/themes/page/images/products/{{$new->avatar ? $new->avatar : ""}}" alt="Air Blade 125cc"></a>
                                                            <div class="desc">
                                                                <p class="name">{{$new->name}}</p>
                                                                <p class="price">Giá từ<span> <strong>{{number_format($new->price)}} VNĐ</strong></span></p>
                                                                <a href="javascript: void(0);">Xem chi tiết <i
                                                                            class="fa fa-angle-right"></i></a>
                                                            </div>
                                                            <div class="item-hovered">
                                                                <img class="img-hovered"
                                                                     src="/themes/page/images/products/{{$new->avatar ? $new->avatar : ""}}"
                                                                     alt="{{$new->name}}">
                                                                <div class="more">
                                                                    <p class="name">{{$new->name}}</p>
                                                                    <p class="price">Giá từ <strong>{{number_format($new->price)}} VNĐ</strong></p>
                                                                    <a class="btn" href="javascript: void(0);">
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
                <div class="col-md-4" style="padding-bottom: 30px"><p>Tôi rất hài lòng với sự hỗ trợ của Mr. Lâm
                        đã giúp tôi lựa chọn được chiếc xe ưng ý.</p> <img style="border-radius: 50px"
                                                                           src="https://toyotalongbien3s.com/wp-content/themes/ford/images/khach-hang-1.jpg"
                                                                           alt="Nội dung" class="lazyloading"
                                                                           data-was-processed="true"> Đỗ Tiến
                    Khởi
                </div>
                <div class="col-md-4" style="padding-bottom: 30px"><p>Chị đánh giá em rất nhiệt tình, chúc em ký
                        được nhiều hợp đồng hơn nữa.</p> <img style="border-radius: 50px"
                                                              src="https://toyotalongbien3s.com/wp-content/themes/ford/images/khach-hang-2.jpg"
                                                              alt="Nội dung" class="lazyloading"
                                                              data-was-processed="true"> Vân Lee
                </div>
                <div class="col-md-4" style="padding-bottom: 30px"><p>Chúc cháu thành công. Nếu bạn bè người
                        quen mua nhất định chú sẽ giới thiệu cho cháu.</p> <img style="border-radius: 50px"
                                                                                src="https://toyotalongbien3s.com/wp-content/themes/ford/images/khach-hang-3.jpg"
                                                                                alt="Nội dung"
                                                                                class="lazyloading"
                                                                                data-was-processed="true">
                    Nguyễn Hiển
                </div>
            </div>
        </div>
    </div>
@endsection

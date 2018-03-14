@extends('master')
@section('pageTitle')
    Chi tiết sản phẩm
@endsection
@section('content')
<link href="/css/detail.css" type="text/css" rel="stylesheet">
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Product</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="index.html">Home</a> / <span>Product</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div id="content">
        <div class="row">
            <div class="col-sm-12">

                <div class="row">
                    <div class="col-sm-4">
                        <div id="product-avatar">
                            <img>
                            {{--@if ($productData)--}}
                                    {{--<img src="/source/images/products/{{$productData->avatar}}" alt="">--}}
                                {{--@else--}}
                                    {{--<img src="/source/assets/dest/images/products/6.jpg" alt="">--}}
                            {{--@endif--}}
                        </div>
                    </div>
                    <div class="col-sm-5" style="margin-top: 50px;">
                        <div class="single-item-body">
                            <p class="single-item-title">{{$productData->name}}</p>
                            <p class="single-item-price">
                                <strong>{{number_format($productData->price)}}đ</strong>
                            </p>
                        </div>

                        <div class="clearfix"></div>
                        <div class="space20">&nbsp;</div>

                        <div class="single-item-desc">
                            <p>{{$productData->description}}</p>
                        </div>
                        <div class="space20">&nbsp;</div>

                        <p>Màu sắc:</p>
                        <div class="single-item-options">
                            <div class="col-sm-12">
                                <span class="chitiet active" onclick="changeColorTop('1.png')">
                                    <img src="/images/products/detail/dream/colors/1.png"> Mầu sắc tiêu chuẩn
                                </span>
                            </div>
                            <div class="col-sm-12">
                                <span class="chitiet" onclick="changeColorTop('2.png')">
                                    <img src="/images/products/detail/dream/colors/2.png"> Nâu huyền thoại
                                </span>
                            </div>
                            <div class="col-sm-12">
                                <span class="chitiet" onclick="changeColorTop('3.png')">
                                    <img src="/images/products/detail/dream/colors/3.png"> Mầu sắc khác
                                </span>
                            </div>
                            <div class="col-sm-12">
                                <span class="chitiet" onclick="changeColorTop('4.png')">
                                    <img src="/images/products/detail/dream/colors/4.png"> Đen lịch lãm
                                </span>
                            </div>
                            <div class="col-sm-12">
                                <span class="chitiet" onclick="changeColorTop('5.png')">
                                    <img src="/images/products/detail/dream/colors/5.png"> Vàng thanh lịch
                                </span>
                            </div>
                            <div class="col-sm-12">
                                <div id="button_buy">

                                    <a style="margin-left:0" href="javascript void(0);" class="btn_large_red">
                                        <span>Đặt mua ngay</span> Giao hàng tận nơi nhanh chóng
                                    </a>
                                    <a href="javascript void(0);" class="btn_large_orange">
                                        <span>Cho vào giỏ</span> Cho vào giỏ để chọn tiếp
                                    </a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-sm-3" style="margin-top: 50px;">
                        <div id="support_online_detail">
                            <div class="title">Quí khách muốn mua hàng xin vui lòng liên hệ</div>
                            <table>
                                <tbody>
                                <tr>
                                    <td>
                                        <a href="skype:doangatesvnn93?chat" title="Nguyễn Văn Đoàn" rel="nofollow">
                                            <img src="/source/assets/dest/images/icons/icon-skype.jpg"> Mr Đoàn: 0164.651.8107
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="skype:doangatesvnn93?chat" title="Nguyễn Văn Đoàn" rel="nofollow">
                                            <img src="/source/assets/dest/images/icons/icon-skype.jpg"> Mr Đoàn: 0164.651.8107
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="skype:doangatesvnn93?chat" title="Nguyễn Văn Đoàn" rel="nofollow">
                                            <img src="/source/assets/dest/images/icons/icon-skype.jpg"> Mr Đoàn: 0164.651.8107
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="space40">&nbsp;</div>
                <div class="woocommerce-tabs">
                    <ul class="tabs">
                        <li><a href="#tab-description">Description</a></li>
                        <li><a href="#tab-reviews">Reviews (0)</a></li>
                    </ul>

                    <div class="panel" id="tab-description">
                        <table width="100%" align="center" border="0" cellpadding="0" cellspacing="0">
                            <tbody>
                            <tr>
                                <td height="100%" valign="top">
                                    <h3 class="top"><a class="tieude" href="super-dream-110cc-462.html">Super Dream
                                            110cc</a></h3>
                                    <table border="0" width="100%" cellspacing="0" cellpadding="0" class="left">
                                        <tbody>
                                        <tr>
                                            <td width="100%" valign="top">
                                                <p class="tomtat"></p>
                                                <p style="margin-left: 0px; margin-right: 0px; margin-top: 0px; margin-bottom: 0px"
                                                   align="justify" class="tomtat"><b>Super Dream 110cc</b><br>
                                                </p>
                                                <p style="margin-left: 0px; margin-right: 0px; margin-top: 6px; margin-bottom: 6px"
                                                   align="justify" class="tomtat"><b>Nâu huyền thoại:</b> 18,700,000 VND<br>
                                                </p>
                                                <p style="margin-left: 0px; margin-right: 0px; margin-top: 6px; margin-bottom: 6px"
                                                   align="justify" class="tomtat"><b>Đen lịch lãm:</b> 18,990,000
                                                    VND<br>
                                                </p>
                                                <p style="margin-left: 0px; margin-right: 0px; margin-top: 6px; margin-bottom: 6px"
                                                   align="justify" class="tomtat"><b>Vàng thanh lịch:</b> 18,990,000 VND<br>
                                                </p>
                                                <p style="margin-left: 0px; margin-right: 0px; margin-top: 6px; margin-bottom: 6px"
                                                   align="justify" class="tomtat">Giá bán lẻ đề xuất (đã có thuế
                                                    GTGT)</p>
                                                <p></p></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <table border="0" width="100%" cellspacing="0" cellpadding="0" align="left">
                                        <tbody>
                                        <tr>
                                            <td valign="top"><p class="noidung">
                                                <div style="text-align: center;">
                                                    <img width="80%" src="/images/products/detail/dream/product/1.jpg" alt="Dreamnew"><br>
                                                </div>
                                                <div style="text-align: center;">
                                                    <img width="80%" src="/images/products/detail/dream/product/2.jpg" alt="Dreamnew"><br>
                                                    <img width="80%" src="/images/products/detail/dream/product/3.jpg" alt="Dreamnew"><br>
                                                    <img width="80%" src="/images/products/detail/dream/product/4.jpg" alt="Dreamnew"><br>
                                                    <img width="80%" src="/images/products/detail/dream/product/5.jpg" alt="Dreamnew"><br>
                                                    <img width="80%" src="/images/products/detail/dream/product/6.jpg" alt="Dreamnew"><br>
                                                    <div style="text-align: left;">&nbsp;</div>
                                                    THÔNG SỐ KỸ THUẬT<br><br>
                                                    <table width="100%" cellspacing="5" cellpadding="3" border="2"
                                                           align="" class="default specification">
                                                        <tbody>
                                                        <tr class="even">
                                                            <th style="padding: 5px; vertical-align: top; text-align: left; color: rgb(255, 0, 0); font-size: 14px; background-color: rgb(255, 255, 255);">
                                                                Tên sản phẩm
                                                            </th>
                                                            <td style="padding: 5px; vertical-align: top; color: rgb(255, 0, 0); font-size: 14px; background-color: rgb(255, 255, 255);">
                                                                <strong style="font-weight: bold; margin-bottom: 10px !important; font-size: 16px !important; line-height: 20px !important;">Super
                                                                    Dream 110cc</strong></td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <th style="padding: 5px; vertical-align: top; text-align: left; background-color: rgb(247, 246, 243);">
                                                                Trọng lượng bản thân
                                                            </th>
                                                            <td style="padding: 5px; vertical-align: top; background-color: rgb(247, 246, 243);">
                                                                99 kg
                                                            </td>
                                                        </tr>
                                                        <tr class="even">
                                                            <th style="padding: 5px; vertical-align: top; text-align: left; background-color: rgb(255, 255, 255);">
                                                                Dài x Rộng x Cao
                                                            </th>
                                                            <td style="padding: 5px; vertical-align: top; background-color: rgb(255, 255, 255);">
                                                                1.915 mm x 696 mm x 1.052 mm
                                                            </td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <th style="padding: 5px; vertical-align: top; text-align: left; background-color: rgb(247, 246, 243);">
                                                                Khoảng cách trục bánh xe
                                                            </th>
                                                            <td style="padding: 5px; vertical-align: top; background-color: rgb(247, 246, 243);">
                                                                1.212 mm
                                                            </td>
                                                        </tr>
                                                        <tr class="even">
                                                            <th style="padding: 5px; vertical-align: top; text-align: left; background-color: rgb(255, 255, 255);">
                                                                Độ cao yên
                                                            </th>
                                                            <td style="padding: 5px; vertical-align: top; background-color: rgb(255, 255, 255);">
                                                                745 mm
                                                            </td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <th style="padding: 5px; vertical-align: top; text-align: left; background-color: rgb(247, 246, 243);">
                                                                Khoảng sáng gầm xe
                                                            </th>
                                                            <td style="padding: 5px; vertical-align: top; background-color: rgb(247, 246, 243);">
                                                                135 mm
                                                            </td>
                                                        </tr>
                                                        <tr class="even">
                                                            <th style="padding: 5px; vertical-align: top; text-align: left; background-color: rgb(255, 255, 255);">
                                                                Dung tích bình xăng
                                                            </th>
                                                            <td style="padding: 5px; vertical-align: top; background-color: rgb(255, 255, 255);">
                                                                3,8 lít
                                                            </td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <th style="padding: 5px; vertical-align: top; text-align: left; background-color: rgb(247, 246, 243);">
                                                                Cỡ lốp trước/sau
                                                            </th>
                                                            <td style="padding: 5px; vertical-align: top; background-color: rgb(247, 246, 243);">
                                                                Trước: 70/90 -17 M/C 38P / Sau: 80/90 -17 M/C 50P
                                                            </td>
                                                        </tr>
                                                        <tr class="even">
                                                            <th style="padding: 5px; vertical-align: top; text-align: left; background-color: rgb(255, 255, 255);">
                                                                Phuộc trước
                                                            </th>
                                                            <td style="padding: 5px; vertical-align: top; background-color: rgb(255, 255, 255);">
                                                                Ống lồng, giảm chấn thủy lực
                                                            </td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <th style="padding: 5px; vertical-align: top; text-align: left; background-color: rgb(247, 246, 243);">
                                                                Phuộc sau
                                                            </th>
                                                            <td style="padding: 5px; vertical-align: top; background-color: rgb(247, 246, 243);">
                                                                Lò xo trụ, giảm chấn thủy lực
                                                            </td>
                                                        </tr>
                                                        <tr class="even">
                                                            <th style="padding: 5px; vertical-align: top; text-align: left; background-color: rgb(255, 255, 255);">
                                                                Loại động cơ
                                                            </th>
                                                            <td style="padding: 5px; vertical-align: top; background-color: rgb(255, 255, 255);">
                                                                Xăng, 4 kỳ, 1 xy-lanh, làm mát bằng không khí
                                                            </td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <th style="padding: 5px; vertical-align: top; text-align: left; background-color: rgb(247, 246, 243);">
                                                                Dung tích xi lanh
                                                            </th>
                                                            <td style="padding: 5px; vertical-align: top; background-color: rgb(247, 246, 243);">
                                                                109,1 cm<sup>3</sup></td>
                                                        </tr>
                                                        <tr class="even">
                                                            <th style="padding: 5px; vertical-align: top; text-align: left; background-color: rgb(255, 255, 255);">
                                                                Đường kính x hành trình pít tông
                                                            </th>
                                                            <td style="padding: 5px; vertical-align: top; background-color: rgb(255, 255, 255);">
                                                                50 mm x 55,6 mm
                                                            </td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <th style="padding: 5px; vertical-align: top; text-align: left; background-color: rgb(247, 246, 243);">
                                                                Tỷ số nén
                                                            </th>
                                                            <td style="padding: 5px; vertical-align: top; background-color: rgb(247, 246, 243);">
                                                                9,0:1
                                                            </td>
                                                        </tr>
                                                        <tr class="even">
                                                            <th style="padding: 5px; vertical-align: top; text-align: left; background-color: rgb(255, 255, 255);">
                                                                Công suất tối đa
                                                            </th>
                                                            <td style="padding: 5px; vertical-align: top; background-color: rgb(255, 255, 255);">
                                                                5,64 kW/ 7.500 vòng/phút
                                                            </td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <th style="padding: 5px; vertical-align: top; text-align: left; background-color: rgb(247, 246, 243);">
                                                                Mô men cực đại
                                                            </th>
                                                            <td style="padding: 5px; vertical-align: top; background-color: rgb(247, 246, 243);">
                                                                8,32N.m/ 3.500 vòng/phút
                                                            </td>
                                                        </tr>
                                                        <tr class="even">
                                                            <th style="padding: 5px; vertical-align: top; text-align: left; background-color: rgb(255, 255, 255);">
                                                                Dung tích nhớt máy
                                                            </th>
                                                            <td style="padding: 5px; vertical-align: top; background-color: rgb(255, 255, 255);">
                                                                1,0 lít khi rã máy/ 0,8 lít khi thay nhớt
                                                            </td>
                                                        </tr>
                                                        <tr class="odd">
                                                            <th style="padding: 5px; vertical-align: top; text-align: left; background-color: rgb(247, 246, 243);">
                                                                Hệ thống khởi động
                                                            </th>
                                                            <td style="padding: 5px; vertical-align: top; background-color: rgb(247, 246, 243);">
                                                                Điện / Đạp chân
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <br>MẦU SẮC<br></div>
                                                <p></p></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <table border="0" width="100%" id="table1">
                                        <tbody>
                                        <tr>
                                            <td width="10%" height="1px"></td>
                                            <td width="20%" height="1px" valign="top">
                                                <br>
                                                <span class="chitiet" onclick="changeColor('1.png')">
                                                    <img src="/images/products/detail/dream/colors/1.png"> Mầu sắc tiêu chuẩn
                                                </span>
                                                <br>
                                                <span class="chitiet" onclick="changeColor('2.png')">
                                                    <img src="/images/products/detail/dream/colors/2.png" > Nâu huyền thoại
                                                </span>
                                                <br>
                                                <span class="chitiet" onclick="changeColor('3.png')">
                                                    <img src="/images/products/detail/dream/colors/3.png" > Mầu sắc khác
                                                </span>
                                                <br>
                                                <span class="chitiet" onclick="changeColor('4.png')">
                                                    <img src="/images/products/detail/dream/colors/4.png" > Đen lịch lãm
                                                </span>
                                                <br>
                                                <span class="chitiet" onclick="changeColor('5.png')">
                                                    <img src="/images/products/detail/dream/colors/5.png" > Vàng thanh lịch
                                                </span>
                                            </td>
                                            <td width="70%" valign="top">
                                                <span id="thetable">
                                                    <img src="/images/products/detail/dream/product-color/1.png">
                                                </span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="panel" id="tab-reviews">
                        <p>No Reviews</p>
                    </div>
                </div>
                <div class="space50">&nbsp;</div>
                <div class="beta-products-list">
                    <h4>Related Products</h4>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="single-item">
                                <div class="single-item-header">
                                    <a href="product.html"><img src="/source/assets/dest/images/products/4.jpg" alt=""></a>
                                </div>
                                <div class="single-item-body">
                                    <p class="single-item-title">Sample Woman Top</p>
                                    <p class="single-item-price">
                                        <span>$34.55</span>
                                    </p>
                                </div>
                                <div class="single-item-caption">
                                    <a class="add-to-cart pull-left" href="product.html"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="single-item">
                                <div class="single-item-header">
                                    <a href="product.html"><img src="/source/assets/dest/images/products/5.jpg" alt=""></a>
                                </div>
                                <div class="single-item-body">
                                    <p class="single-item-title">Sample Woman Top</p>
                                    <p class="single-item-price">
                                        <span>$34.55</span>
                                    </p>
                                </div>
                                <div class="single-item-caption">
                                    <a class="add-to-cart pull-left" href="product.html"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="single-item">
                                <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>

                                <div class="single-item-header">
                                    <a href="#"><img src="/source/assets/dest/images/products/6.jpg" alt=""></a>
                                </div>
                                <div class="single-item-body">
                                    <p class="single-item-title">Sample Woman Top</p>
                                    <p class="single-item-price">
                                        <span class="flash-del">$34.55</span>
                                        <span class="flash-sale">$33.55</span>
                                    </p>
                                </div>
                                <div class="single-item-caption">
                                    <a class="add-to-cart pull-left" href="#"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="beta-btn primary" href="#">Details <i class="fa fa-chevron-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- .beta-products-list -->
            </div>
        </div>
    </div> <!-- #content -->
</div>
    <script>
        function changeColor(img) {
            var linkDir = '/images/products/detail/dream/product-color/',
                linkImg = linkDir + img;
            jQuery('#thetable img').attr('src', linkImg);
        }

        function changeColorTop(img) {
            var linkDir = '/images/products/detail/dream/product-color/',
                linkImg = typeof(img) != 'undefined' ? linkDir + img : '';

            jQuery('#product-avatar img').attr('src', linkImg);
        }

        jQuery(document).ready(function () {
            jQuery('.chitiet.active').click();
        });
    </script>
@endsection
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('pageTitle') - Website bán xe máy</title>
    <link rel="shortcut icon" type="image/png" href="/themes/page/images/favicon.png"/>
    <meta name="description" content="Website bán xe máy Honda">
    <meta name="keywords" content="honda,xemay,xetayga,xeso,phukienxemay">
    <meta name="author" content="DoanGates | 01646518107">
    <base hrer="{{asset('')}}">
    <link href='https://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/themes/page/css/bootstrap.min.css">
    <link rel="stylesheet" href="/themes/page/css/font-awesome.min.css">
    <link rel="stylesheet" href="/themes/page/vendors/colorbox/example3/colorbox.css">
    <link rel="stylesheet" href="/themes/page/css/settings.css">
    <link rel="stylesheet" href="/themes/page/css/responsive.css">
    <link rel="stylesheet" title="style" href="/themes/page/css/style.css">
    <link rel="stylesheet" href="/themes/page/css/animate.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <link href="/css/landing.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" title="style" href="/themes/page/css/custom.css">
    <link rel="stylesheet/less" type="text/css" href="/themes/page/less/styles.less" />
    @yield('styleHeader')
</head>
<body id="show-sp">
<div id="social-right-fixed">
    <a href="https://facebook.com/doangates" target="_blank"><i class="icons icon-sright-fb"></i></a>
    <a href="javascript:void(0)" target="_blank"><i class="icons icon-sright-yo"></i></a>
    <a href="mailto:doangatesvnn93@gmail.com" target="_blank"><i class="icons icon-sright-mail"></i></a>
    <a href="tel:+841646518107" target="_blank"><i class="icons icon-sright-tel"></i></a>
    <a href="javascript: gotoTop();" target="_blank"><i class="icons icon-sright-up"></i></a>
</div>
<div id="session-flash">
    @if (session('status'))
        @if (session('status') == 'success')
            <div class="alert alert-success alert-message">{{session('flash-message')}}</div>
        @endif
        @if (session('status') == 'fail')
            <div class="alert alert-warning alert-message">{{session('flash-message')}}</div>
        @endif
    @endif
</div>
<div id="cart-fixed" onclick="location.href='{{ route('checkout') }}'" @if (!session('cart'))style="display: none" @endif>
    <img src="/themes/page/images/icon_cart_fixed.png" alt="">
    <a href="{{ route('checkout') }}">Giỏ hàng của bạn</a>
</div>
<!-- #header -->
@include('header')
<!-- #end header -->
<div class="rev-slider" ng-app="myApp" ng-controller="myCtrl">
    @yield('content')
</div>
@include('footer')


<!-- include js files -->
<script src="/themes/page/js/jquery.js"></script>
<script src="/themes/page/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
<script src="/themes/page/js//bootstrap.min.js"></script>
<script src="/themes/page/vendors/bxslider/jquery.bxslider.min.js"></script>
<script src="/themes/page/vendors/colorbox/jquery.colorbox-min.js"></script>
<script src="/themes/page/vendors/animo/Animo.js"></script>
<script src="/themes/page/vendors/dug/dug.js"></script>
<script src="/themes/page/js/scripts.min.js"></script>
<script src="/themes/page/js/jquery.themepunch.tools.min.js"></script>
<script src="/themes/page/js/jquery.themepunch.revolution.min.js"></script>
<script src="/themes/page/js/waypoints.min.js"></script>
<script src="/themes/page/js/wow.min.js"></script>
<script src="/themes/page/less/less.min.js" ></script>
<script src="/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<!--customjs-->
<script src="/themes/page/js/custom2.js"></script>
<script>
    function gotoTop() {
        jQuery('html, body').animate({scrollTop: 0}, 1000);
    }

    $(document).ready(function ($) {
        $(window).scroll(function () {
                if ($(this).scrollTop() > 150) {
                    $(".header-bottom").addClass('fixNav')
                } else {
                    $(".header-bottom").removeClass('fixNav')
                }
            }
        );
        // setTimeout(function () {
        //     $('.alert-message').empty().hide();
        // }, 2000);
    });

    function addToCart(id) {
        jQuery.ajax({
            type:'POST',
            url:'{{ route('add-to-cart') }}',
            data: {
                '_token': '{{ csrf_token() }}',
                'id': id
            },
            success:function(response){
                if (response.status = 'RESULT_OK') {
                    var html = '',
                        data = response.data,
                        totalAmount = 0;
                    jQuery('#text-empty-cart').empty();
                    for (var i in data) {
                        totalAmount += parseInt(data[i].qty) * parseInt(data[i].price);
                        html += '<div class="cart-item">'
                                    + '<div class="media">'
                                        + '<a class="pull-left" href="#"><img src="' + data[i].avatar + '"></a>'
                                            + '<div class="media-body">'
                                            + '<span class="cart-item-title">' + data[i].name + '</span>'
                                            + '<span class="cart-item-options">Số lượng: ' + data[i].qty + ' </span>'
                                            + '<span class="cart-item-amount">' + commons.addCommas(parseInt(data[i].qty) * parseInt(data[i].price)) + 'đ</span>'
                                        + '</div>'
                                    + '</div>'
                               + '</div>';
                    }
                    html += '<div class="cart-caption">'
                                + '<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">' + commons.addCommas(totalAmount) + '</span></div>'
                                + '<div class="clearfix"></div>'

                                + '<div class="center">'
                                    + '<div class="space10">&nbsp;</div>'
                                    + '<a href="{{ route('checkout') }}" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>'
                                + '</div>'
                            + '</div>';

                    jQuery('#cart-body').addClass('beta-dropdown  cart-body').html(html);
                    commons.alertFlashMessage('success', 'Đã thêm vào giỏ hàng');
                } else {
                    commons.alertFlashMessage('fail', 'Có lỗi xảy ra');
                    setTimeout(function () {
                        commons.refresh();
                    }, 1000)
                }
            }
        });
    }
    var subscribe = function () {
        jQuery('.email-error').html('').hide();
        var url = "{{ route('subscribe') }}",
            email = jQuery('#input-email-subscribe').val();
        if (email && commons.isEmail(email)) {
            jQuery.ajax({
                type:'POST',
                url: url,
                data: {
                    email: email,
                    _token: '{{ csrf_token() }}'
                },
                success: function (response) {
                    if (response.status == 'RESULT_OK') {
                        commons.gotoUrl('{{ route('subscribed') }}');
                    }
                }
            });
        } else {
            jQuery('.email-error').html('Emai không đúng định dạng').show();
            jQuery('#input-email-subscribe').focus();
        }
    }
    jQuery(document).ready(function () {
        jQuery(document).on('click', '.button-subscribe', function () {
            subscribe();
        })
    });
</script>
@yield('styleFooter')
@yield('script')
</body>
</html>

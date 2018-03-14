<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('pageTitle') - Website bán xe máy</title>
    <link rel="shortcut icon" type="image/png" href="source/assets/dest/images/favicon.png"/>
    <meta name="description" content="Website bán xe máy Honda">
    <meta name="keywords" content="honda,xemay,xetayga,xeso,phukienxemay">
    <meta name="author" content="DoanGates | 01646518107">
    <base hrer="{{asset('')}}">
    <link href='https://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="/source/assets/dest/css/bootstrap.min.css">
    <link rel="stylesheet" href="/source/assets/dest/css/font-awesome.min.css">
    <link rel="stylesheet" href="/source/assets/dest/vendors/colorbox/example3/colorbox.css">
    <link rel="stylesheet" href="/source/assets/dest/rs-plugin/css/settings.css">
    <link rel="stylesheet" href="/source/assets/dest/rs-plugin/css/responsive.css">
    <link rel="stylesheet" title="style" href="/source/assets/dest/css/style.css">
    <link rel="stylesheet" href="/source/assets/dest/css/animate.css">
    <link href="/css/landing.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" title="style" href="/source/assets/dest/css/custom.css">
    <script src="/source/assets/dest/js/jquery.js"></script>
</head>
<body id="show-sp">
<div id="social-right-fixed">
    <a href="https://facebook.com/doangates" target="_blank"><i class="icons icon-sright-fb"></i></a>
    <a href="javascript:void(0)" target="_blank"><i class="icons icon-sright-yo"></i></a>
    <a href="mailto:doangatesvnn93@gmail.com" target="_blank"><i class="icons icon-sright-mail"></i></a>
    <a href="tel:+841646518107" target="_blank"><i class="icons icon-sright-tel"></i></a>
    <a href="javascript: gotoTop();" target="_blank"><i class="icons icon-sright-up"></i></a>
</div>
<!-- #header -->
@include('header')
<!-- #end header -->
<div class="rev-slider" ng-app="myApp" ng-controller="myCtrl">
    @yield('content')
</div>
@include('footer')


<!-- include js files -->
<script src="/source/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
<script src="/source/assets/dest/js//bootstrap.min.js"></script>
<script src="/source/assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
<script src="/source/assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
<script src="/source/assets/dest/vendors/animo/Animo.js"></script>
<script src="/source/assets/dest/vendors/dug/dug.js"></script>
<script src="/source/assets/dest/js/scripts.min.js"></script>
<script src="/source/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="/source/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="/source/assets/dest/js/waypoints.min.js"></script>
<script src="/source/assets/dest/js/wow.min.js"></script>
<script src="/js/script.js"></script>
<!--customjs-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
<script src="/source/assets/dest/js/custom2.js"></script>
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
        )
    });
</script>
</body>
</html>

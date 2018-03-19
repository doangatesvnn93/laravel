<div id="header-pc">
    <div id="header">
        <div class="header-top">
            <div class="container">
                <div class="pull-left auto-width-left">
                    <ul class="top-menu menu-beta l-inline">
                        <li>
                            <div class="pull-left">
                                <a href="{{route('landing')}}" id="logo"><img src="/themes/page/images/logo.png"
                                                                              width="200px" alt=""></a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="pull-right auto-width-right">
                    <ul class="top-details menu-beta l-inline">
                        <li>
                            <div class="beta-comp">
                                <form role="search" method="get" id="searchform" action="/">
                                    <input type="text" value="" name="s" id="s" placeholder="Bạn đang tìm gì..."/>
                                    <button class="fa fa-search" type="submit" id="searchsubmit"></button>
                                </form>
                            </div>
                        </li>
                        <li>
                            <div class="beta-comp">
                                <div class="cart">
                                    <div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng (Trống) <i
                                                class="fa fa-chevron-down"></i></div>
                                    <div class="beta-dropdown cart-body">
                                        <div class="cart-item">
                                            <div class="media">
                                                <a class="pull-left" href="#"><img
                                                            src="/themes/page/images/products/cart/1.png" alt=""></a>
                                                <div class="media-body">
                                                    <span class="cart-item-title">Sample Woman Top</span>
                                                    <span class="cart-item-options">Size: XS; Colar: Navy</span>
                                                    <span class="cart-item-amount">1*<span>$49.50</span></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="cart-caption">
                                            <div class="cart-total text-right">Tổng tiền: <span
                                                        class="cart-total-value">$34.55</span></div>
                                            <div class="clearfix"></div>

                                            <div class="center">
                                                <div class="space10">&nbsp;</div>
                                                <a href="checkout.html" class="beta-btn primary text-center">Đặt hàng <i
                                                            class="fa fa-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- .cart -->
                            </div>
                        </li>
                        {{--<li><a href="#">Đăng nhập</a></li>--}}
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div> <!-- .container -->
        </div> <!-- .header-top -->
        <div class="header-bottom" style="background-color: #e6002c; text-transform: uppercase">
            <div class="container">
                <a class="visible-xs beta-menu-toggle pull-right" href="#"><span
                            class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
                <div class="visible-xs clearfix"></div>
                <nav class="main-menu">
                    <ul class="l-inline ov">
                        <li class="@if (Route::currentRouteName() == 'landing')active @endif"><a
                                    href="{{route('landing')}}">Trang chủ</a></li>
                        <li id="header-list-product">
                            <a href="{{ route('list') }}">Sản phẩm</a>
                            <div class="menu-sanpham">
                                <div class="center-content">
                                    @if ($listCategory)
                                        @foreach($listCategory as $cat)
                                            <div class="item-wrp">
                                                <div class="mgb-10">
                                                    <a href="{{ route('list') }}?cat={{ $cat->slug }}" class="type">{{$cat->name}}</a>
                                                </div>
                                                @if ($listProduct)
                                                    @foreach($listProduct as $item)
                                                        @if ($item->category_id == $cat->id)
                                                            <div class="item">
                                                                <a href="{{route('detail', ['slug' => $item->slug])}}">
                                                                    <img class="hover-me"
                                                                         src="{{$item->avatar ? $item->avatar : ""}}"
                                                                         alt="{{$item->name}}">
                                                                </a>
                                                                <p class="name">{{$item->name}}</p>
                                                            </div>
                                                        @endif

                                                    @endforeach
                                                @endif
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </li>
                        <li><a href="{{ route('about') }}">Giới thiệu</a></li>
                        <li><a href="{{ route('contact') }}">Liên hệ</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </nav>
            </div> <!-- .container -->
        </div> <!-- .header-bottom -->
    </div>
</div>
<div class="menu-mobile">

    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('landing') }}"><img src="/themes/page/images/logo.png"> </a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ route('landing') }}">Trang chủ</a></li>
                    <li>
                        <a href="javascript: void(0);" class="dropdown-toggle" data-toggle="dropdown">Sản phẩm <b class="caret"></b></a>

                        <ul class="dropdown-menu multi-level">
                            <li><a href="{{ route('list') }}">Tất cả</a></li>
                            @foreach($listCategory as $cat)
                                <li><a href="{{ route('list') }}?cat={{ $cat->slug }}">{{ $cat->name }}</a></li>
                            @endforeach
                        </ul>
                        <div class="clearfix"></div>
                    </li>
                    <li>
                        <a href="{{ route('about') }}">Giới thiệu</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}">Liên hệ</a>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>
</div>
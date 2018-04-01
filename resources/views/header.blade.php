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
                            <div class="form-search">
                                <div class="beta-comp">
                                    <form role="search" method="get" id="searchform" action="/">
                                        <input type="text" value="" name="s" id="search-product" placeholder="Bạn đang tìm gì..."/>
                                        <button class="fa fa-search" type="button" id="searchsubmit" onclick="searchProduct()"></button>
                                    </form>
                                </div>
                                <ul class="wrap-suggestion" style="display: none;"></ul>
                            </div>
                        </li>
                        <li>
                            <div class="beta-comp">
                                <div class="cart">
                                    <div class="beta-select">
                                        <i class="fa fa-shopping-cart"></i> Giỏ hàng <span id="text-empty-cart">@if(!session()->has('cart'))
                                                (Trống)</span> @endif
                                        <i class="fa fa-chevron-down"></i>
                                    </div>

                                    <div class="@if (session()->has('cart') )beta-dropdown  cart-body @endif" id="cart-body">
                                        @if (session()->has('cart'))
                                            @php $totalAmount = 0; @endphp
                                            @foreach(session()->get('cart') as $key => $item)
                                                @php $totalAmount += $item['price'] * $item['qty']; @endphp
                                                <div class="cart-item">
                                                    <div class="media">
                                                        <a class="pull-left" href="#"><img src="{{ $item['avatar'] }}"></a>
                                                        <div class="media-body">
                                                            <span class="cart-item-title">{{ $item['name'] }}</span>
                                                            <span class="cart-item-options">Số lượng: {{ $item['qty'] }}</span>
                                                            <span class="cart-item-amount">Số tiền : {{ number_format($item['price'] * $item['qty']) }}
                                                                đ</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <div class="cart-caption">
                                                <div class="cart-total text-right">Tổng tiền: <span
                                                            class="cart-total-value">{{ number_format($totalAmount) }}
                                                        đ</span></div>
                                                <div class="clearfix"></div>

                                                <div class="center">
                                                    <div class="space10">&nbsp;</div>
                                                    <a href="{{ route('checkout') }}"
                                                       class="beta-btn primary text-center">
                                                        Đặt hàng <i class="fa fa-chevron-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        @endif
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
                        <li><a href="{{ route('checkout') }}">Thanh toán</a></li>
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
                        <a href="{{ route('about') }}">Chính sách giao hàng</a>
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
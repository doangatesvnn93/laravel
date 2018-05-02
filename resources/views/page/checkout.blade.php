@extends('master')
@section('pageTitle')
    Đặt hàng
@endsection
@section('content')
    <div class="inner-header">
        <div class="container">
            <div class="pull-left">
                <h6 class="inner-title">Đặt hàng</h6>
            </div>
            <div class="pull-right">
                <div class="beta-breadcrumb">
                    <a href="{{ route('landing') }}">Trang chủ</a> / <span>Đặt hàng</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="container">
        <div id="content" class="cart-container">
            @if (session()->has('cart'))
                <form action="{{ route('checkout') }}" method="post" class="beta-form-checkout">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Đặt hàng</h4>
                        <div class="space20">&nbsp;</div>

                        <div class="form-block">
                            <label for="name">Họ tên*</label>
                            <input type="text" id="name" placeholder="Họ tên" name="fullname" required>
                        </div>
                        <div class="form-block">
                            <label>Giới tính </label>
                            <input id="gender" type="radio" class="input-radio" name="gender" value="nam"
                                   checked="checked" style="width: 10%"><span style="margin-right: 10%">Nam</span>
                            <input id="gender" type="radio" class="input-radio" name="gender" value="nữ"
                                   style="width: 10%"><span>Nữ</span>

                        </div>

                        <div class="form-block">
                            <label for="email">Email*</label>
                            <input type="email" id="email" required placeholder="expample@gmail.com" name="email">
                        </div>

                        <div class="form-block">
                            <label for="address">Địa chỉ*</label>
                            <input type="text" id="address" placeholder="Street Address" required name="address">
                        </div>


                        <div class="form-block">
                            <label for="phone">Điện thoại*</label>
                            <input type="text" id="phone" required name="phone">
                        </div>

                        <div class="form-block">
                            <label for="notes">Ghi chú</label>
                            <textarea id="notes" name="notes"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="your-order">
                            <div class="your-order-head"><h5>Đơn hàng của bạn</h5></div>
                            <div class="your-order-body" style="padding: 0px 10px">
                                <div class="your-order-item">
                                    <div>
                                        @if (session()->has('cart'))
                                            @php $totalAmount = 0; @endphp
                                            @foreach(session()->get('cart') as $key => $item)
                                                @php $item = (object) $item; @endphp
                                                @php $totalAmount += $item->price * $item->qty; @endphp
                                                <div class="media">
                                                    <img width="25%" src="{{ $item->avatar }}" alt="" class="pull-left">
                                                    <input class="hidden" name="product[]" value="{{ $key }}">
                                                    <input class="hidden" name="qty[]" value="{{ $item->qty }}">
                                                    <input class="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <div class="media-body">
                                                        <div style="overflow: auto">
                                                            <div class="pull-left">Tên sản phẩm:</div>
                                                            <div class="pull-right"><b>{{ $item->name }}</b></div>
                                                        </div>
                                                        <div style="overflow: auto">
                                                            <div class="pull-left">Số lượng:</div>
                                                            <div class="pull-right"><b>{{ $item->qty }}</b></div>
                                                        </div>
                                                        <div style="overflow: auto">
                                                            <div class="pull-left">Giá:</div>
                                                            <div class="pull-right">
                                                                <b>{{ number_format($item->price) }}</b></div>
                                                        </div>
                                                        <hr>
                                                        <div style="overflow: auto">
                                                            <div class="pull-left">Tổng:</div>
                                                            <div class="pull-right">
                                                                <b>{{ number_format($item->price * $item->qty) }}</b>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                            @endforeach
                                            <div class="clearfix"></div>
                                            <div class="your-order-item">
                                                <div class="pull-left pdl-15"><p class="your-order-f18">Tổng tiền:</p>
                                                </div>
                                                <div class="pull-right"><h5
                                                            class="color-black">{{ number_format($totalAmount) }}</h5>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        @else
                                            <h1>Bạn chưa chọn mặt hàng nào.</h1>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <div class="your-order-head"><h5>Hình thức thanh toán</h5></div>

                            <div class="your-order-body">
                                <ul class="payment_methods methods">
                                    <li class="payment_method_bacs">
                                        <input id="payment_method_bacs" type="radio" class="input-radio"
                                               name="typePayment" value="COD" checked="checked"
                                               data-order_button_text="">
                                        <label for="payment_method_bacs">Thanh toán khi nhận hàng </label>
                                        <div class="payment_box payment_method_bacs" style="display: block;">
                                            Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền
                                            cho nhân viên giao hàng
                                        </div>
                                    </li>

                                    <li class="payment_method_cheque">
                                        <input id="payment_method_cheque" type="radio" class="input-radio"
                                               name="typePayment" value="ATM" data-order_button_text="">
                                        <label for="payment_method_cheque">Chuyển khoản </label>
                                        <div class="payment_box payment_method_cheque" style="display: none;">
                                            Chuyển tiền đến tài khoản sau:
                                            <br>- Số tài khoản: <b>{{ $dataWebsiteConfig->card_number }}</b>
                                            <br>- Chủ TK: <b>{{ $dataWebsiteConfig->bank }}</b>
                                        </div>
                                    </li>

                                </ul>
                            </div>

                            <div class="text-center">
                                <button class="beta-btn primary" type="submit">Đặt hàng <i class="fa fa-chevron-right"></i></button></div>
                        </div> <!-- .your-order -->
                    </div>
                </div>
            </form>
            @else
                <div class="null_cart">
                    <i class="iconnoti iconnull"></i>
                    Không có sản phẩm nào trong giỏ hàng
                    <a href="{{ route('landing') }}" class="buyother">Về trang chủ</a>
                    <div class="callship">
                        Khi cần trợ giúp vui lòng gọi <a href="tel:{{ $dataWebsiteConfig->phone }}">{{ $dataWebsiteConfig->phone }}</a> (7h30 - 22h)
                    </div>
                </div>
            @endif
        </div> <!-- #content -->
    </div> <!-- .container -->
@endsection
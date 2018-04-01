@extends('master')
@section('pageTitle')
    Chi tiết sản phẩm
@endsection
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="beta-breadcrumb font-large">
            <a href="{{ route('landing') }}">Trang chủ</a> <span>›</span> <a href="{{ route('list') }}">Sản phẩm</a>
        </div>
        <div class="pull-left">
            <h6 class="inner-title">{{ $productData->name }}</h6>
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
                            <img src="{{ $productData->avatar }}">
                        </div>
                    </div>
                    <div class="col-sm-8 item-top">
                        <div class="single-item-body">
                            <p class="single-item-price">
                                <strong class="area_price">{{ number_format($productData->price )}}đ</strong>
                            </p>
                        </div>

                        <div class="clearfix"></div>
                        <div class="space20">&nbsp;</div>

                        <div class="single-item-desc">
                            <p>{{$productData->description}}</p>
                        </div>

                        <div class="color-title">Màu sắc:</div>
                        <div class="single-item-options">
                            <?php $dataColor = json_decode($productData->color_product_data); ?>
                            @if (!empty($dataColor))
                                    @foreach($dataColor as $key => $itemColor)
                                        @if ($itemColor->product)
                                            <div class="col-sm-6 pd0">
                                                <div class="color-product @if ($key == 0)active @endif"
                                                     onclick="changeColorTop('{{ $itemColor->product }}')">
                                                    <img src="{{ $itemColor->color }}" width="100" height="30">
                                                    <span class="name-color-product">{{ $itemColor->name }}</span>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                            @endif
                            <div class="col-sm-12">
                                <div id="button_buy">

                                    <a style="margin-left:0" href="javascript: void(0);" class="btn_large_red">
                                        <span>Đặt mua ngay</span> Giao hàng tận nơi nhanh chóng
                                    </a>
                                    <a href="javascript: void(0);" class="btn_large_orange" onclick="addToCart('{{ $productData->id }}')">
                                        <span>Cho vào giỏ</span> Cho vào giỏ để chọn tiếp
                                    </a>
                                </div>
                            </div>
                            <div class="clearfix"></div>
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
                        <?php echo htmlspecialchars_decode($productData->content); ?>
                    </div>
                    <div class="panel" id="tab-reviews">
                        <p>No Reviews</p>
                    </div>
                </div>
                <hr>
                <div class="col-sm-12 pd0">
                    <div class="wrap_comment">
                        <div class="edtCmt">
                            <div>
                                <textarea placeholder="Mời bạn để lại bình luận..." class="textarea-comment"></textarea>
                                <span class="has-error error-comment-textarea mgb-10" style="display: none;">* Bạn phải nhập nội dung bình luận</span>
                            </div>
                            <div class="ajaxcomment hide">
                                <div id="loadcomment">
                                    <div class="wrap_popup_success" style="opacity: 1;">
                                        <i class="iconcom-success"></i>
                                        <span>Bình luận của bạn đã được đăng thành công</span>
                                    </div>
                                </div>
                            </div>
                            <div class="boxemotion">
                                <div class="col-sm-3 mgb-5 pdl-10">
                                    <div class="icon-user"><i class="fa fa-user"></i></div>
                                    <input class="name-comment form-control" name="nameComment" placeholder="Họ và tên" @if (session('username')) value="{{ session('username') }}" @endif>
                                    <span class="has-error error-comment-username" style="display: none;">* Bạn phải nhập họ tên</span>
                                </div>
                                <div class="col-sm-4">
                                    <div class="recaptcha">
                                        @if (session('commentRecaptch'))
                                            <div class="g-recaptcha" data-sitekey="6LfqZk8UAAAAAJxIt67mrAfeKwTFy0Zv0rkDATFn"></div>
                                            <span class="has-error error-comment-recaptcha" style="display: none;">* Bạn vui lòng chọn recaptcha</span>
                                        @endif
                                    </div>

                                </div>
                                <div class="motionsend">
                                    <div class="cmt_right">
                                        <a class="btnSend" href="javascript:void(0)" id="btnSendCmt" onclick="cmtSend();">Gửi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="mgt-20">
                            <div class="col-sm-12 pd0 mgb-20">
                                <span class="totalcomment">{{ count($listComment) }} bình luận</span>
                            </div>
                            <ul class="listcomment">
                                @if($listComment)
                                    @foreach ($listComment as $key => $comment)
                                    <li class="comment_ask" id="26153647">
                                        <div class="rowuser">
                                            <a href="javascript:void(0)">
                                                <div>{{ mb_substr($comment->username, 0, 1) }}</div>
                                                <strong>{{ $comment->username }}</strong>
                                            </a>
                                        </div>
                                        <div class="question">{{ $comment->comment }}</div>
                                        <div class="actionuser" data-cl="0">
                                            <a href="javascript:void(0)" class="time">{{ date('d/m/Y - H:i:s', strtotime($comment->created_at)) }}</a>
                                        </div>
                                    </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="beta-products-list">
                    <h4>Related Products</h4>
                    <div class="row mgt-20">
                        @if($listProductRelate)
                            @foreach($listProductRelate as $product)
                                <div class="col-sm-4">
                                    <div class="single-item">
                                        <div class="single-item-header">
                                            <a href="{{ route('detail', ['slug' => $product->slug] )}}">
                                                <img src="{{ $product->avatar }}" alt="" width="350" height="200">
                                            </a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">{{ $product->name }}</p>
                                            <p class="single-item-price">
                                                <span>{{ number_format($product->price) }}</span>
                                            </p>
                                        </div>
                                        <div class="single-item-caption">
                                            <a class="add-to-cart" href="product.html"><i class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="{{ route('detail', ['slug' => $product->slug]) }}">Details <i class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div> <!-- .beta-products-list -->
            </div>
        </div>
    </div> <!-- #content -->
</div>
@section('styleFooter')
    <link href="/css/detail.css" type="text/css" rel="stylesheet">
    <style>
        .chitiet {
            cursor: pointer;
        }
        .table-bordered {
            border: 1px solid #ddd !important;
        }
    </style>
@endsection
@section('script')
    <script>
        var recaptchaEnable = false;
        @if (session()->get('commentRecaptch'))
            recaptchaEnable = true;
        @endif
        function cmtSend(){
            jQuery('.error-comment-textarea, .error-comment-username .error-comment-recaptcha').hide();
            var comment = jQuery.trim(jQuery('.textarea-comment').val()),
                username = jQuery.trim(jQuery('.name-comment').val()),
                productId = '{{ $productData->id }}';
            if (recaptchaEnable) {
                jQuery('recaptcha').append('<div class="g-recaptcha" data-sitekey="6LfqZk8UAAAAAJxIt67mrAfeKwTFy0Zv0rkDATFn"></div>');
            }
            if (!comment) {
                jQuery('.error-comment-textarea').show();
                jQuery('.textarea-comment').focus();
                return;
            }
            if (!username) {
                jQuery('.error-comment-username').show();
                jQuery('.name-comment').focus();
                return;
            }
            if (comment && username && productId) {
                if (recaptchaEnable) {
                    if (!grecaptcha.getResponse()) {
                        jQuery('.error-comment-recaptcha').show();
                        return;
                    }
                }
                jQuery.ajax({
                    type: 'POST',
                    url: '{{ route('comment') }}',
                    data: {
                        comment: comment,
                        username: username,
                        product_id: productId,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.status == 'RESULT_OK') {
                            var html = '<li class="comment_ask" id="26153647">'
                                            + '<div class="rowuser">'
                                                + '<a href="javascript:void(0)">'
                                                    + '<div>' + username.substring(0, 1) + '</div>'
                                                    + '<strong>' + username + '</strong>'
                                                + '</a>'
                                            + '</div>'
                                            + '<div class="question">' + comment + ' </div>'
                                            + '<div class="actionuser" data-cl="0">'
                                                + '<a href="javascript:void(0)" class="time">' + response.data.created_at + '</a>'
                                            + '</div>'
                                        + '</li>'
                            jQuery('.listcomment').prepend(html);
                            jQuery('.textarea-comment').val('');
                            jQuery('.totalcomment').html(response.data.count_comment + ' Bình Luận');
                            grecaptcha.reset();
                            jQuery('.ajaxcomment').removeClass('hide');
                            jQuery('.wrap_popup_success').animate({opacity: 1}, 1000).animate({opacity: 0}, 3000);
                            setTimeout(function () {
                                jQuery('.ajaxcomment').addClass('hide');
                            }, 3000);
                        }
                        if (response.recaptcha == 1) {
                            recaptchaEnable = true;
                            jQuery('.recaptcha').append('<div class="g-recaptcha" data-sitekey="6LfqZk8UAAAAAJxIt67mrAfeKwTFy0Zv0rkDATFn"></div>');
                        }
                    }
                });
            }
        }
        jQuery(document).ready(function(){
            jQuery('table').addClass('table').addClass('table-bordered');
        });
        function changeColor(img) {
            jQuery('#thetable img').attr('src', img);
        }

        function changeColorTop(img) {
            jQuery('#product-avatar img').attr('src', img);
        }

        jQuery(document).ready(function () {
            jQuery('.chitiet.active').click();
        });
    </script>
@endsection
@endsection
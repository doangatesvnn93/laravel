@extends('master')
@section('pageTitle')
    Chi tiết sản phẩm
@endsection
@section('content')
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
                            <img src="{{ $productData->avatar }}">
                        </div>
                    </div>
                    <div class="col-sm-5 item-top" style="margin-top: 50px;">
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
                            <?php $dataColor = json_decode($productData->color_product_data); ?>
                            @if (!empty($dataColor))
                                @foreach($dataColor as $key => $itemColor)
                                     <div class="col-sm-12">
                                        <span class="chitiet @if ($key == 0)active @endif" onclick="changeColorTop('{{ $itemColor->product }}')">
                                            <img src="{{ $itemColor->color }}" width="100" height="30"> {{ $itemColor->name }}
                                        </span>
                                     </div>
                                @endforeach
                            @endif
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
                                            <img src="/themes/page/images/icons/icon-skype.jpg"> Mr Đoàn: 0164.651.8107
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="skype:doangatesvnn93?chat" title="Nguyễn Văn Đoàn" rel="nofollow">
                                            <img src="/themes/page/images/icons/icon-skype.jpg"> Mr Đoàn: 0164.651.8107
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="skype:doangatesvnn93?chat" title="Nguyễn Văn Đoàn" rel="nofollow">
                                            <img src="/themes/page/images/icons/icon-skype.jpg"> Mr Đoàn: 0164.651.8107
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
                        <?php echo htmlspecialchars_decode($productData->content); ?>
                    </div>
                    <div class="panel" id="tab-reviews">
                        <p>No Reviews</p>
                    </div>
                </div>
                <div class="space50">&nbsp;</div>
                <div class="beta-products-list">
                    <h4>Related Products</h4>

                    <div class="row">
                        @if($listProductRelate)
                            @foreach($listProductRelate as $product)
                                <div class="col-sm-4">
                                    <div class="single-item">
                                        <div class="single-item-header">
                                            <a href="{{route('detail', ['slug' => $product->slug])}}">
                                                <img src="{{$product->avatar}}" alt="" width="350" height="200">
                                            </a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">{{$product->name}}</p>
                                            <p class="single-item-price">
                                                <span>{{number_format($product->price)}}</span>
                                            </p>
                                        </div>
                                        <div class="single-item-caption">
                                            <a class="add-to-cart" href="product.html"><i class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="{{route('detail', ['slug' => $product->slug])}}">Details <i class="fa fa-chevron-right"></i></a>
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
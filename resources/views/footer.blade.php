<div id="">
    <div id="footer" class="color-div">
    <div class="contact">
        <div class="center-content clearfix">
            <div class="hotline">
                <h2>Hotline hỗ trợ</h2>
                <p class="desc">Gọi để được tư vấn về sản phẩm, dịch vụ:</p>

                <p class="number"><span><a style="color:#ed1b2f;" href="tel:+84982007817" target="_blank">0982007817</a></span></p>
                <div class="line"></div>
                <p class="number"><a href="#" title="" class="fancyboxContact"><span>phucntt@gmail.com</span></a></p>
            </div>
            <div class="rss newsletter">
                <h2>Đăng ký nhận tin</h2>
                <p class="desc">Những thông tin về sản phẩm mới, sự kiện và khuyến mãi</p>
                <input type="hidden" name="nr" value="widget">
                <div class="input-group" style="width: 100%">
                    <div class="pull-left col-sm-9 pd0">
                        <input class="newsletter-email" type="email" required="" id="input-email-subscribe" name="email" placeholder="Nhập email của bạn">
                    </div>
                    <div class="pull-left col-sm-3 pd0">
                        <a class="btn btn-danger button-subscribe" href="javascript: void(0);">Đăng ký</a>
                    </div>
                    <div class="col-sm-12 pd0 has-error email-error" style="display: none;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container footer-bottom">
        <div class="row">
            <div class="col-sm-3 logo-footer">
                <img src="/themes/page/images/logo-footer.png">
            </div>
            <div class="col-sm-2">
                <div class="widget">
                    <h4 class="widget-title">Sản phẩm</h4>
                    <div>
                        <ul>
                            @if ($listCategory)
                                @foreach($listCategory as $cat)
                                    <li><a href="{{ route('list') }}?cat={{ $cat->slug }}"><i class="fa fa-chevron-right"></i> {{ $cat->name }}</a></li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="widget">
                    <h4 class="widget-title">PHỤ TÙNG</h4>
                    <div>
                        <ul>
                            <li><a href="javascript: void(0);"><i class="fa fa-chevron-right"></i> Phụ tùng chính hiệu</a></li>
                            <li><a href="javascript: void(0);"><i class="fa fa-chevron-right"></i> Kiến thức phụ tùng</a></li>
                            <li><a href="javascript: void(0);"><i class="fa fa-chevron-right"></i> Tin tức phụ tùng</a></li>
                            <li><a href="javascript: void(0);"><i class="fa fa-chevron-right"></i> Trang phục</a></li>
                            <li><a href="javascript: void(0);"><i class="fa fa-chevron-right"></i> Mũ bảo hiểm</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col-sm-10">
                    <div class="widget">
                        <h4 class="widget-title">Contact Us</h4>
                        <div>
                            <div class="contact-info">
                                <i class="fa fa-map-marker"></i>
                                <p>SN 113 - Đường Lương Văn Thăng</p>
                                <p>Phường Đông Thành - Ninh Bình</p>
                                <p>Phone: <a href="tel:+84982007817" target="_blank">+84 982 007 817</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .row -->
    </div> <!-- .container -->
</div> <!-- #footer -->
</div>
<div class="copyright">
    <div class="container">
        <p class="pull-left">Copyright. &copy; 2018</p>
        <p class="pull-right pay-options">
            <a href="https://www.facebook.com/Honda-Th%E1%BA%AFng-Luy%C3%AAn-641673159370558/?locale2=vi_VN"><img src="/themes/page/images/icons/facebook.png" alt="" /></a>
            <a href="#"><img src="/themes/page/images/icons/youtube.png" alt="" /></a>
        </p>
        <div class="clearfix"></div>
    </div> <!-- .container -->
</div> <!-- .copyright -->

<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="{{route('admin')}}"><i class="fa fa-dashboard fa-fw"></i> Trang chủ</a>
            </li>
            {{--<li>--}}
                {{--<a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>--}}
                {{--<ul class="nav nav-second-level">--}}
                    {{--<li>--}}
                        {{--<a href="flot.html">Flot Charts</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a href="morris.html">Morris.js Charts</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
                {{--<!-- /.nav-second-level -->--}}
            {{--</li>--}}
            <li>
                <a href="{{ route('slider-list') }}"><i class="fa fa-table fa-fw"></i> {{trans('admin.sidebar.slide')}}</a>
            </li>
            <li>
                <a href="{{ route('product-list') }}"><i class="fa fa-edit fa-fw"></i> Sản phẩm</a>
            </li>
            <li>
                <a href="{{ route('category-list') }}"><i class="fa fa-wrench fa-fw"></i> Thể loại</a>
            </li>
            <li>
                <a href="{{ route('comment-list') }}"><i class="fa fa-comments fa-fw"></i> Bình luận</a>
            </li>
            <li>
                <a href="{{ route('article-edit', array('id' => 1)) }}"><span class="glyphicon glyphicon-map-marker fa-fw"></span> Giới thiệu</a>
            </li>
            <li>
                <a href="{{ route('article-edit', array('id' => 2)) }}"><span class="glyphicon glyphicon-earphone fa-fw"></span> Liên hệ</a>
            </li>
            <li>
                <a href="{{ route('article-edit', array('id' => 3)) }}"><span class="glyphicon glyphicon-random fa-fw"></span> Chính sách giao hàng</a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
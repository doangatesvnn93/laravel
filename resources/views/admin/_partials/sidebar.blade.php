<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="{{route('admin')}}"><i class="fa fa-dashboard fa-fw"></i> Trang chủ</a>
            </li>
            <li>
                <a href="{{route('websiteconfig-list')}}"><i class="fa fa-cog fa-fw"></i> Cấu hình website</a>
            </li>
            <li>
                <a href="{{ route('slider-list') }}"><i class="fa fa-table fa-fw"></i> {{trans('admin.sidebar.slide')}}</a>
            </li>
            <li>
                <a href="{{ route('subscribe-list') }}"><i class="fa fa-table fa-fw"></i> Subscribe</a>
            </li>
            <li>
                <a href="{{ route('product-list') }}"><i class="fa fa-edit fa-fw"></i> Sản phẩm</a>
            </li>
            <li>
                <a href="{{ route('category-list') }}"><i class="fa fa-wrench fa-fw"></i> Danh mục</a>
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
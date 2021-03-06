@extends('layouts.admin')
@section('title')
    Sửa sản phẩm
@endsection

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sửa sản phẩm</h1>
            </div>
        </div>
        <form method="post" action="{{ route('product-edit', array('id' => $data->id)) }}">
            <div class="col-sm-12 pd0">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#content1">Nội dung</a></li>
                    <li><a data-toggle="tab" href="#color1">Màu sắc</a></li>
                </ul>

                <div class="tab-content">
                    <div id="content1" class="tab-pane fade in active">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Nội dung
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="col-sm-2"><p>Thể loại</p></div>
                                    <div class="col-sm-4">
                                        <div class="select-control">
                                            <select class="form-control" name="category_id">
                                                @foreach($listCategory as $cat)
                                                    <option value="{{ $cat->id }}" @if($cat->id == $data->category_id) selected @endif>{{ $cat->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">Tên</div>
                                    <div class="col-sm-4">
                                        <input name="name" type="text" class="form-control" value="{{ $data->name }}" required>
                                    </div>
                                    <div class="clearbox"></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-2"><p>Giá</p></div>
                                    <div class="col-sm-4">
                                        <div class="select-control">
                                            <input class="form-control" name="price" value="{{ $data->price }}" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-2"><p>Ảnh đại diện</p></div>
                                    <div class="col-sm-4">
                                        <div class="select-control">
                                            <div class="input-group">
                                                <input id="avatar" class="form-control" type="text" name="avatar" required value="{{ $data->avatar  }}">
                                                <span class="input-group-btn">
                                                        <a data-input="avatar" data-preview="holder-avatar" class="btn btn-primary choose-file">
                                                            <i class="fa fa-picture-o"></i> Chọn
                                                        </a>
                                                    </span>
                                            </div>
                                            <img id="holder-avatar" style="margin-top:15px;max-height:100px;">
                                        </div>
                                    </div>
                                    <div class="clearbox"></div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-2"><p>Trạng thái</p></div>
                                    <div class="col-sm-4">
                                        <div class="select-control">
                                            <select class="form-control" name="status">
                                                <option value="1" @if($data->status == 1)selected @endif>Kích hoạt</option>
                                                <option value="0" @if($data->status == 0)selected @endif>Chờ</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="clearbox"></div>
                                </div>
                                <div class="form-group mgt-10">
                                    <div class="col-sm-2">Content</div>
                                    <div class="col-sm-12">
                                        <textarea name="product_content" class="form-control my-editor" cols="30" rows="15">{{ $data->content }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="color1" class="tab-pane fade">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Color
                            </div>
                            <div class="panel-body">
                                <?php $colorProductData = json_decode($data->color_product_data); ?>
                                <div id="list-product-color">
                                    <div class="form-group">
                                        <div class="col-sm-3">
                                            <div class="col-sm-2 pd0">Màu</div>
                                            <div class="col-sm-10 pd0">
                                                <div class="input-group">
                                                    <input id="thumbnail-0" class="form-control" type="text" name="color[]" value="{{ $colorProductData[0]->color }}">
                                                    <span class="input-group-btn">
                                                        <a data-input="thumbnail-0" data-preview="holder-color-0"
                                                           class="btn btn-primary choose-file">
                                                            <i class="fa fa-picture-o"></i> Chọn
                                                        </a>
                                                    </span>
                                                </div>
                                                <img id="holder-color-0" style="margin-top:15px;max-height:100px;" src="{{ $colorProductData[0]->color }}"  width="80" height="30">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="col-sm-3 pd0"> Màu sản phẩm</div>
                                            <div class="col-sm-9 pd0">
                                                <div class="input-group">
                                                    <input id="product-color-0" class="form-control" type="text" name="productColor[]" value="{{ $colorProductData[0]->product }}">
                                                    <span class="input-group-btn">
                                                         <a data-input="product-color-0" data-preview="holder-product-0"
                                                            class="btn btn-primary choose-file">
                                                           <i class="fa fa-picture-o"></i> Chọn
                                                         </a>
                                                    </span>
                                                </div>
                                                <img id="holder-product-0" style="margin-top:15px;max-height:50px;" src="{{ $colorProductData[0]->product }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="col-sm-2 pd0"> Tên màu</div>
                                            <div class="col-sm-10 pd0">
                                                <input class="form-control" name="nameColor[]" value="{{ $colorProductData[0]->name }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <a href="javascript: void(0);" class="btn btn-default"
                                               onclick="addColorProduct()"><i class="fa fa-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-sm-12 mgb-20">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="text-center">
                    <button type="submit" value="SUBMIT" class="btn btn-success">Lưu</button>
                </div>
            </div>
            <div class="clearfix"></div>
        </form>

    </div>
@endsection
@section('styleFooter')
    <style>
        .form-group {
            overflow: auto;
        }
    </style>
@endsection
@section('script')
    <script>
        var dataColorProduct = JSON.parse(decodeURIComponent('{{ rawurlencode($data->color_product_data) }}'));
        var numberColor = 1;
        $(document).ready(function(){
           if (dataColorProduct) {
               for (var i in dataColorProduct) {
                   if (i > 0) {
                       addColorProduct(dataColorProduct[i]);
                   }
               }
           }
        });
        function addColorProduct(data) {
            numberColor++;
            console.log(data);
            var html = '<div class="form-group product-' + numberColor + '">'
                            + '<div class="col-sm-3">'
                                + '<div class="col-sm-2 pd0">Màu</div>'
                                + '<div class="col-sm-10 pd0">'
                                    + '<div class="input-group">'
                                        + '<input id="thumbnail-' + numberColor + '" class="form-control" type="text" name="color[]" value="' + data.color + '">'
                                        + '<span class="input-group-btn">'
                                            + '<a data-input="thumbnail-' + numberColor + '" data-preview="holder-color-' + numberColor + '" class="btn btn-primary choose-file">'
                                                + '<i class="fa fa-picture-o"></i> Chọn'
                                            + '</a>'
                                        + '</span>'
                                    + '</div>'
                                    + '<img id="holder-color-' + numberColor + '" style="margin-top:15px;max-height:100px;" src="' + data.color + '" width="80" height="30">'
                                + '</div>'
                            + '</div>'
                            + '<div class="col-sm-4">'
                                + '<div class="col-sm-3 pd0"> Màu sản phẩm</div>'
                                + '<div class="col-sm-9 pd0">'
                                    + '<div class="input-group">'
                                        + '<input id="product-color-' + numberColor + '" class="form-control" type="text" name="productColor[]" value="' + data.product + '">'
                                        + '<span class="input-group-btn">'
                                            + '<a data-input="product-color-' + numberColor + '" data-preview="holder-product-' + numberColor + '" class="btn btn-primary choose-file">'
                                                + '<i class="fa fa-picture-o"></i> Chọn'
                                            + '</a>'
                                        + '</span>'
                                    + '</div>'
                                    + '<img id="holder-product-' + numberColor + '" style="margin-top:15px;max-height:50px;" src="' + data.product + '">'
                                + '</div>'
                            + '</div>'
                            + '<div class="col-sm-4">'
                                + '<div class="col-sm-2 pd0"> Tên màu</div>'
                                + '<div class="col-sm-10 pd0">'
                                    + '<input class="form-control" name="nameColor[]" value="' + data.name + '">'
                                + '</div>'
                            + '</div>'
                            + '<div class="col-sm-1">'
                                + '<a href="javascript: void(0);" class="btn btn-default" onclick="removeColor(\'' + numberColor + '\')"><i class="fa fa-trash"></i></a>'
                            + '</div>'
                        + '</div>';
            $('#list-product-color').append(html);
            $('.choose-file').filemanager('image', {prefix: domain});
        }

        function removeColor(number) {
            var classRemove = 'product-' + number;
            $('.' + classRemove).remove();
        }
    </script>
    <script src="/tinymce/tinymce.min.js"></script>
    <script>
        var editor_config = {
            path_absolute : "/",
            selector: "textarea.my-editor",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt",
            toolbar: "insertfile undo redo | styleselect | bold italic strikethrough forecolor backcolor fontselect fontsizeselect | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
            file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                });
            }
        };

        tinymce.init(editor_config);
    </script>
    <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
    <script>
        var domain = "";
        $('.choose-file').filemanager('image', {prefix: domain});
    </script>
@endsection
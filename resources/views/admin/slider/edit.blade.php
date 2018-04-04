@extends('layouts.admin')
@section('title')
    Sửa - Slider
@endsection
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sửa - Slider</h1>
            </div>
        </div>
        <div class="col-sm-12 pd0">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Sửa Slider
                </div>
                <div class="panel-body">
                    <form method="post" action="{{ route('slider-edit', array('id' => $slide->id)) }}">
                        <div class="form-group">
                            <div class="col-sm-3">Tên</div>
                            <div class="col-sm-9">
                                <input name="name" type="text" class="form-control" value="{{ $slide->name }}">
                                @if(isset($error->name) && $error->name)
                                    <span class="has-error">Name là bắt buộc</span>
                                @endif
                            </div>
                            <div class="clearbox"></div>
                        </div>

                        <div class="form-group mgt-10">
                            <div class="col-sm-3">Ảnh</div>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input id="thumbnail" class="form-control" type="text" name="link" required value="{{ $slide->link }}">
                                    <span class="input-group-btn">
                                     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                       <i class="fa fa-picture-o"></i> Choose
                                     </a>
                                   </span>
                                </div>
                                <img id="holder" style="margin-top:15px;max-height:100px;">
                                @if(isset($error->link) && $error->link)
                                    <span class="has-error">Link là bắt buộc</span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-3">Trạng thái</div>
                            <div class="col-sm-9">
                                <div class="select-control">
                                    <select class="form-control" name="status">
                                        <option value="1" @if ($slide->status == 1)selected @endif>Kích hoạt</option>
                                        <option value="0" @if ($slide->status == 0)selected @endif>Chờ</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="text-center">
                            <button type="submit" value="SUBMIT" class="btn btn-success">Lưu</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
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
    <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
    <script>
        var domain = "";
        $('#lfm').filemanager('image', {prefix: domain});
    </script>
@endsection
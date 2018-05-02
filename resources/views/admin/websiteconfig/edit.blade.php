@extends('layouts.admin')
@section('title')
    Cấu hình Website
@endsection

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Cấu hình Website</h1>
            </div>
        </div>
        <div class="col-sm-12 pd0">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Cấu hình Website
                </div>
                <div class="panel-body">
                    <form method="post" action="{{ route('websiteconfig-edit', array('id' => $data->id)) }}">
                        @php $dataContent = json_decode($data->content); @endphp
                        <div class="form-group">
                            <div class="col-sm-2">Địa chỉ</div>
                            <div class="col-sm-10">
                                <input name="address" type="text" class="form-control" required value="{{ $dataContent->address }}">
                            </div>
                            <div class="clearbox"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2">Số điện thoại</div>
                            <div class="col-sm-10">
                                <input name="phone" type="text" class="form-control" required value="{{ $dataContent->phone }}">
                            </div>
                            <div class="clearbox"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2">Email</div>
                            <div class="col-sm-10">
                                <input name="email" type="email" class="form-control" required value="{{ $dataContent->email }}">
                            </div>
                            <div class="clearbox"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2">Số tài khoản</div>
                            <div class="col-sm-10">
                                <input name="cardNumber" type="text" class="form-control" required value="{{ $dataContent->card_number }}">
                            </div>
                            <div class="clearbox"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2">Ngân hàng</div>
                            <div class="col-sm-10">
                                <input name="bank" type="text" class="form-control" required value="{{ $dataContent->bank }}">
                            </div>
                            <div class="clearbox"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2">Mô tả Website</div>
                            <div class="col-sm-10">
                                <textarea name="description" type="text" class="form-control" required rows="7">{{ $dataContent->description ? $dataContent->description : '' }}</textarea>
                            </div>
                            <div class="clearbox"></div>
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
        var domain = "/laravel-filemanager";
        $('#lfm').filemanager('image', {prefix: domain});
    </script>
@endsection
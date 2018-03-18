@extends('master')
@section('pageTitle')
    Lỗi
@endsection
@section('content')
    <div class="container">
        <h1 style="margin-bottom: 10px;"><font face="Tahoma" color="red">Error 404</font></small></h1>
        <h1 style="margin-top: 10px;">Có lỗi xảy ra hoặc trang không tồn tại</h1>
        <div class="text-center mgb-20">
            <a href="{{ route('landing') }}" class="btn btn-large btn-info"><i class="icon-home icon-white"></i> Trở về trang chủ</a>
        </div>
    </div>
@endsection
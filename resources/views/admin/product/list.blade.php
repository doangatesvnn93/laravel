@extends('layouts.admin')
@section('title')
    Danh sách sản phẩm
@endsection
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-6 pdl-0">
                    <a href="{{ route('product-create') }}" class="btn btn-success">Thêm sản phẩm</a>
                </div>
                <div class="col-sm-6 pdr-0">
                    <div class="text-right">{{ $listProduct->links() }}</div>
                </div>

                <table class="table">
                    <thead>
                    <tr>
                        <th width="30" class="text-center">#</th>
                        <th class="text-center">Tên</th>
                        <th class="text-center">Ảnh đại diện</th>
                        <th class="text-center">Trạng thái</th>
                        <th class="text-center">Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($listProduct as $key => $product)
                        <tr>
                            <td class="text-center">{{ $key + 1 }}</td>
                            <td class="text-center" style="text-transform: capitalize;">
                                <a href="{{ route('product-edit', array('id' => $product->id)) }}"> {{ $product->name }} </a>
                            </td>
                            <td class="text-center"><img src="{{ $product->avatar }}" width="100" height="70"> </td>
                            <td class="text-center">
                                @if ($product->status == 1)
                                    <span class="label label-success">Kích hoạt</span>
                                @else
                                    <span class="label label-danger">Chờ</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="javascript: void(0);" class="destroy btn btn-danger" data-url="{{ route('product-delete', array('id' => $product->id)) }}" data-id="{{ $product->id }}">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="text-right pdr-0">{{ $listProduct->links() }}</div>
            </div>
        </div>
    </div>
@endsection
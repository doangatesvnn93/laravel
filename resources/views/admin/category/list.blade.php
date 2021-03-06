@extends('layouts.admin')
@section('title')
    Danh sách - Thể loại
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
                    <a href="{{ route('category-create') }}" class="btn btn-success">Tạo mới</a>
                </div>
                <div class="col-sm-6 pdr-0">
                    <div class="text-right">{{ $listCategory->links() }}</div>
                </div>

                <table class="table">
                    <thead>
                    <tr>
                        <th width="30" class="text-center">#</th>
                        <th class="text-center">Tên</th>
                        <th class="text-center">Trạng thái</th>
                        <th class="text-center">Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($listCategory as $key => $cat)
                        <tr>
                            <td class="text-center">{{ $key + 1 }}</td>
                            <td class="text-center" style="text-transform: capitalize;">
                                <a href="{{ route('category-edit', array('id' => $cat->id)) }}"> {{ $cat->name }} </a>
                            </td>
                            <td class="text-center">
                                @if ($cat->status== 1)
                                    <span class="label label-success">Active</span>
                                @else
                                    <span class="label label-danger">Inactive</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="javascript: void(0);" class="destroy btn btn-danger" data-url="{{ route('category-delete', array('id' => $cat->id)) }}" data-id="{{ $cat->id }}">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="text-right pdr-0">{{ $listCategory->links() }}</div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.admin')
@section('title')
    Danh sách - bình luận
@endsection
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách bình luận</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th width="30" class="text-center">#</th>
                        <th class="text-center">Tên</th>
                        <th class="text-center">Sản phẩm</th>
                        <th class="text-center">Bình luận</th>
                        <th class="text-center">Thời gian</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if ($listComment)
                        @foreach($listComment as $key => $comment)
                            <tr>
                                <td class="text-center">{{ $key + 1 }}</td>
                                <td class="text-center">{{ $comment->username }}</td>
                                <td class="text-center"><a href="{{ route('detail', array('slug' => $comment->slug)) }}">{{ $comment->name }}</a></td>
                                <td class="text-center">{{ $comment->comment }}</td>
                                <td class="text-center">{{ date('Y-m-d H:i:s', strtotime($comment->created_at)) }}</td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.admin')
@section('title')
    Admin
@endsection
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">{{trans('admin.dashboard.title')}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <h3>Đơn hàng</h3>
            </div>
            <div class="col-sm-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th width="30" class="text-center">#</th>
                        <th>Tên khách hàng</th>
                        <th>Tổng tiền</th>
                        <th>Chi tiết</th>
                        <th width="30">Thanh toán</th>
                        <th>Ngày đặt</th>
                        <th>SĐT</th>
                        <th width="30">Giới tính</th>
                        <th>Email</th>
                        <th width="120">Ghi chú</th>
                        <th width="100">Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($billData)
                        @foreach($billData as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td><b>{{ number_format($item->total_amount) }}đ</b></td>
                                <td>
                                    @php $dataDetail = json_decode($item->data) @endphp
                                    @if ($dataDetail)
                                        @foreach($dataDetail as $k => $v)
                                            <div class="card-item">
                                                <div class="pull-left">
                                                    <div>Tên: <b>{{ $v->name }}</b></div>
                                                    <div>Số lượng: <b>{{ $v->qty }}</b></div>
                                                    <div>Giá: {{ number_format($v->price) }}</div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </td>
                                <td>{{ $item->type_payment }}</td>
                                <td>{{ date('d-m-Y'), strtotime($item->created_at) }}</td>
                                <td>{{ $item->phone }}</td>
                                <td style="text-transform: capitalize;">{{ $item->gender }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->note }}</td>
                                <td>
                                    <a href="javascript: void(0);" title="Hoàn thành đơn hàng" class="btn btn-success"
                                       onclick="updateBill(this)" data="{{ $item->id }}" data-type="success"><i
                                                class="fa fa-check"></i>
                                    </a>
                                    <a href="javascript: void(0);" title="Xóa" class="btn btn-danger"
                                       onclick="updateBill(this)" data="{{ $item->id }}" data-type="remove"><i
                                                class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        var updateBill = function (element) {
            var id = jQuery(element).attr('data'),
                type = jQuery(element).attr('data-type'),
                status = 1;
            var updateBill = function () {
                jQuery.ajax({
                    type: 'POST',
                    url: '{{ route('bill-update') }}',
                    data: {
                        id: id,
                        status: status,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    beforeSend: function () {
                        commons.loading.show();
                    },
                    success: function (response) {
                        commons.refresh();
                    }
                });
            }
            if (type == 'remove') {
                status = 2;
                commons.confirmDialog.show('Xóa đơn hàng', 'Bạn có chắc chắn muốn xóa ?', updateBill);
            } else if (type == 'success'){
                updateBill;
            }


        }
        jQuery(document).ready(function () {

        });
    </script>
@endsection
@extends('layouts.admin')
@section('title')
    Danh sách-Subscribe
@endsection
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Danh sách Subscribe</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="text-right">{{ $data->links() }}</div>

                <table class="table">
                    <thead>
                    <tr>
                        <th width="50" class="text-center">#</th>
                        <th class="">Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $key => $value)
                        <tr>
                            <td class="text-center">{{ $key + 1 }}</td>
                            <td>
                               {{ $value->email }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="text-right pdr-0">{{ $data->links() }}</div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.admin')
@section('title')
    List Config
@endsection
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">List Config</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-6 pdl-0">
                    <a href="{{ route('websiteconfig-create') }}" class="btn btn-success">Create</a>
                </div>
                <div class="col-sm-6 pdr-0">
                    <div class="text-right">{{ $data->links() }}</div>
                </div>

                <table class="table">
                    <thead>
                    <tr>
                        <th width="30" class="text-center">#</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $key => $item)
                        @php $dataItem = json_decode($item->content) @endphp
                        <tr>
                            <td class="text-center">{{ $key + 1 }}</td>
                            <td class="text-center" style="text-transform: capitalize;">
                                <a href="{{ route('websiteconfig-edit', array('id' => $item->id)) }}"> Edit </a>
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
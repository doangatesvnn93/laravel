@extends('layouts.admin')
@section('title')
    List-Slider
@endsection
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">List</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-6 pdl-0">
                    <a href="{{ route('slider-create') }}" class="btn btn-success">Create</a>
                </div>
                <div class="col-sm-6 pdr-0">
                    <div class="text-right">{{ $listSlider->links() }}</div>
                </div>

                <table class="table">
                    <thead>
                    <tr>
                        <th width="30" class="text-center">#</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Image</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($listSlider as $key => $slide)
                        <tr>
                            <td class="text-center">{{ $key + 1 }}</td>
                            <td class="text-center" style="text-transform: capitalize;">
                                <a href="{{ route('slider-edit', array('id' => $slide->id)) }}"> {{ $slide->name }} </a>
                            </td>
                            <td class="text-center"><img src="{{ $slide->link }}" width="100" height="70"> </td>
                            <td class="text-center"><span class="label label-success">Active</span> </td>
                            <td class="text-center">
                                <a href="javascript: void(0);" class="destroy btn btn-danger">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="text-right pdr-0">{{ $listSlider->links() }}</div>
            </div>
        </div>
    </div>
@endsection
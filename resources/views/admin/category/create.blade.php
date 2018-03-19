@extends('layouts.admin')
@section('title')
    Create-Slider
@endsection

@section('content')
    <div id="page-wrapper">
        <form method="post" action="{{ route('category-create') }}">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Create Category</h1>
                </div>
            </div>
            <div class="col-sm-12 pd0">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Create Category
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="col-sm-6">
                                <div class="col-sm-2">Name</div>
                                <div class="col-sm-10">
                                    <input name="name" class="form-control" required value="{{ isset($name) ? $name : '' }}" >
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="col-sm-2">Status</div>
                                <div class="col-sm-10">
                                    <div class="select-control">
                                        <select class="form-control" name="status">
                                            <option value="1" {{ isset($status) && $status == 1 ? 'selected' : '' }}>Active</option>
                                            <option value="0" {{ isset($status) && $status == 0 ? 'selected' : '' }}>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 mgb-20">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="text-center">
                    <button type="submit" value="SUBMIT" class="btn btn-success">SUBMIT</button>
                </div>
            </div>
            <div class="clearfix"></div>
        </form>

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
@endsection
@extends('layouts.admin')
@section('title')
    Website Config
@endsection

@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Website Config</h1>
            </div>
        </div>
        <div class="col-sm-12 pd0">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Website Config
                </div>
                <div class="panel-body">
                    <form method="post" action="{{ route('websiteconfig-create') }}">
                        <div class="form-group">
                            <div class="col-sm-2">Address</div>
                            <div class="col-sm-10">
                                <input name="address" type="text" class="form-control" required>
                            </div>
                            <div class="clearbox"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2">Phone Number</div>
                            <div class="col-sm-10">
                                <input name="phone" type="text" class="form-control" required>
                            </div>
                            <div class="clearbox"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2">Email</div>
                            <div class="col-sm-10">
                                <input name="email" type="email" class="form-control" required>
                            </div>
                            <div class="clearbox"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2">Our Newsletter</div>
                            <div class="col-sm-10">
                                <textarea name="newsletter" type="text" class="form-control" required rows="7"></textarea>
                            </div>
                            <div class="clearbox"></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-2">Description</div>
                            <div class="col-sm-10">
                                <textarea name="description" type="text" class="form-control" required rows="7"></textarea>
                            </div>
                            <div class="clearbox"></div>
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="text-center">
                            <button type="submit" value="SUBMIT" class="btn btn-success">Save</button>
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
    <script>
        jQuery('#select-language').change(function () {
            var url = '{{ route(\Request::route()->getName()) }}',
                language = jQuery(this).val();
            if (url && language) {
                commons.gotoUrl(url + '?lang=' + language);
            }
        })
    </script>
    <script src="/vendor/laravel-filemanager/js/lfm.js"></script>
    <script>
        var domain = "/laravel-filemanager";
        $('#lfm').filemanager('image', {prefix: domain});
    </script>
@endsection
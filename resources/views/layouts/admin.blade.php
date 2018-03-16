<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="/themes/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/themes/admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/themes/admin/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/themes/admin/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/themes/admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="/themes/admin/css/style.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div id="wrapper">
    @if (session('status'))
        @if (session('status') == 'success')
            <div class="alert alert-success alert-message">{{session('flash-message')}}</div>
        @endif
        @if (session('status') == 'fail')
            <div class="alert alert-warning alert-message">{{session('flash-message')}}</div>
        @endif
    @endif
    @include('admin._partials.header')
    @yield('content')
</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="/themes/admin/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/themes/admin/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="/themes/admin/vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="/themes/admin/vendor/raphael/raphael.min.js"></script>
<script src="/themes/admin/vendor/morrisjs/morris.min.js"></script>
<script src="/themes/admin/js/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="/themes/admin/js/sb-admin-2.js"></script>
<script>
    @if (session('status'))
        setInterval(function () {
            $('.alert-message').hide();
        }, 1000);
    @endif
</script>
@yield('styleFooter')

@yield('script')
</body>

</html>

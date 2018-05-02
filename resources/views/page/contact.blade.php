@extends('master')
@section('pageTitle')
    Liên hệ
@endsection
@section('content')
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Contacts</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="{{ route('landing') }}">Home</a> / <span>Contacts</span>
            </div>
        </div>
        <div class="clearfix"></div>
        <?php echo htmlspecialchars_decode($dataContact->content); ?>
    </div>
</div>
<div class="beta-map">

    <div class="abs-fullwidth beta-map wow flipInX">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3742.925997976377!2d105.9675222142952!3d20.26190361889066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313679fdf4162401%3A0x2b1013fded00a586!2zSG9uZGEgVGjhuq9uZyBMdXnDqm4!5e0!3m2!1svi!2s!4v1522743987205" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</div>
<div class="container">
    <div id="content" class="space-top-none">
        <div class="space50">&nbsp;</div>
    </div>
</div>

@endsection
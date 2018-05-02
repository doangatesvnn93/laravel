@extends('master')
@section('pageTitle')
    Giới thiệu
@endsection
@section('content')
    <div class="container mgt-10 mgb-10">
       <?php echo htmlspecialchars_decode($dataAboutUs->content); ?>
    </div>
@endsection
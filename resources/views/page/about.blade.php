@extends('master')
@section('pageTitle')
    Giới thiệu
@endsection
@section('content')
    <div class="container">
       <?php echo htmlspecialchars_decode($dataAboutUs->content); ?>
    </div>
@endsection
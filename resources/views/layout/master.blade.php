<!DOCTYPE html>
<html lang="tw">
<head>
    <title>日記系統</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-submenu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/op_block.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
    @section('style')
    @show
</head>
<body>
    <div id="main_body" class="container-fluid">
        @yield('main_content')
    </div>

    @section('script')
        <script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/bootstrap-submenu.js')}}"></script>
        <script>
            $(function() {
                $('#main_body').css('height', $(window).height());
            });
        </script>
    @show
</body>


<!-- 指定繼承 layout.master 母模板 -->
@extends('layout.master')

@section('style')
    <style>

    </style>
@endsection

<!-- 傳送資料到母模板，並指定變數為 content -->
@section('main_content')
    <div class="row justify-content-center align-items-center py-4 row_1">
        <div class="col-md-4">
            選擇日期(月曆)
        </div>
        <div class="col-md-6">
            寫日記的地方
        </div>
    </div>
@endsection

@section('script')
    @parent
    <script>
        $(function() {
            $('#login_name').focus();
            $('.row_1').css('height', $(window).height());
        });
    </script>
@endsection

<!-- 指定繼承 layout.master 母模板 -->
@extends('layout.master')

@section('style')
    <link rel="stylesheet" href="{{asset('packages/calendar2/css/pignose.calendar.min.css')}}">
    <style>

    </style>
@endsection

<!-- 傳送資料到母模板，並指定變數為 content -->
@section('main_content')
    <div class="row">
        <div class="col" style="text-align: right;">
            <span style="font-size: 20px;">test</span>
        </div>
    </div>
    <div class="row justify-content-center align-items-center py-4" id="row_content">
        <div class="col-md-6">
            <div class="year-calendar pb-0"></div>
        </div>
        <div class="col-md-6">
            寫日記的地方
        </div>
    </div>
@endsection

@section('script')
    @parent
    <script type="text/javascript" src="{{asset('packages/calendar2/js/moment.latest.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('packages/calendar2/js/semantic.ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('packages/calendar2/js/prism.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('packages/calendar2/js/pignose.calendar.min.js')}}"></script>
    <script>
        $(function() {
            let today = '{{ $today }}';

            //取得日記內容
            function getBiaryContent(date) {

            }

            //清除日記內容
            function clearBiaryContent() {

            }

            $('#login_name').focus();
            $('#row_content').css('height', $(window).height()- 32);

            "use strict";
            $('.year-calendar').pignoseCalendar({
                theme: 'blue', // light, dark, blue
                lang:'ch',
                format: 'YYYY-MM-DD',
                scheduleOptions: {
                    colors: {
                        ad: '#2fabb7'
                    }
                },
                schedules: [
                    {
                        name: 'ad',
                        date: '2020-05-30'
                    }
                ],
                init: function() {
                    //console.log(today);
                    //初始化
                    getBiaryContent(today);
                },
                select: function(date) {
                    //點選日期
                    if(date[0] !== null) {
                        //console.log(date[0]['_i']);
                        //取得日記內容
                        let select_date = date[0]['_i'];
                        getBiaryContent(select_date);
                    } else {
                        //console.log('null');
                        //清除日記內容
                        clearBiaryContent();
                    }
                }
            });
        });
    </script>
@endsection

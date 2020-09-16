<!-- 指定繼承 layout.master 母模板 -->
@extends('layout.master')

@section('style')
    <style>
        #line-login img {
            left: 0;
            vertical-align: middle;
        }
        .card-header {
            font-size: 20px;
            font-weight:bold;
        }
    </style>
@endsection

<!-- 傳送資料到母模板，並指定變數為 content -->
@section('main_content')
    <div class="row justify-content-center align-items-center py-4 row_1">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">登入</div>

                <div class="card-body">
                    <div id="results" class="form-group"><div class="alert">請用帳號密碼登入</div></div>
                    <form method="post" id="login_form" action="{{asset('login/login_process')}}">
                        @csrf
                        <div class="form-group row">
                            <label for="login_act" class="col-sm-4 col-form-label text-md-right">
                                帳號：
                            </label>

                            <div class="col-md-6">
                                <input type="text"
                                       name="login_act"
                                       id="login_act"
                                       class="form-control"
                                       maxlength="10"
                                       placeholder="請輸入帳號"
                                       value="{{ old('login_name') }}"
                                />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="login_pwd" class="col-sm-4 col-form-label text-md-right">
                                密碼：
                            </label>

                            <div class="col-md-6">
                                <input type="password"
                                       name="login_pwd"
                                       id="login_pwd"
                                       class="form-control"
                                       placeholder="請輸入密碼"
                                />
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8 offset-md-4">
                                <input type="submit" id="admin_login" class="btn btn-primary" value="登入" />

                                <a class="btn btn-link" href="">
                                    <a href="javascript:void(0)">忘記密碼?</a>
                                </a>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <a href="{{ asset('login/create') }}">創建帳號</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
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

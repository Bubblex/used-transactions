@extends('master.master')

@section('body-class', 'hold-transition login-page')

@section('vendor-style')
  @parent
  <link rel="stylesheet" href="/adminlte/plugins/iCheck/square/blue.css">
@endsection

@section('vendor-script')
  @parent
  <script src="/adminlte/plugins/iCheck/icheck.min.js"></script>
@endsection

@section('page-script')
  @parent
  <script>
    $(function () {
      $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%'
      });
    });
  </script>
@endsection

@section('main')
  <div class="login-box">
    <div class="login-logo">
      <a href="/admin"><b>校园二手交易网</b></a>
    </div>
    <div class="login-box-body">
      <p class="login-box-msg">登录后台管理系统</p>
      <form action="/admin/login" method="POST">
        {!! csrf_field() !!}
        @if (session('message'))
          <div class="form-group has-feedback has-error">
        @else
          <div class="form-group has-feedback">
        @endif
          <input name="account" type="text" class="form-control" placeholder="用户名">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        @if (session('message'))
          <div class="form-group has-feedback has-error">
        @else
          <div class="form-group has-feedback">
        @endif
          <input name="password" type="password" class="form-control" placeholder="密码">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          @if (session('message'))
          <span class="help-block">{{ session('message') }}</span>
          @endif
          <span class="help-block"></span>
        </div>
        <div class="row" style="margin-bottom: 15px;">
          <div class="col-xs-8">
            <div class="checkbox icheck" style="margin-top: 5px; margin-bottom: 0;">
              <label>
                <input type="checkbox" name="remember"><span style="vertical-align: middle; margin-left: 16px;">记住我</span>
              </label>
            </div>
          </div>
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">登录</button>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection
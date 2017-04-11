@extends('master.master')

@section('body-class', 'hold-transition login-page')

@section('main')
  <div class="login-box">
    <div class="login-logo">
      <a href="/admin"><b>校园二手交易网</b></a>
    </div>
    <div class="login-box-body">
      <p class="login-box-msg">登录后台管理系统</p>
      <form action="/admin/login" method="post">
        <div class="form-group has-feedback">
          <input type="email" class="form-control" placeholder="Email">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox"> Remember Me
              </label>
            </div>
          </div>
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
        </div>
      </form>
      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
          Facebook</a>
        <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
          Google+</a>
      </div>
      <a href="#">I forgot my password</a><br>
      <a href="register.html" class="text-center">Register a new membership</a>
    </div>
  </div>
@endsection

{{-- 
@section('main')
  @if (session('message'))
    <div>{{ session('message') }}</div>
  @endif

  <form method="POST" action="/admin/login">
    {!! csrf_field() !!}

    <div>
      用户名
      <input type="text" name="account" value="{{ old('email') }}">
    </div>

    <div>
      密码
      <input type="password" name="password" id="password">
    </div>

    <div>
      <input type="checkbox" name="remember"> Remember Me
    </div>

    <div>
      <button type="submit">登录</button>
    </div>
  </form> --}}
{{-- @endsection --}}
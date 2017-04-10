@extends('master.master')

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
  </form>
@endsection
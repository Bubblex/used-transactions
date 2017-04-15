@extends('master.dashboard')

@section('page-header', '修改个人资料')

@section('breadcrumb')
  @parent
  <li><a href="/admin/info">个人资料</a></li>
  <li class="active">修改个人资料</li>
@endsection

@section('content')
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">修改个人资料</h3>
    </div>
    <form method="POST" action="/admin/info/update" enctype="multipart/form-data">
      {!! csrf_field() !!}
      <div class="box-body">
        <div class="form-group">
          <label>昵称</label>
          <input name="nickname" value="{{ $admin->nickname }}" type="text" class="form-control" placeholder="请输入昵称">
        </div>
        @if (session('error_password'))
          <div class="form-group has-error">
        @else
          <div class="form-group">
        @endif
          <label>密码</label>
          <input name="password" type="password" class="form-control" placeholder="请输入原密码">
          <span class="help-block">
            @if (session('error_password'))
              {{ session('error_password') }}
            @endif
          </span>
        </div>
        @if (session('error_inconsistent'))
          <div class="form-group has-error">
        @else
          <div class="form-group">
        @endif
          <label>新密码</label>
          <input name="new_password" type="password" class="form-control" placeholder="请输入新密码">
        </div>
        @if (session('error_inconsistent'))
          <div class="form-group has-error">
        @else
          <div class="form-group">
        @endif
          <label>确认密码</label>
          <input name="confirm_password" type="password" class="form-control" placeholder="请确认密码">
          <span class="help-block">
            @if (session('error_inconsistent'))
              {{ session('error_inconsistent') }}
            @endif
          </span>
        </div>
        <div class="form-group">
          <label>上传头像</label>
          <input type="file" name="avatar" accept="image/*">
          <p class="help-block">请上传分辨率为300x300的图片</p>
        </div>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">提交</button>
      </div>
    </form>
  </div>
@endsection
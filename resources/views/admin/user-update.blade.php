@extends('master.dashboard')

@section('page-header', '修改用户资料')

@section('user-manage-class', 'active')

@section('breadcrumb')
  @parent
  <li><a href="/admin/user">用户列表</a></li>
  <li><a href="/admin/user/detail?id={{ $user->id }}">用户详情</a></li>
  <li class="active">修改用户资料</li>
@endsection

@section('content')
  @if (session('success'))
    <div class="callout callout-success">
      <h4>修改成功</h4>
      <p>您已成功修改个人资料</p>
    </div>
  @endif
  <div class="box">
    <div class="box-body">
      <div style="width: 50%" class="tab-pane" id="settings">
        <form method="POST" action="/admin/user/update" class="form-horizontal" enctype="multipart/form-data">
          {!! csrf_field() !!}
          <input type='hidden' name="id" value="{{ $user->id }}" />
          <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">账户：</label>
            <div class="col-sm-10">
              <p class="form-control-static">{{ $user->account }}</p>
            </div>
          </div>
          @if (session('nickname'))
            <div class="form-group has-error">
          @else
            <div class="form-group">
          @endif
            <label class="col-sm-2 control-label">昵称：</label>
            <div class="col-sm-10">
              <input name="nickname" type="text" value="{{ $user->nickname }}" class="form-control" placeholder="请输入昵称">
              <span class="help-block">
                @if (session('nickname'))
                  {{ session('nickname') }}
                @endif
              </span>
            </div>
          </div>
          <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">账户状态：</label>
            <div class="col-sm-10">
              <select name="status" class="form-control" placeholder="请选择用户状态">
                <option
                  value="1"
                  @if ($user->status == "1")
                    selected
                  @endif
                >
                  正常
                </option>
                <option
                  value="2"
                  @if ($user->status == "2")
                    selected
                  @endif
                >
                  禁用
                </option>
              </select>
            </div>
          </div>
          @if (session('telephone'))
            <div class="form-group has-error">
          @else
            <div class="form-group">
          @endif
            <label class="col-sm-2 control-label">联系方式：</label>
            <div class="col-sm-10">
              <input name="telephone" type="text" value="{{ $user->telephone }}" class="form-control" placeholder="请输入联系方式" />
              <span class="help-block">
                @if (session('telephone'))
                  {{ session('telephone') }}
                @endif
              </span>
            </div>
          </div>
          <div class="form-group">
            <label for="inputSkills" class="col-sm-2 control-label">头像：</label>
            <div class="col-sm-10">
              <input type="file" name="avatar" accept="image/*">
              <p class="help-block">请上传分辨率为300x300的图片</p>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary" style="margin-right: 8px">保存</button>
              <a href="/admin/user" class="btn btn-primary">取消</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
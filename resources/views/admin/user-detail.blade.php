@extends('master.dashboard')

@section('page-header', '用户详情')

@section('breadcrumb')
  @parent
  <li><a href="/admin">用户列表</a></li>
  <li class="active">用户详情</li>
@endsection

@section('content')
  <div class="box">
    <div class="box-body">
      <div style="width: 50%" class="tab-pane" id="settings">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="inputName" class="col-sm-3 control-label">编号：</label>
            <p class="form-control-static">{{ $user->id }}</p>
          </div>
          <div class="form-group">
            <label for="inputName" class="col-sm-3 control-label">昵称：</label>
            <p class="form-control-static">{{ $user->nickname }}</p>
          </div>
          <div class="form-group">
            <label for="inputName" class="col-sm-3 control-label">头像：</label>
            <p class="form-control-static"><img width="120" src="{{ $user->avatar }}" alt="用户头像" /></p>
          </div>
          <div class="form-group">
            <label for="inputName" class="col-sm-3 control-label">账户状态：</label>
            <p class="form-control-static">{{ $user->status }}</p>
          </div>
          <div class="form-group">
            <label for="inputName" class="col-sm-3 control-label">注册时间：</label>
            <p class="form-control-static">{{ $user->created_at }}</p>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-10" style="padding-left: 0">
              <button type="submit" class="btn btn-danger" style="margin-right: 8px">编辑</button>
              <button type="submit" class="btn btn-danger">返回</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
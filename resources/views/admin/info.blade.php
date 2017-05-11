@extends('master.dashboard')

@section('page-header', '个人资料')

@section('user-info-class', 'active')

@section('breadcrumb')
  @parent
  <li class="active">个人资料</li>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-4">
      @if (session('success'))
        <div class="callout callout-success">
          <h4>修改成功</h4>
          <p>您已成功修改个人资料</p>
        </div>
      @endif
      <div class="box box-primary">
        <div class="box-body box-profile">
          <img class="profile-user-img img-responsive img-circle" src="{{ $admin->avatar }}" alt="用户头像">
          <h3 class="profile-username text-center">{{ $admin->nickname }}</h3>
          <p class="text-muted text-center">{{ $admin->rolename }}</p>
          {{-- <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
              <b>Followers</b> <a class="pull-right">1,322</a>
            </li>
            <li class="list-group-item">
              <b>Following</b> <a class="pull-right">543</a>
            </li>
            <li class="list-group-item">
              <b>Friends</b> <a class="pull-right">13,287</a>
            </li>
          </ul> --}}
          <a href="/admin/info/update" class="btn btn-primary btn-block"><b>修改资料</b></a>
        </div>
      </div>
    </div>
  </div>
@endsection
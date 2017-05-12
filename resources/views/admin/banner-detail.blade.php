@extends('master.dashboard')

@section('page-header', 'banner 详情')

@section('banner-manage-class', 'active')

@section('breadcrumb')
  @parent
  <li><a href="/admin/banner">banner 列表</a></li>
  <li class="active">banner 详情</li>
@endsection

@section('content')
  <div class="box">
    <div class="box-body">
      <div style="width: 50%" class="tab-pane" id="settings">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="inputName" class="col-sm-3 control-label">编号：</label>
            <p class="form-control-static">{{ $banner->id }}</p>
          </div>
          <div class="form-group">
            <label for="inputName" class="col-sm-3 control-label">标题：</label>
            <p class="form-control-static">{{ $banner->title }}</p>
          </div>
          <div class="form-group">
            <label for="inputName" class="col-sm-3 control-label">链接：</label>
            <p class="form-control-static">{{ $banner->link }}</p>
          </div>
          <div class="form-group">
            <label for="inputName" class="col-sm-3 control-label">图片：</label>
            <p class="form-control-static"><img width="220" src="{{ $banner->image }}" alt="banner 图片" /></p>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-10" style="padding-left: 0">
              <a href="/admin/banner/update?id={{ $banner->id }}" class="btn btn-primary" style="margin-right: 8px">编辑</a>
              <a href="/admin/banner" class="btn btn-primary">返回</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
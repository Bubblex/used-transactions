@extends('master.dashboard')

@section('page-header', '添加 banner')

@section('banner-manage-class', 'active')

@section('breadcrumb')
  @parent
  <li><a href="/admin/banner">Banner 列表</a></li>
  <li class="active">添加 Banner</li>
@endsection

@section('content')
  @if (session('success'))
    <div class="callout callout-success">
      <h4>添加成功</h4>
      <p>您已成功添加 banner 图</p>
    </div>
  @endif
  <div class="box">
    <div class="box-body">
      <div style="width: 50%" class="tab-pane" id="settings">
        <form method="POST" action="/admin/banner/add" class="form-horizontal" enctype="multipart/form-data">
          {!! csrf_field() !!}
          @if (session('titleMessage'))
            <div class="form-group has-error">
          @else
            <div class="form-group">
          @endif
            <label class="col-sm-4 control-label">标题：</label>
            <div class="col-sm-8">
              <input name="title" value="{{ old('title') }}" type="text" class="form-control" placeholder="请输入标题" />
              <span class="help-block">
                @if (session('titleMessage'))
                  {{ session('titleMessage') }}
                @endif
              </span>
            </div>
          </div>
          @if (session('linkMessage'))
            <div class="form-group has-error">
          @else
            <div class="form-group">
          @endif
            <label class="col-sm-4 control-label">链接：</label>
            <div class="col-sm-8">
              <input name="link" type="text" value="{{ old('link') }}" class="form-control" placeholder="请输入链接" />
              <span class="help-block">
                @if (session('linkMessage'))
                  {{ session('linkMessage') }}
                @endif
              </span>
            </div>
          </div>
          @if (session('imageMessage'))
            <div class="form-group has-error">
          @else
            <div class="form-group">
          @endif
            <label class="col-sm-4 control-label">图片上传：</label>
            <div class="col-sm-8">
              <input type="file" name="image" accept="image/*">
              <p class="help-block">请上传一张图片</p>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8">
              <button type="submit" class="btn btn-primary" style="margin-right: 8px">添加</button>
              <a href="/admin/banner" class="btn btn-primary">取消</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
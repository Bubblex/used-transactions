@extends('master.dashboard')

@section('page-header', '商品详情')

@section('goods-manage-class', 'active')

@section('breadcrumb')
  @parent
  <li><a href="/admin/goods">商品列表</a></li>
  <li class="active">商品详情</li>
@endsection

@section('content')
  <div class="box">
    <div class="box-body">
      <div style="width: 50%" class="tab-pane" id="settings">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="inputName" class="col-sm-4 control-label">编号：</label>
            <p class="form-control-static col-sm-8">{{ $goods->id }}</p>
          </div>
          <div class="form-group">
            <label for="inputName" class="col-sm-4 control-label">商品名称：</label>
            <p class="form-control-static col-sm-8">{{ $goods->name }}</p>
          </div>
          <div class="form-group">
            <label for="inputName" class="col-sm-4 control-label">商品类型：</label>
            <p class="form-control-static col-sm-8">{{ $goods->type->name }}</p>
          </div>
          <div class="form-group">
            <label for="inputName" class="col-sm-4 control-label">价格：</label>
            <p class="form-control-static col-sm-8">{{ $goods->price }}</p>
          </div>
          <div class="form-group">
            <label for="inputName" class="col-sm-4 control-label">发布人：</label>
            <p class="form-control-static col-sm-8">{{ $goods->user->nickname }}</p>
          </div>
          <div class="form-group">
            <label for="inputName" class="col-sm-4 control-label">联系方式：</label>
            <p class="form-control-static col-sm-8">{{ $goods->concat_telephone }}</p>
          </div>
          <div class="form-group">
            <label for="inputName" class="col-sm-4 control-label">联系人姓名：</label>
            <p class="form-control-static col-sm-8">{{ $goods->concat_name }}</p>
          </div>
          <div class="form-group">
            <label for="inputName" class="col-sm-4 control-label">商品图片：</label>
            <p class="form-control-static col-sm-8"><img width="120" src="{{ $goods->image }}" alt="用户头像" /></p>
          </div>
          <div class="form-group">
            <label for="inputName" class="col-sm-4 control-label">账户状态：</label>
            <p class="form-control-static col-sm-8">{{ $goods->status }}</p>
          </div>
          <div class="form-group">
            <label for="inputName" class="col-sm-4 control-label">发布时间：</label>
            <p class="form-control-static col-sm-8">{{ $goods->created_at }}</p>
          </div>
          <div class="form-group">
            <label for="inputName" class="col-sm-4 control-label">商品详情：</label>
            <div class="form-control-static col-sm-8 col-sm-8">{!! $goods->detail !!}</div>
          </div>
          <div class="form-group">
            <label for="inputName" class="col-sm-4 control-label">商品规格：</label>
            <div class="form-control-static col-sm-8 col-sm-8">{!! $goods->specification !!}</div>
          </div>
          <div class="form-group">
            <label for="inputName" class="col-sm-4 control-label">使用情况：</label>
            <div class="form-control-static col-sm-8 col-sm-8">{!! $goods->use_situation !!}</div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-10" style="padding-left: 0">
              <a href="/admin/goods" class="btn btn-primary">返回</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
@extends('master.dashboard')

@section('page-header', 'banner 图片列表')

@section('banner-manage-class', 'active')

@section('vendor-style')
  @parent
  <link rel="stylesheet" href="/adminlte/plugins/datatables/dataTables.bootstrap.css">
@endsection

@section('vendor-script')
  @parent
  <script src="/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="/adminlte/plugins/datatables/dataTables.bootstrap.min.js"></script>
@endsection

@section('page-script')
  <script>
    function deleteBanner(id) {
      $.ajax({
        url: '/admin/banner/delete',
        type: 'post',
        data: {
          _token: '{{ csrf_token() }}',
          id: id,
        },
        success: function(data) {
          userTable.draw(false)
        }
      })
    }

    var goodsStatusMap = {
      1: '正常',
      2: '已禁用'
    }

    var userTable = $('#goods-table').DataTable({
      info: false,
      paging: true,
      ordering: false,
      autoWidth: false,
      searching: false,
      lengthChange: false,
      pagingType: 'full_numbers',
      serverSide: true,
      pageLength: 10,
      searching: false,
      language: {
        paginate: {
          first: '第一页',
          last: '末页',
          next: '下一页',
          previous: '上一页',
        },
        search: '搜索：',
        searchPlaceholder: '请输入关键字',
        emptyTable: '暂无数据',
        zeroRecords: '搜索不到数据'
      },
      stateSave: true,
      ajax: '/admin/banner/list',
      columns: [
        {
          title: '编号',
          data: 'id'
        },
        {
          title: '标题',
          data: 'title',
        },
        {
          title: '图片地址',
          data: 'image'
        },
        {
          title: '链接地址',
          data: 'link',
        },
        {
          title: '操作',
          data: 'id',
          render: function(data, type, full) {
            var template = '<div class="table-options">'
            template += '<a href="/admin/banner/detail?id=' + data + '">查看</a>'
            template += '<a href="/admin/banner/update?id=' + data + '">编辑</a>'
            template += '<a href="javascript:" onclick="deleteBanner(' + data + ')">删除</a>'
            return template
          }
        }
      ]
  });
  </script>
@endsection

@section('breadcrumb')
  @parent
  <li class="active">Banner 列表</li>
@endsection

@section('content')
  <div class="box">
    <div class="box-body">
      <a href="/admin/banner/add" class="btn btn-primary">添加</a>
      <table id="goods-table" class="table table-bordered table-hover"></table>
    </div>
  </div>
@endsection


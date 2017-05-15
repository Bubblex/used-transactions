@extends('master.dashboard')

@section('page-header', '商品列表')

@section('goods-manage-class', 'active')

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
    function updateGoodsStatus(id, status) {
      $.ajax({
        url: '/admin/goods/disable',
        type: 'post',
        data: {
          _token: '{{ csrf_token() }}',
          id: id,
          status: status,
        },
        success: function(data) {
          userTable.draw(false)
        }
      })
    }

    var goodsStatusMap = {
      1: '正常',
      2: '已禁用',
      3: '已删除',
      4: '交易已完成'
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
      searching: true,
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
      ajax: '/admin/goods/list',
      columns: [
        {
          title: '编号',
          data: 'id'
        },
        {
          title: '发布人',
          data: 'user',
          render: function(data) {
            return data.nickname
          }
        },
        {
          title: '商品名称',
          data: 'name'
        },
        {
          title: '价格',
          data: 'price',
        },
        {
          title: '状态',
          data: 'status',
          render: function(data) {
            return goodsStatusMap[data]
          }
        },
        {
          title: '操作',
          data: 'id',
          render: function(data, type, full) {
            var template = '<div class="table-options">'

            if (full.status === 1) {
              template += '<a href="javascript:" onclick="updateGoodsStatus(' + data + ', 2)">禁用</a>'
            }
            else if (full.status === 2) {
              template += '<a href="javascript:" onclick="updateGoodsStatus(' + data + ', 1)">启用</a>'
            }

            template += '<a href="/admin/goods/detail?id=' + data + '">查看</a>'

            return template
          }
        }
      ]
  });
  </script>
@endsection

@section('breadcrumb')
  @parent
  <li class="active">商品列表</li>
@endsection

@section('content')
  <div class="box">
    <div class="box-body">
      <table id="goods-table" class="table table-bordered table-hover"></table>
    </div>
  </div>
@endsection


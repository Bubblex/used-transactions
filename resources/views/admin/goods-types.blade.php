@extends('master.dashboard')

@section('page-header', '商品分类列表')

@section('goods-types-manage-class', 'active')

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
    function deleteType(id) {
      $.ajax({
        url: '/admin/user/status',
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
      2: '已禁用'
    }

    var userTable = $('#goods-table').DataTable({
      info: false,
      paging: true,
      ordering: false,
      autoWidth: false,
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
      ajax: '/admin/goods-types/list',
      columns: [
        {
          title: '编号',
          data: 'id'
        },
        {
          title: '名称',
          data: 'name',
        },
      ]
  });
  </script>
@endsection

@section('breadcrumb')
  @parent
  <li class="active">商品分类列表</li>
@endsection

@section('content')
  <div class="box">
    <div class="box-body">
      <table id="goods-table" class="table table-bordered table-hover"></table>
    </div>
  </div>
@endsection

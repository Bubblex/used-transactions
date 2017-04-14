@extends('master.dashboard')

@section('page-header', '用户列表')

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
    function updateUserStatus(id, status) {
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

    var userStatusMap = {
      1: '正常',
      2: '已禁用'
    }

    var userTable = $('#users-table').DataTable({
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
      ajax: '/admin/user/list',
      columns: [
        {
          title: '编号',
          data: 'id'
        },
        {
          title: '账户',
          data: 'account'
        },
        {
          title: '昵称',
          data: 'nickname'
        },
        {
          title: '头像',
          data: 'avatar',
          render: function(data) {
            return '<img src="' + data + '" width="80px">'
          }
        },
        {
          title: '状态',
          data: 'status',
          render: function(data) {
            return userStatusMap[data]
          }
        },
        {
          title: '操作',
          data: 'id',
          render: function(data, type, full) {
            var template = '<div class="table-options">'

            if (full.status === 1) {
              template += '<a href="javascript:" onclick="updateUserStatus(' + data + ', 2)">禁用</a>'
            }
            else if (full.status === 2) {
              template += '<a href="javascript:" onclick="updateUserStatus(' + data + ', 1)">启用</a>'
            }

            template += '<a href="#">查看</a>'
            template += '<a href="#">编辑</a>'

            return template
          }
        }
      ]
  });
  </script>
@endsection

@section('breadcrumb')
  @parent
  <li class="active">用户列表</li>
@endsection

@section('content')
  <div class="box">
    <div class="box-body">
      <table id="users-table" class="table table-bordered table-hover"></table>
    </div>
  </div>
@endsection

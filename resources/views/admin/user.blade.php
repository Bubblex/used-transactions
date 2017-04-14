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
    $(function () {
      $('#users-table').DataTable({
        info: false,
        paging: true,
        ordering: false,
        autoWidth: false,
        searching: false,
        lengthChange: false,
        pagingType: 'full_numbers',
        serverSide: true,
        pageLength: 10,
        language: {
          paginate: {
            first: '第一页',
            last: '末页',
            next: '下一页',
            previous: '上一页'
          }
        },
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
            title: '操作',
            data: 'id',
            render: function(data) {
              return '<div><a href="#">操作</a></div>'
            }
          }
        ]
      });
    });
  </script>
@endsection

@section('breadcrumb')
  @parent
  <li class="active">用户列表</li>
@endsection

@section('content')
  <div class="box">
    {{-- <div class="box-header">
      <h3 class="box-title">用户列表</h3>
    </div> --}}
    <!-- /.box-header -->
    <div class="box-body">
      <table id="users-table" class="table table-bordered table-hover">
        {{-- <thead>
          <tr>
            <th>编号</th>
            <th>账户</th>
            <th>昵称</th>
            <th>头像</th>
            <th>操作</th>
          </tr>
        </thead>
        <tbody> --}}
          {{-- @foreach ($users as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->account }}</td>
              <td>{{ $user->nickname }}</td>
              <td><img src="{{ $user->avatar }}" width="80px"></td>
              <td></td>
            </tr>
          @endforeach --}}
      </table>
    </div>
    <!-- /.box-body -->
  </div>
@endsection

<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ $admin->avatar }}" class="img-circle" alt="用户头像">
      </div>
      <div class="pull-left info">
        <p>{{ $admin->nickname }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    {{-- <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form> --}}
    <ul class="sidebar-menu">
      <li class="header">后台管理系统</li>
      <li class="treeview active">
        <a href="#">
          <i class="fa fa-link"></i>
          <span>个人信息</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="/admin/info">个人资料</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-link"></i>
          <span>用户管理</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="/admin/user">用户列表</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-link"></i>
          <span>商品管理</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#">个人资料</a></li>
          <li><a href="#">用户管理</a></li>
          <li><a href="#">商品管理</a></li>
        </ul>
      </li>
    </ul>
  </section>
</aside>
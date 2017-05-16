<header class="main-header">
  <a href="/admin" class="logo">
    <span class="logo-mini">校园二手网</span>
    <span class="logo-lg">校园二手网</span>
  </a>
  <nav class="navbar navbar-static-top" role="navigation">
    <a href="javascript:" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{ $admin->avatar }}" class="user-image" alt="用户头像">
            <span class="hidden-xs">{{ $admin->nickname }}</span>
          </a>
          <ul class="dropdown-menu">
            <li class="user-header" style="height: auto;">
              <img src="{{ $admin->avatar }}" class="img-circle" alt="用户头像">
              <p>
                {{ $admin->nickname }}
                <small>{{ $admin->rolename }}</small>
              </p>
            </li>
            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">个人资料</a>
              </div>
              <div class="pull-right">
                <a href="/admin/logout" class="btn btn-default btn-flat">退出登录</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
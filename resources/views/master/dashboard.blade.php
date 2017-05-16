@extends('master.master')

@section('title', '校园二手网 - 后台管理系统')

@section('body-class', 'hold-transition skin-blue sidebar-mini')

@section('header')
  @include('master.header')
@endsection

@section('head-after')
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
@endsection

@section('sidebar')
  @include('master.sidebar')
@endsection

@section('main')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        @yield('page-header')
        <small>@yield('page-header-small')</small>
      </h1>
      <ol class="breadcrumb">
        @section('breadcrumb')
          <li><a href="/admin"><i class="fa fa-dashboard"></i>首页</a></li>
        @show
      </ol>
    </section>
    <section class="content">
      @section('content')
      @show
    </section>
  </div>
@endsection

@section('footer')
  @include('master.footer')
@endsection
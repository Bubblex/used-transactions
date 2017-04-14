<!DOCTYPE html>
<html class="@yield('html-class')">
<head class="@yield('head-class')">
  @section('head-before')
  @show

  <title>@yield('title', '校园二手交易网')</title>

  @section('meta')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  @show

  @section('required-style')
    <link rel="stylesheet" href="/adminlte/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="/adminlte/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="/adminlte/dist/css/skins/skin-blue.min.css">
    <link rel="stylesheet" href="/adminlte/style/style.css">
  @show

  @section('vendor-style')
  @show

  @section('page-style')
  @show

  @section('head-after')
  @show
</head>
<body class="@yield('body-class')">
  <div class="wrapper">
    @section('body-before')
    @show

    @section('header')
    @show

    @section('sidebar')
    @show

    @section('main')
    @show

    @section('footer')
    @show

    @section('body-after')
    @show

    @section('required-script')
      <script src="/adminlte/plugins/jQuery/jquery-2.2.3.min.js"></script>
      <script src="/adminlte/bootstrap/js/bootstrap.min.js"></script>
      <script src="/adminlte/dist/js/app.min.js"></script>
    @show

    @section('vendor-script')
    @show

    @section('page-script')
    @show
  </div>
</body>
</html>

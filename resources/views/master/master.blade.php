<!DOCTYPE html>
<html class="@yield('html-class')">
<head class="@yield('head-class')">
  @section('head-before')
  @show

  <title>@yield('title')</title>

  @section('meta')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  @show

  @section('required-style')
  @show

  @section('vendor-style')
  @show

  @section('page-style')
  @show

  @section('head-after')
  @show
</head>
<body class="@yield('body-class')">
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
  @show

  @section('vendor-script')
  @show

  @section('page-script')
  @show
</body>
</html>

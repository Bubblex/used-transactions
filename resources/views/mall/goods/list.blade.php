<!DOCTYPE HTML>
<html>
<head>
<title>校园二手网</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link href="/resource/style/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="/resource/style/app.css" rel="stylesheet" type="text/css" media="all" />

<!-- start details -->
<link rel="stylesheet" type="text/css" href="/resource/style/productviewgallery.css" media="all" />
<script type="text/javascript" src="/resource/vendor/jquery.min.js"></script>
<script type="text/javascript" src="/resource/vendor/cloud-zoom.1.0.3.min.js"></script>
<script type="text/javascript" src="/resource/vendor/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="/resource/vendor/jquery.fancybox-buttons.js"></script>
<script type="text/javascript" src="/resource/vendor/jquery.fancybox-thumbs.js"></script>
<script type="text/javascript" src="/resource/vendor/productviewgallery.js"></script>
<!-- start top_js_button -->
<script type="text/javascript" src="/resource/vendor/jquery.min.js"></script>
<script type="text/javascript" src="/resource/vendor/move-top.js"></script>
<script type="text/javascript" src="/resource/vendor/easing.js"></script>
   <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
</head>
<body>

<!-- BEGIN header -->
<div class="header_bg">
	<div class="wrap">
		<div class="header">
			<div class="logo">
				<a href="/"><img src="/resource/image/logo.png" alt=""/> </a>
			</div>

			<div class="h_search">
	    		<form>
	    			<input id="searchinput" type="text" placeholder="请输入搜索关键字">
	    			<span id="searchbtn" type="submit"></span>
	    		</form>
			</div>
			@include('master.header-account')
		</div>
	</div>
</div>
<!-- END header -->

<!-- BEGIN 头部导航 -->
@include('master.nav')
<!-- END 头部导航 -->

<!-- BEGIN 商品列表 -->
<div class="main_bg">
<div class="wrap">	
	<div class="main">
		<h2 class="style top">
			@if ($type)
				{{ $type->name }}
			@else
				全部
			@endif
		</h2>
		@foreach($goods as $index => $good)
			@if ($index == 0 || $index % 3 == 0)
			<div class="grids_of_3">
			@endif
				<div class="grid1_of_3">
					<a href="/goods/detail?id={{ $good->id }}">
						<img src="{{ $good->image }}" alt="{{ $good->name }}"/>
						<h3>{{ $good->name }}</h3>
						<div class="price">
							<h4>RMB{{ $good->price }} <span>详情</span></h4>
						</div>
						<span class="b_btm"></span>
					</a>
				</div>
			@if ($index % 3 == 2 || count($goods) == $index + 1)
				<div class="clear"></div>
			</div>
			@endif
		@endforeach
		<div class="pagination-box">
			{!! $goods->appends(['id' => $id])->render() !!}
		</div>
	</div>
</div>
</div>		
<!-- END 商品列表 -->

<!-- BEGIN footer -->
@include('master.mall-footer')
<!-- END footer -->

</body>
</html>

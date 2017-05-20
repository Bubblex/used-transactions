<!--我的商品-->
<!DOCTYPE HTML>
<html>
<head>
<title>校园二手网</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="/resource/style/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="/resource/style/app.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="/resource/vendor/jquery.min.js"></script>
<!-- start slider -->
<link href="/resource/style/slider.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="/resource/vendor/modernizr.custom.28468.js"></script>
<script type="text/javascript" src="/resource/vendor/jquery.cslider.js"></script>
<script type="text/javascript">
$(function() {
	$('#da-slider').cslider();
});
</script>
<!--推荐产品轮播-->
<link href="/resource/style/owl.carousel.css" rel="stylesheet">
<!-- Prettify -->
<script src="/resource/vendor/owl.carousel.js"></script>
<script>
	$(document).ready(function() {

	$("#owl-demo").owlCarousel({
		// 首页推荐商品默认展示个数
		items : 4,
		lazyLoad : true,
		// 自动轮播
		autoPlay : true,
		navigation : true,
		navigationText : ["",""],
		rewindNav : false,
		scrollPerPage : false,
		pagination : false,
		paginationNumbers: false,
		});
	});
</script>
<!-- //Owl Carousel Assets -->
<!-- start top_js_button -->
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
            @include('master.header-search')
			@include('master.header-account')
		</div>
	</div>
</div>
<!-- END header -->

<!-- BEGIN 头部导航 -->
@include('master.nav')
<!-- END 头部导航 -->

<div class="main_bg1">
	<div class="wrap">
		<div class="main1">
			<h2><a href='/mine/info' class='personal-center-a'>个人中心</a>  -  发布记录</h2>
		</div>
	</div>
</div>

<!-- BEGIN 发布记录 -->
<div class="main_bg">
	<div class="wrap">
		<div class="main">

			<a href="/mine/goods" class="select-release">全部</a>
			<a href="/mine/goods?type=complete" class="select-release">已售出</a>

			@foreach($goods as $index => $good)
				@if ($index == 0 || $index % 3 == 0)
				<div class="grids_of_3">
				@endif
					<div class="grid1_of_3 mine-grid-4">
						<a href="javascript:">
							<img src="{{ $good->image }}" alt="{{ $good->name }}"/>
							<h3>{{ $good->name }}</h3>
							<div class="price">
								<h4>
									<span class="mygoods-delete" onclick="location.href='/goods/detail?id={{ $good->id }}';">详情</span>
									<span class="mygoods-delete" onclick="deleteReleaseGood({{ $good->id }})">删除</span>
									@if ($good->status != 4)
										<span class="mygoods-delete" onclick="confirmSell({{ $good->id }})">确认售出</span>
									@endif
								</h4>
							</div>
							<span class="b_btm"></span>
						</a>
					</div>
				@if ($index % 3 == 2 || count($goods) == $index + 1)
					<div class="clear"></div>
				</div>
				@endif
			@endforeach
			@if(empty($good))
				<p class="none-goods">呜呜呜~~~~(>_<)~~~~  暂无售出物品</p>
			@endif
			{!! $goods->appends(['type' => $type])->render() !!}
		</div>
	</div>
</div>
<!-- END 发布记录 -->

<!-- BEGIN footer -->
@include('master.mall-footer')
<!-- END footer -->

<script>
	function deleteReleaseGood(id) {
		$.ajax({
			url: '/mine/delete/goods',
			type: 'post',
			data: {
				id: id,
				_token: '{{ csrf_token() }}'
			},
			success: function(data) {
				alert(data.message)

				if (data.status === 1) {
					window.location.reload();
				}
			}
		})
	}

	function confirmSell(id) {
		$.ajax({
			url: '/mine/success/goods',
			type: 'post',
			data: {
				id: id,
				_token: '{{ csrf_token() }}'
			},
			success: function(data) {
				alert(data.message)

				if (data.status === 1) {
					window.location.reload();
				}
			}
		})
	}
</script>
</body>
</html>

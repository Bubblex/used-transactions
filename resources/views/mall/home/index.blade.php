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

<!-- BEGIN swiper -->
	<div id="da-slider" class="da-slider">
		@foreach($banners as $banner)
			<div class="da-slide">
				<h2>{{ $banner->title }}</h2>
				<a href="{{ $banner->link }}" class="da-link">查看详情</a>
				<div class="da-img"><img src="{{ $banner->image }}" alt="{{ $banner->title }}" /></div>
			</div>
		@endforeach
		<nav class="da-arrows">
			<span class="da-arrows-prev"></span>
			<span class="da-arrows-next"></span>
		</nav>
	</div>
</div>
<!-- END swiper -->

<!-- BEGIN 推荐商品 -->
<div class="wrap">
	<div id="owl-demo" class="owl-carousel">
		@foreach($goods as $good)
			<div class="item" onClick="location.href='/goods/detail?id={{ $good->id }}';">
				<div class="cau_left">
					<img class="lazyOwl" data-src="{{ $good->image }}" alt="{{ $good->name }}">
				</div>
				<div class="cau_left">
					<h4><a href="/goods/detail?id={{ $good->id }}">{{ $good->name }}</a></h4>
					<a href="/goods/detail?id={{ $good->id }}" class="btn">查看</a>
				</div>
			</div>
		@endforeach
	</div>
</div>
<!--END 推荐商品-->

<div class="main_bg1">
	<div class="wrap">
		<div class="main1">
			<h2>商品分类</h2>
		</div>
	</div>
</div>

<!-- BEGIN 商品分类 -->
<div class="main_bg">
	<div class="wrap">
		<div class="main">
			<div class="grids_of_3">

				<div class="grid1_of_3">
					<a href="/goods/list">
						<img src="/resource/image/pic1.jpg" alt=""/>
						<h3>图书教材</h3>
						<div class="price">
							<h4><span>更多</span></h4>
						</div>
						<span class="b_btm"></span>
					</a>
				</div>

				<div class="grid1_of_3">
					<a href="details.html">
						<img src="/resource/image/pic2.jpg" alt=""/>
						<h3>数码配件</h3>
						<div class="price">
							<h4><span>更多</span></h4>
						</div>
						<span class="b_btm"></span>
					</a>
				</div>

				<div class="grid1_of_3">
					<a href="details.html">
						<img src="/resource/image/pic3.jpg" alt=""/>
						<h3>化妆品</h3>
						<div class="price">
							<h4><span>更多</span></h4>
						</div>
						<span class="b_btm"></span>
					</a>
				</div>
				
				<div class="grid1_of_3">
					<a href="details.html">
						<img src="/resource/image/pic4.jpg" alt=""/>
						<h3>数码</h3>
						<div class="price">
							<h4><span>更多</span></h4>
						</div>
						<span class="b_btm"></span>
					</a>
				</div>

				<div class="grid1_of_3">
					<a href="details.html">
						<img src="/resource/image/pic5.jpg" alt=""/>
						<h3>手机</h3>
						<div class="price">
							<h4><span>更多</span></h4>
						</div>
						<span class="b_btm"></span>
					</a>
				</div>

				<div class="grid1_of_3">
					<a href="details.html">
						<img src="/resource/image/pic6.jpg" alt=""/>
						<h3>电脑</h3>
						<div class="price">
							<h4><span>更多</span></h4>
						</div>
						<span class="b_btm"></span>
					</a>
				</div>
				
				<div class="grid1_of_3">
					<a href="details.html">
						<img src="/resource/image/pic4.jpg" alt=""/>
						<h3>生活娱乐</h3>
						<div class="price">
							<h4><span>更多</span></h4>
						</div>
						<span class="b_btm"></span>
					</a>
				</div>

				<div class="grid1_of_3">
					<a href="details.html">
						<img src="/resource/image/pic5.jpg" alt=""/>
						<h3>校园代步</h3>
						<div class="price">
							<h4><span>更多</span></h4>
						</div>
						<span class="b_btm"></span>
					</a>
				</div>
				
				<div class="grid1_of_3">
					<a href="details.html">
						<img src="/resource/image/pic6.jpg" alt=""/>
						<h3>衣物伞帽</h3>
						<div class="price">
							<h4><span>更多</span></h4>
						</div>
						<span class="b_btm"></span>
					</a>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</div>
<!-- END 商品分类 -->

<!-- BEGIN footer -->
@include('master.mall-footer')
<!-- END footer -->

<script>
	$('#searchbtn').on('click',function() {
		var keyword = $('#searchinput').val()
		if(keyword === '') {
			alert('请输入搜索关键字')
			return
		}
		$.ajax({
			url: "",
			type: "POST",
			data: {
				keyword: keyword
			},
			success: function(data) {
			}
		})
	})	
</script>
</body>
</html>

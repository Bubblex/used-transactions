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

			<a href="javascript:" class="select-release">全部</a>
			<a href="javascript:" class="select-release">已售出</a>

			<div class="grids_of_3">

				<div class="grid1_of_3 mine-grid-4">
					<img src="/resource/image/pic1.jpg" alt=""/>
					<h3>图书教材</h3>
					<div class="price">
						<h4><span class="mygoods-delete" onClick="location.href='/goods/detail';">详情</span><span class="mygoods-delete">删除</span><span class="mygoods-delete">确认售出</span></h4>
					</div>
					<span class="b_btm"></span>
				</div>


				<div class="grid1_of_3 mine-grid-4">
					<img src="/resource/image/pic1.jpg" alt=""/>
					<h3>图书教材</h3>
					<div class="price">
						<h4><span class="mygoods-delete" onClick="location.href='/goods/detail';">详情</span><span class="mygoods-delete">删除</span><span class="mygoods-delete">确认售出</span></h4>
					</div>
					<span class="b_btm"></span>
				</div>



				<div class="clear"></div>
			</div>
		</div>
	</div>
</div>
<!-- END 发布记录 -->

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

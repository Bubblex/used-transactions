<!--商品列表页-->

<!DOCTYPE HTML>
<html>
<head>
<title>The Aditii Website Template | Details </title>
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

			<div class="h_login">
				<a class="add_a" href="/account/register">注册</a>
				<a class="add_a" href="/account/login">登录</a>
			</div>

			<div class="logined">
				<a href="javascript:">
					<img src="/resource/image/logo.png">
					<span>昵称啊啊啊</span>
					<img class="setting" src="/resource/image/setting.png" onClick="location.href='/mine/info'">
				</a>
			</div>
		</div>
	</div>
</div>
<!-- END header -->

<!-- BEGIN 头部导航 -->
<div class="header_btm">
	<div class="wrap">
		<div class="header_sub">
			<div class="h_menu">
				<ul>
					<li class="active"><a href="/">主页</a></li> |
					<li><a href="/goods/list">图书教材</a></li> |
					<li><a href="/goods/list">数码配件</a></li> |
					<li><a href="/goods/list">化妆品</a></li> | 
					<li><a href="/goods/list">数码</a></li> |
					<li><a href="/goods/list">手机</a></li> |
					<li><a href="/goods/list">电脑</a></li> |
					<li><a href="/goods/list">生活娱乐</a></li> |
					<li><a href="/goods/list">校园代步</a></li> |
					<li><a href="/goods/list">衣物伞帽</a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
<!-- END 头部导航 -->

<!-- BEGIN 商品列表 -->
<div class="main_bg">
<div class="wrap">	
	<div class="main">
		<h2 class="style top">分类名称</h2>
		<!-- start grids_of_3 -->
		<div class="grids_of_3">
			<div class="grid1_of_3">
				<a href="/goods/detail">
					<img src="/resource/image/pic1.jpg" alt=""/>
					<h3>商品详情</h3>
					<div class="price">
						<h4>RMB300 <span>详情</span></h4>
					</div>
					<span class="b_btm"></span>
				</a>
			</div>
			<div class="grid1_of_3">
				<a href="details.html">
					<img src="/resource/image/pic2.jpg" alt=""/>
					<h3>branded t-shirts</h3>
					<div class="price">
						<h4>$300<span>indulge</span></h4>
					</div>
					<span class="b_btm"></span>
				</a>
			</div>
			<div class="grid1_of_3">
				<a href="details.html">
					<img src="/resource/image/pic3.jpg" alt=""/>
					<h3>branded tees</h3>
					<div class="price">
						<h4>$300<span>indulge</span></h4>
					</div>
					<span class="b_btm"></span>
				</a>
			</div>
			<div class="clear"></div>
		</div>
		<div class="grids_of_3">
			<div class="grid1_of_3">
				<a href="details.html">
					<img src="/resource/image/pic4.jpg" alt=""/>
					<h3>branded bags</h3>
					<div class="price">
						<h4>$300<span>indulge</span></h4>
					</div>
					<span class="b_btm"></span>
				</a>
			</div>
			<div class="grid1_of_3">
				<a href="details.html">
					<img src="/resource/image/pic5.jpg" alt=""/>
					<h3>ems women bag</h3>
					<div class="price">
						<h4>$300<span>indulge</span></h4>
					</div>
					<span class="b_btm"></span>
				</a>
			</div>
			<div class="grid1_of_3">
				<a href="details.html">
					<img src="/resource/image/pic6.jpg" alt=""/>
					<h3>branded cargos</h3>
					<div class="price">
						<h4>$300<span>indulge</span></h4>
					</div>
					<span class="b_btm"></span>
				</a>
			</div>
			<div class="clear"></div>
		</div>	
		<!-- end grids_of_3 -->
	</div>
</div>
</div>		
<!-- END 商品列表 -->

<!-- start footer -->
<div class="footer_bg">
<div class="wrap">
	<div class="footer">
		<!-- start grids_of_4 -->
		<div class="grids_of_4">
			<div class="grid1_of_4">
				<h4>featured sale</h4>
				<ul class="f_nav">
					<li><a href="#">alexis Hudson</a></li>
					<li><a href="#">american apparel</a></li>
					<li><a href="#">ben sherman</a></li>
					<li><a href="#">big buddha</a></li>
					<li><a href="#">channel</a></li>
					<li><a href="#">christian audigier</a></li>
					<li><a href="#">coach</a></li>
					<li><a href="#">cole haan</a></li>
				</ul>
			</div>
			<div class="grid1_of_4">
				<h4>mens store</h4>
				<ul class="f_nav">
					<li><a href="#">alexis Hudson</a></li>
					<li><a href="#">american apparel</a></li>
					<li><a href="#">ben sherman</a></li>
					<li><a href="#">big buddha</a></li>
					<li><a href="#">channel</a></li>
					<li><a href="#">christian audigier</a></li>
					<li><a href="#">coach</a></li>
					<li><a href="#">cole haan</a></li>
				</ul>
			</div>
			<div class="grid1_of_4">
				<h4>women store</h4>
				<ul class="f_nav">
					<li><a href="#">alexis Hudson</a></li>
					<li><a href="#">american apparel</a></li>
					<li><a href="#">ben sherman</a></li>
					<li><a href="#">big buddha</a></li>
					<li><a href="#">channel</a></li>
					<li><a href="#">christian audigier</a></li>
					<li><a href="#">coach</a></li>
					<li><a href="#">cole haan</a></li>
				</ul>
			</div>
			<div class="grid1_of_4">
				<h4>quick links</h4>
				<ul class="f_nav">
					<li><a href="#">alexis Hudson</a></li>
					<li><a href="#">american apparel</a></li>
					<li><a href="#">ben sherman</a></li>
					<li><a href="#">big buddha</a></li>
					<li><a href="#">channel</a></li>
					<li><a href="#">christian audigier</a></li>
					<li><a href="#">coach</a></li>
					<li><a href="#">cole haan</a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
</div>
<!-- start footer -->
<div class="footer_bg1">
<div class="wrap">
	<div class="footer">
		<!-- scroll_top_btn -->
	    <script type="text/javascript">
			$(document).ready(function() {

				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear'
		 		};


				$().UItoTop({ easingType: 'easeOutQuart' });

			});
		</script>
		 <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
		<!--end scroll_top_btn -->
		<div class="copy">
			<p class="link">Copyright &copy; 2014.Company name All rights reserved.<a target="_blank" href="http://www.cssmoban.com/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a> -  More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a></p>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>

</body>
</html>

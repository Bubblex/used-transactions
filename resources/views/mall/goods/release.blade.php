<!--发布商品页-->
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

<!-- START 发布二手商品 -->
<div class="main_bg">
<div class="wrap">	
<div class="main">
	 	 <div class="contact">
				  <div class="contact-form">
			 	  	 	<h2>发布二手商品</h2>
              <div>
                <span><label>商品名称</label></span>
                <span><input name="name" type="text" class="textbox"></span>
              </div>
              <div>
                <span><label>商品简介</label></span>
                <span><input name="summary" type="text" class="textbox"></span>
              </div>
              <div>
                <span><label>价格</label></span>
                <span><input name="price" type="text" class="textbox"></span>
              </div>
              <div>
                <span><label>货主联系方式</label></span>
                <span><input name="concat_telephone" type="text" class="textbox"></span>
              </div>
              <div>
                <span><label>联系人姓名</label></span>
                <span><input name="concat_name" type="text" class="textbox"></span>
              </div>
              <div>
                <span><label>所属分类</label></span>
                <span>
                  <select name="goods_type_id" class="release-option">
                    <option value="1">图书教材</option> 
                    <option value="2">数码配件</option> 
                    <option value="3">化妆品</option> 
                    <option value="4">数码</option> 
                    <option value="5">手机</option> 
                    <option value="6">电脑</option> 
                    <option value="7">生活娱乐</option> 
                    <option value="8">校园代步</option> 
                    <option value="9">衣物伞帽</option> 
                  </select>
                </span>
              </div>
              <!--此处三个富文本编辑器-->
              <div>
                <span><input type="submit" class="" value="发布" id='release'></span>
            </div>
  				<div class="clear"></div>		
			  </div>
		</div>
</div>
</div>	
<!--END 发布二手商品-->


<!-- BEGIN 友情链接 -->
<div class="footer_bg">
	<div class="wrap">
		<div class="footer">
			<!-- start grids_of_4 -->
			<div class="grids_of_4">
				<div class="grid1_of_4">
					<h4>友情链接</h4>
					<ul class="f_nav">
						<li><a href="http://hainnu.2shoujie.com/">校园二手街</a></li>
						<li><a href="">american apparel</a></li>
						<li><a href="">ben sherman</a></li>
						<li><a href="">big buddha</a></li>
						<li><a href="">channel</a></li>
						<li><a href="">christian audigier</a></li>
						<li><a href="">coach</a></li>
						<li><a href="">cole haan</a></li>
					</ul>
				</div>
				<div class="grid1_of_4">
					<h4>mens store</h4>
					<ul class="f_nav">
						<li><a href="">alexis Hudson</a></li>
						<li><a href="">american apparel</a></li>
						<li><a href="">ben sherman</a></li>
						<li><a href="">big buddha</a></li>
						<li><a href="">channel</a></li>
						<li><a href="">christian audigier</a></li>
						<li><a href="">coach</a></li>
						<li><a href="">cole haan</a></li>
					</ul>
				</div>
				<div class="grid1_of_4">
					<h4>women store</h4>
					<ul class="f_nav">
						<li><a href="">alexis Hudson</a></li>
						<li><a href="">american apparel</a></li>
						<li><a href="">ben sherman</a></li>
						<li><a href="">big buddha</a></li>
						<li><a href="">channel</a></li>
						<li><a href="">christian audigier</a></li>
						<li><a href="">coach</a></li>
						<li><a href="">cole haan</a></li>
					</ul>
				</div>
				<div class="grid1_of_4">
					<h4>quick links</h4>
					<ul class="f_nav">
						<li><a href="">alexis Hudson</a></li>
						<li><a href="">american apparel</a></li>
						<li><a href="">ben sherman</a></li>
						<li><a href="">big buddha</a></li>
						<li><a href="">channel</a></li>
						<li><a href="">christian audigier</a></li>
						<li><a href="">coach</a></li>
						<li><a href="">cole haan</a></li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</div>
<!-- END 友情链接 -->

<!-- BEGIN footer -->
<div class="footer_bg1">
	<div class="wrap">
		<div class="footer">
			<!-- BENGIN 返回顶部按钮 -->
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
			<!-- END 返回顶部按钮 -->
			<div class="copy">
				<p class="link">Design by ZhouRan<a target="_blank" href="/admin/sign">管理员登录</a></p>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
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
<script>
  $('#release').on('click',function() {
    var name = $("input[name='name']").val()
    var summary = $("input[name='summary']").val()
    var price = $("input[name='price']").val()
    var concat_telephone = $("input[name='concat_telephone']").val()
    var concat_name = $("input[name='concat_name']").val()
    var goods_type_id = $("[name='goods_type_id']").val()

    if (name === '' || null) {
      alert('请输入商品名称')
      return
    } else if (summary === '' || null) {
      alert('请输入商品简介')
      return
    } else if (price === '' || null) {
      alert('请输入商品价格')
      return
    } else if (/^[0-9]+(.[0-9]{2})?$/.test(price) === false) {
      alert('价格格式不正确')
      return
    } else if (concat_telephone === '' || null) {
      alert('请输入货主联系电话')
      return 
    } else if(/^1[0-9]{10}$/.test(concat_telephone) === false) {
      alert('货主联系电话格式不正确')
    } else if (concat_name === '' || null) {
      alert('请输入货主姓名')
      return
    } else if (goods_type_id === '' || null) {
      alert('请选择商品分类')
      return
    }

    $.ajax({
			url: "",
			type: "POST",
			data: {
				name: name,
				summary: summary,
				price: price,
				concat_telephone: concat_telephone,
				concat_name: concat_name,
				goods_type_id: goods_type_id,
			},
			success: function(data) {
			}
		})
  })

</script>
</body>
</html>

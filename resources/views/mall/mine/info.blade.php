<!--用户个人中心-->
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
			<h2>个人中心 <a href='/mine/goods' class='personal-center-a personal-center-release-a'>查看我的发布记录</a></h2>
		</div>
	</div>
</div>

<!-- BEGIN 个人资料 -->
<div class="main_bg">
	<div class="wrap">
		<div class="main">
			<!-- END 选项卡 -->
			<section class="tabs mine-tabs">
				<input id="tab-1" type="radio" name="radio-set" class="tab-selector-1 mine-tabs" checked="checked">
				<label for="tab-1" class="tab-label-1">我的资料</label>

				<div class="clear-shadow"></div>

				<div class="content">

					<div class="content-1">
						<ul class=" mine-tab-content">
							<p class="mine-title">账号信息</p>
							<p class="mine-account">账号: <span>{{ $user->account }}</span></p>
							<p class="mine-title">基本信息<a class="mine-info-edit" id='js-edit'>编辑</a><a class="mine-info-edit mine-info-save">保存</a></p>
							<p class="mine-account">
								头 &nbsp&nbsp 像:
								<span>
									<span class="js-info">
										<img src="{{ $user->avatar }}" width="120" style="vertical-align: top">
									</span>
									<input type="file" name="avatar" class="textbox mine-info-input" accept="image/*">
								</span>
							</p>
							<p class="mine-account">昵 &nbsp&nbsp 称: <span><span class="js-info">{{ $user->nickname }}</span><input name="nickname" value="{{ $user->nickname }}" type="text" class="textbox mine-info-input" /></span></p>
							<p class="mine-account">手机号: <span><span class="js-info">{{ $user->telephone }}</span><input name="telephone" type="text" value="{{ $user->telephone }}" class="textbox mine-info-input" /></span></p>
						</ul>
						<div class="clear"></div>
					</div>


				</div>
			</section>
			<!-- END 选项卡 -->
    </div>
	</div>
</div>
<!-- END 个人资料 -->    

<!-- BEGIN footer -->
@include('master.mall-footer')
<!-- END footer -->


<script>
$('#js-edit').on('click',function() {
	$('.js-info').hide()
	$(this).hide()
	$('.mine-tabs .mine-account .mine-info-input ').show()
	$('.mine-info-save').show()
})
$('.mine-info-save').on('click',function() {
	var nickname = $("input[name='nickname']").val()
	var telephone = $("input[name='telephone']").val()

	if (nickname === '' || null) {
      alert('请输入昵称')
      return
    } else if (telephone === '' || null) {
      alert('请输入手机号')
      return 
    } else if(/^1[0-9]{10}$/.test(telephone) === false) {
      alert('手机号格式不正确')
			return
    } 

	var data = new FormData();
	data.append('nickname', nickname);
	data.append('telephone', telephone);
	data.append('_token', '{{ csrf_token() }}');

	var files = $("input[name='avatar']").prop('files')

	if (files.length > 0) {
		data.append('avatar', files[0]);
	}

		$.ajax({
			url: "/mine/update/info",
			type: "POST",
			data: data,
			contentType: false,
			processData: false,
			success: function(data) {
				alert(data.message)

				if (data.status === 1) {
					window.location.reload()
				}
			}
		})

})
</script>
</body>
</html>

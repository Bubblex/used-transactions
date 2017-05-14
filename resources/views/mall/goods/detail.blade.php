<!--商品详情页-->

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
			@include('master.header-account')
		</div>
	</div>
</div>
<!-- END header -->

<!-- BEGIN 头部导航 -->
@include('master.nav')
<!-- END 头部导航 -->


<!-- start main -->
<div class="main_bg">
<div class="wrap">
	<div class="main">
	<!-- start content -->
	<div class="single">
			<!-- start span1_of_1 -->
			<div class="left_content">
			<div class="span1_of_1">
				<!-- start product_slider -->
				<div class="product-view">
				    <div class="product-essential">
				        <div class="product-img-box">
				    <div class="more-views" style="float:left;">
				        <div class="more-views-container">
				        <ul>
				            {{-- <li>
				            	<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" style="width:64px;height:85px;" href=""  title="" alt="">
				            	<img src="" src_main=""  title="" alt="" /></a>
				            </li>
				            <li>
				            	<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" style="width:64px;height:85px;" href=""  title="" alt="">
				            	<img src="" src_main=""  title="" alt="" /></a>
				            </li>
				            <li>
				            	<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" style="width:64px;height:85px;" href=""  title="" alt="">
				            	<img src="" src_main=""  title="" alt="" /></a>
				            </li>
				            <li>
				            	<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" style="width:64px;height:85px;" href=""  title="" alt="">
				            	<img src="" src_main="" title="" alt="" /></a>
				            </li>
				            <li>
				            	<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" style="width:64px;height:85px;" href=""  title="" alt="">
				            	<img src="" src_main="" title="" alt="" /></a>
				            </li> --}}
				          </ul>
				        </div>
				    </div>
				    <div class="product-image" style="overflow: hidden">
				        <a class="cs-fancybox-thumbs cloud-zoom" rel="adjustX:30,adjustY:0,position:'right',tint:'#202020',tintOpacity:0.5,smoothMove:2,showTitle:true,titleOpacity:0.5" data-fancybox-group="thumb" href="/resource/image/0001-2.jpg" title="Women Shorts" alt="Women Shorts">
				           	<img src="/resource/image/0001-2.jpg" alt="Women Shorts" title="Women Shorts" />
				        </a>
				   </div>
					<script type="text/javascript">
						/*
						var prodGallery = jQblvg.parseJSON('{"prod_1":{"main":{"orig":"/resource/image/0001-2.jpg","main":"/resource/image/large/0001-2.jpg","thumb":"/resource/image/small/0001-2.jpg","label":""},"gallery":{"item_0":{"orig":"/resource/image/0001-2.jpg","main":"/resource/image/large/0001-2.jpg","thumb":"/resource/image/small/0001-2.jpg","label":""},"item_1":{"orig":"/resource/image/0001-1.jpg","main":"/resource/image/large/0001-1.jpg","thumb":"/resource/image/small/0001-1.jpg","label":""},"item_2":{"orig":"/resource/image/0001-5.jpg","main":"/resource/image/large/0001-5.jpg","thumb":"/resource/image/small/0001-5.jpg","label":""},"item_3":{"orig":"/resource/image/0001-3.jpg","main":"/resource/image/large/0001-3.jpg","thumb":"/resource/image/small/0001-3.jpg","label":""},"item_4":{"orig":"/resource/image/0001-4.jpg","main":"/resource/image/large/0001-4.jpg","thumb":"/resource/image/small/0001-4.jpg","label":""}},"type":"simple","video":false}}'),
						    gallery_elmnt = jQblvg('.product-img-box'),
						    galleryObj = new Object(),
						    gallery_conf = new Object();
						    gallery_conf.moreviewitem = '<a class="cs-fancybox-thumbs" data-fancybox-group="thumb" style="width:64px;height:85px;" href=""  title="" alt=""><img src="" src_main="" width="64" height="85" title="" alt="" /></a>';
						    gallery_conf.animspeed = 200;
						jQblvg(document).ready(function() {
						    galleryObj[1] = new prodViewGalleryForm(prodGallery, 'prod_1', gallery_elmnt, gallery_conf, '.product-image', '.more-views', 'http:');
						        jQblvg('.product-image .cs-fancybox-thumbs').absoluteClick();
						    jQblvg('.cs-fancybox-thumbs').fancybox({ prevEffect : 'none',
						                             nextEffect : 'none',
						                             closeBtn : true,
						                             arrows : true,
						                             nextClick : true,
						                             helpers: {
						                               thumbs : {
						                                   width: 64,
						                                   height: 85,
						                                   position: 'bottom'
						                               }
						                             }
						                             });
						    jQblvg('#wrap').css('z-index', '100');
						            jQblvg('.more-views-container').elScroll({type: 'vertical', elqty: 4, btn_pos: 'border', scroll_speed: 400 });

						});

						function initGallery(a,b,element) {
						    galleryObj[a] = new prodViewGalleryForm(prods, b, gallery_elmnt, gallery_conf, '.product-image', '.more-views', '');
						};
						*/
					</script>
				</div>
				</div>
				</div>
			</div>
			<div class="span1_of_1_des">
				  <div class="desc1">
					<h3>{{ $goods->name }}</h3>
					<p>{{ $goods->summary }}</p>
					<h5>￥：{{ $goods->price }}RMB
          </h5>
					<div class="available">
						<!-- <h4>Available Options :</h4>
						<ul>
							<li>Color:
								<select>
								<option>Silver</option>
								<option>Black</option>
								<option>Dark Black</option>
								<option>Red</option>
							</select></li>
							<li>Size:
								<select>
									<option>L</option>
									<option>XL</option>
									<option>S</option>
									<option>M</option>
								</select>
							</li>
							<li>Quality:
								<select>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</li>
						</ul> -->
						<div class="btn_form">
							<form class="get-sellers-concat">
								<input type="submit" value="联系卖家" title="" />
							</form>
						</div>
						<span class="span_right" style="margin-left: 16px;"><a class="release-goods-btn" href="/mall/goods/release">我要发布产品 </a></span>
						<div class="clear"></div>
					</div>
					<div class="share-desc">
						<div class="share" style="display: none">
							<p>卖家姓名：{{ $goods->concat_name }}</p>
							<p>联系方式：{{ $goods->concat_telephone }}</p>
							{{-- <h4>分享产品:</h4>
							<ul class="share_nav">
								<li><a href="#"><img src="/resource/image/facebook.png" title="facebook"></a></li>
								<li><a href="#"><img src="/resource/image/twitter.png" title="Twiiter"></a></li>
								<li><a href="#"><img src="/resource/image/rss.png" title="Rss"></a></li>
								<li><a href="#"><img src="/resource/image/gpluse.png" title="Google+"></a></li>
				    		</ul> --}}
						</div>
						<div class="clear"></div>
					</div>
			   	 </div>
			   	</div>
			   	<div class="clear"></div>
			   	<!-- start tabs -->
				   	<section class="tabs">
		            <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked">
			        <label for="tab-1" class="tab-label-1">产品详情</label>

		            <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2">
			        <label for="tab-2" class="tab-label-2">产品规格</label>

		            <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3">
			        <label for="tab-3" class="tab-label-3">使用情况</label>

				    <div class="clear-shadow"></div>

			        <div class="content">
				        <div class="content-1">
                            {!! $goods->detail !!}
							<div class="clear"></div>
						</div>
				        <div class="content-2">
							{!! $goods->specification !!}
							<div class="clear"></div>
						</div>
				        <div class="content-3">
							{!! $goods->use_situation !!}
							<div class="clear"></div>
						</div>
			        </div>
			        </section>
		         	<!-- end tabs -->
			   	</div>
			   	<!-- start sidebar -->
			 <div class="left_sidebar">
					<div class="sellers">
						<h4>最新闲置</h4>
						<div class="single-nav">
			                <ul>
								@foreach($newGoods as $good)
									<li><a href="/goods/detail?id={{ $good->id }}">{{ $good->name }}</a></li>
								@endforeach
			                </ul>
			              </div>
						  <div class="banner-wrap bottom_banner color_link">
								<a href="#" class="main_link">
								<figure><img src="/resource/image/delivery.png" alt=""></figure>
								<h5><span>跑腿送货服务</span></h5><p>只要998送到家,电联15233486038</p></a>
						 </div>
						 <div class="brands">
							 <h1>猜你喜欢</h1>
							<div class="single-nav">
								<ul>
									@foreach($likeGoods as $good)
										<li><a href="/goods/detail?id={{ $good->id }}">{{ $good->name }}</a></li>
									@endforeach
								</ul>
							</div>
			    		</div>
					</div>
				</div>
					<!-- end sidebar -->
          	    <div class="clear"></div>
	       </div>
	<!-- end content -->
	</div>
</div>
</div>

<!-- BEGIN footer -->
@include('master.mall-footer')
<!-- END footer -->
<script>
	$('.get-sellers-concat').on('submit', function(e) {
		e.preventDefault();

		if ('{{ session("user") }}') {
			$('.share').show()
		}
		else {
			alert('登录后查看卖家联系方式')
		}
	})

	$('.release-goods-btn').on('click', function(e) {
		if (!'{{ session("user") }}') {
			e.preventDefault()
			alert('登录后发布商品')
		}
	})
</script>

</body>
</html>

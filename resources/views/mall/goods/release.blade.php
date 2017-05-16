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

      @include('master.header-search')
			@include('master.header-account')
		</div>
	</div>
</div>
<!-- END header -->

<!-- BEGIN 头部导航 -->
@include('master.nav')
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
              <div>
                <span><label>上传图片</label></span>
                <span>
                  <input type="file" name="image" accept="image/*">
                </span>
              </div>
              <!--此处三个富文本编辑器-->
              <div>
                <span><label>详细信息</label></span>
                <div>
                  <script id="detail" name="content" type="text/plain"></script>
                </div>
              </div>
              <div>
                <span><label>商品规格</label></span>
                <div>
                  <script id="specification" name="content" type="text/plain"></script>
                </div>
              </div>
              <div>
                <span><label>使用情况</label></span>
                <div>
                  <script id="use_situation" name="content" type="text/plain"></script>
                </div>
              </div>
              <div>
                <span><input type="submit" class="" value="发布" id='release'></span>
            </div>
  				<div class="clear"></div>		
			  </div>
		</div>
</div>
</div>	
<!--END 发布二手商品-->


<!-- BEGIN footer -->
@include('master.mall-footer')
<!-- END footer -->

<script>
</script>
<script type="text/javascript" src="/resource/vendor/ueditor/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/resource/vendor/ueditor/ueditor.all.js"></script>
<script>
  var ueConfig = {
    toolbars: [
      [
        'undo',
        'redo',
        'bold',
        'fontfamily', //字体
        'fontsize', //字号
        'paragraph', //段落格式
        'simpleupload', //单图上传
        'italic', //斜体
        'underline', //下划线
        'strikethrough', //删除线
        'forecolor', //字体颜色
        'backcolor', //背景色
        'justifyleft', //居左对齐
        'justifyright', //居右对齐
        'justifycenter', //居中对齐
        'justifyjustify', //两端对齐
      ],
    ],
    elementPathEnabled: false,
  }

  var ueDetail = UE.getEditor('detail', ueConfig);
  var ueSpecification = UE.getEditor('specification', ueConfig);
  var ueUseSituation = UE.getEditor('use_situation', ueConfig);

  $('#release').on('click',function() {
    var name = $("input[name='name']").val()
    var summary = $("input[name='summary']").val()
    var price = $("input[name='price']").val()
    var concat_telephone = $("input[name='concat_telephone']").val()
    var concat_name = $("input[name='concat_name']").val()
    var goods_type_id = $("[name='goods_type_id']").val()
    var image = $("[name='image']").prop('files')

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
      return
    } else if (concat_name === '' || null) {
      alert('请输入货主姓名')
      return
    } else if (goods_type_id === '' || null) {
      alert('请选择商品分类')
      return
    } else if (!ueDetail.hasContents()) {
      alert('请填写商品详情');
      return
    } else if (!ueSpecification.hasContents()) {
      alert('请填写商品规格');
      return
    } else if (!ueUseSituation.hasContents()) {
      alert('请填写商品使用情况')
      return
    } else if (image.length === 0) {
      alert('请上传图片')
      return
    }

    var data = new FormData();
    data.append('name', name);
    data.append('summary', summary);
    data.append('price', price);
    data.append('concat_telephone', concat_telephone);
    data.append('concat_name', concat_name);
    data.append('goods_type_id', goods_type_id);
    data.append('detail', ueDetail.getContent());
    data.append('specification', ueSpecification.getContent());
    data.append('use_situation', ueUseSituation.getContent());
    data.append('_token', '{{ csrf_token() }}');
    data.append('image', image[0]);

    $.ajax({
			url: "/mine/goods/release",
			type: "POST",
			contentType: false,
			processData: false,
			data: data,
			success: function(data) {
        alert(data.message)

        if (data.status === 1) {
          window.location.href = '/goods/detail?id=' + data.id
        }
			}
		})
  })

</script>
</body>
</html>

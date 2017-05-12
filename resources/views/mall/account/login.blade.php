<!DOCTYPE HTML>
<html>
<head>
<title>校园二手网</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link href="/resource/style/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="/resource/style/login.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="/resource/vendor/jquery.min.js"></script>

<!--头部logo-->
<div class="header_bg">
	<div class="wrap">
		<div class="header">
			<div class="logo">
				<a href="/"><img src="/resource/image/logo.png" alt=""/> </a>
			</div>
		</div>
	</div>
</div>
<div class="login-body">
	<div class="c_login contact-form">
		<h2>登 录</h2>
		<div class="input-item">
			<input id="username" type="text" class="textbox" placeholder="请输入账号">
		</div>
		<div class="input-item">
			<input id="pwd" placeholder="请输入密码" type="password" class="textbox">
		</div>
		<div id="loginbtn">
			<span>
				<input type="submit" class="login-btn" value="登录" >
			</span>
		</div>
		<div>
			<span><input type="submit" class="login-btn" value="注册" onClick="location.href='/account/register';"></span>
		</div>
	</div>
</div>
<script>
// 点击登录按钮
$("#loginbtn").on('click',function() {
	// 获取用户账号 
    var username = $('#username').val()
	// 获取用户密码
    var pwd = $('#pwd').val()
    console.log(username)
    console.log(pwd)
	// 判断用户是否输入账号
	if(username === '') {
		// 弹框提醒
		alert('请输入账号')
		// 终止代码执行
		return
	}
	// 判断用户是否输入密码
	else if(pwd === '') {
		// 弹框提醒
		alert('请输入密码')
		// 终止代码执行
		return
	}

	// 验证用户输入账号密码后，进行ajax请求
	// ajax是一种创建交互式网页应用的网页开发技术，用于创建快速动态网页
	// 可以实现网页异步更新
	$.ajax({
		// 请求地址
		url: "/account/login",
		// 请求方式 POST 和 TYPE 两种类型
		type: "POST",
		// 向服务器发出的请求数据
		data: {
			account: username,
			password: pwd,
			_token: '{{ csrf_token() }}'
		},
		// 请求成功后的回调函数
		success: function(data) {
			alert(data.message);

			if (data.status === 1) {
				window.location.href = '/';
			}
		}
	})
})
</script>
</body>
</html>

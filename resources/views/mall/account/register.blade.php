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
	<div class="c_login c_register contact-form">
		<h2>注 册</h2>
		<div class="input-item">
			<input id="account" type="text" class="textbox" placeholder="请输入账号">
		</div>
        <div class="input-item">
			<input id="nickname" placeholder="请输入昵称" type="text" class="textbox">
		</div>
		<div class="input-item">
			<input id="pwd" placeholder="请输入密码" type="password" class="textbox">
		</div>
        <div class="input-item">
			<input id="confrimpwd" placeholder="请再次输入密码" type="password" class="textbox">
		</div>
        <div id="registerbtn">
			<span><input type="submit" class="login-btn" value="注册"></span>
		</div>
		<div>
			<span>
                <input type="submit" class="login-btn" value="已有账号去登录" onClick="location.href='/account/login';">
            </span>
		</div>
		
	</div>
</div>
<script>
	$('#registerbtn').on('click',function() {
		var account = $('#account').val()
		var nickname = $('#nickname').val()
		var pwd = $('#pwd').val()
		var confrimpwd = $('#confrimpwd').val()
		if(account === '') {
			alert('请输入账号')
			return
		}
		else if(nickname === '') {
			alert('请输入昵称')
			return
		}
		else if(pwd === '') {
			alert('请输入密码')
			return
		}
		else if(confrimpwd === '') {
			alert('请再次输入密码')
			return
		}
		else if(confrimpwd != pwd) {
			alert('两次输入密码不一致')
			return
		}
		$.ajax({
			url: "",
			type: "POST",
			data: {
				account: account,
				nickname: nickname,
				pwd: pwd,
				confrimpwd: confrimpwd
			},
			success: function(data) {
			
		}
	})
	})
</script>
</body>
</html>

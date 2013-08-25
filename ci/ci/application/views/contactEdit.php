<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>QQ同步助手 - 腾讯手机软件中心</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="Pragma" content="no-cache">
<meta name="keywords" content="QQ,手机同步,同步,备份,名片备份,名片同步,短信备份,存储卡备份,本地备份,网络备份,诺基亚同步,S60同步,名片上传,名片下载,短信上传,短信下载,QQ同步助手">
<meta name="description" content="安全、好用的手机同步工具。QQ同步助手正式发布！">
<link style="text/css" rel="stylesheet" href="/request.css?request=css/common.css;css/contacts.css;css/jquery-ui.css&amp;key=26C10B9721C9B36680948B253B57D658">
<style type="text/css"></style></head>
<body>
<div class="menu" id="menu">
	<img src="https://pim.qq.com/face" class="user-avatar" id="menuUserAvatar">
	<a href="contact.jsp" name="contact" class="current"><span><i class="h-icons icon-txl"></i>通讯录</span></a>
	<a href="sms.jsp" name="sms"><span><i class="h-icons icon-sms"></i>短信</span></a>
	<a href="other.jsp" name="other"><span><i class="h-icons icon-other"></i>其他</span></a>
	<a href="site.jsp" name="site"><span><i class="h-icons icon-site"></i>设置</span></a>
	<a href="javascript:location.replace('/pim/login_out.jsp')" name="quit" class="quit logClass">退出</a>
</div>

<div class="sub-menu" id="subMenu">
	<div id="groupAll">
		<ul class="group-list">
			<li groupid="-1" class="f group-item logClass b selected" name="group_all"><a class="group-name" href="javascript:void(0)"><span class="g-n-t">全部</span><span id="groupAllCount" class="count">[148]</span></a></li>
		</ul>
	</div>
	<div id="groupBox" style="height: 298px;">
		<div class="group-scroll-box" style="height: 298px;">
			<ul class="group-list" id="groupList">
				
					<li name="group_other" class="group-item logClass group can-drop" groupid="6" title="System Group: My Contacts">
						<a href="javascript:void(0)" class="group-name">
							<span name="gName" class="g-n-t">System Group: My Contacts</span><span class="count">[112]</span>
						</a>
					</li>
				
					<li name="group_other" class="group-item logClass group can-drop" groupid="7" title="超星客户">
						<a href="javascript:void(0)" class="group-name">
							<span name="gName" class="g-n-t">超星客户</span><span class="count">[19]</span>
						</a>
					</li>
				
					<li name="group_other" class="group-item logClass group can-drop" groupid="8" title="超星公司">
						<a href="javascript:void(0)" class="group-name">
							<span name="gName" class="g-n-t">超星公司</span><span class="count">[14]</span>
						</a>
					</li>
				
					<li name="group_other" class="group-item logClass group can-drop" groupid="9" title="其他">
						<a href="javascript:void(0)" class="group-name">
							<span name="gName" class="g-n-t">其他</span><span class="count">[3]</span>
						</a>
					</li>
				
					<li name="group_other" class="group-item logClass group can-drop" groupid="10" title="最新添加">
						<a href="javascript:void(0)" class="group-name">
							<span name="gName" class="g-n-t">最新添加</span><span class="count">[0]</span>
						</a>
					</li>
				
					<li name="group_no" class="group-item logClass  can-drop" groupid="0" title="未分组">
						<a href="javascript:void(0)" class="group-name">
							<span name="gName" class="g-n-t">未分组</span><span class="count">[0]</span>
						</a>
					</li>
				
			</ul>
		</div>
		<a href="javascript:void(0)" class="scroll-top" style="display: none;"></a>
		<a href="javascript:void(0)" class="scroll-bottom" style="display: none;"></a>
	</div>
	<div id="otherGroupBox">
		<ul class="group-list">
			<li class="f group-item logClass" name="group_add" id="groupAdd"><a href="javascript:void(0)">新建分组</a><i class="icons icon-group-add-hover"></i></li>
			<li class="f group-item logClass" name="contact_recycle" id="recycleLi"><a href="javascript:void(0)">回收站</a><i class="icons icon-group-del-hover"></i></li>
		</ul>
	</div>
</div>
<div class="wrapper" id="wrapper">
	<!-- 联系人模块  -->
			
<div id="contactEdit" class="contact-edit-area" style="">



<div class="btn-bar">
	<span class="btn tool-tips logClass btn-spacing" data="返回列表" name="contact_edit_return"><i class="icons icon-return"></i></span>
	<span class="btn logClass" name="contact_edit_save" id="editSaveBtn">保存</span>
	<span class="btn logClass" name="contact_edit_save_to_next">保存并编辑下一个</span>
	<span class="btn logClass btn-spacing" name="del_edit_contact">删除</span>
	<span class="btn btn-w90 logClass group-manage btn-spacing" name="group_manage_edit">管理组<span class="split">|</span><i class="icons icon-arrow-light"></i></span>
</div>
<div class="over-scroll content" id="contactEditBox" style="height: 383px;">
<form class="contact-edit-box" id="field">
	<input id="photoid" name="X-MPS-PHOTO_" type="hidden" value="">
	<input id="contactEditGroupIds" name="groupIds" type="hidden" value="6">
	<div class="face">
		<a href="javascript:void(0)" name="uploadFace" class="logClass"><img id="faceImg" src="../images2.0/card_face_default.jpg"><i></i>
			<span>点击上传头像</span>
		</a>
	</div>
	<div class="detail">
		<p>
			<input id="UserNameB" class="text text-user-name" type="text" name="N3" value="阿究" style="width: 60px;">
			<span id="nickNameB">
				(无昵称)
			</span> 
			<a href="javascript:void(0)" name="editName" class="tool-tips icons icon-name-edit logClass" data="编辑姓名"></a>
		</p>
		<p>
			
			<textarea rows="5" cols="10" name="NOTE" id="noteTA" class="text no-note">在这里添加对TA的备注吧
初遇地点？特长？怪癖？…
好记性不如烂笔头(*^__^*)</textarea>
		</p>
		<p id="c_group">
			
					
						<span groupid="6" class="g-i">System Group: My Contacts</span>
					
				
		</p>
		<input type="hidden" name="N" id="UserNameInput" value="阿;究;;;">
		<input type="hidden" name="NICKNAME" id="Nick" value="">
	</div>
	<div class="clr"></div>
	
	<h3 class="title">联系方式</h3>
	
	<div class="tb-item">
		<label class="item-th">电话</label>
		<table class="tb-edit">
			
			
				<tbody><tr name="tel">
					<th class="c-b">
						<span name="tel" class="combobox"><input type="text" readonly="readonly" style="width: 92px;" class="cbb-text" value="北京"><i class="icons icon-arrow-hot"></i></span>
					</th>
					<td>
						<div class="edit-box">
							<input type="text" class="text tel-text" name="TEL_X-CUSTOM0xFEFF53174EAC;0" value="13241242284" style="width:400px;"> 
							<a href="" class="tool-tips icons icon-item-del logClass" name="delBtn" data="删除电话"></a> 
							<a href="" class="tool-tips icons icon-item-add logClass" name="addBtn" data="新增电话"></a>
							
							<span class="tel-area">北京 北京</span>
						</div>
					</td>
				</tr>
			
				<tr name="tel">
					<th class="c-b">
						<span name="tel" class="combobox"><input type="text" readonly="readonly" style="width: 92px;" class="cbb-text" value="常用手机"><i class="icons icon-arrow-hot"></i></span>
					</th>
					<td>
						<div class="edit-box">
							<input type="text" class="text tel-text" name="TEL_CELL_0" value="15273667304" style="width:400px;"> 
							<a href="" class="tool-tips icons icon-item-del logClass" name="delBtn" data="删除电话"></a> 
							<a href="" class="tool-tips icons icon-item-add logClass" name="addBtn" data="新增电话"></a>
							<a href="javascript:void(0)" name="editChong" class="tel-chong logClass" value="15273667304">给TA充值</a>
							<span class="tel-area">湖南 常德</span>
						</div>
					</td>
				</tr>
			
		</tbody></table>
	</div>	
	
	
	
	<div class="tb-item">
		<label class="item-th">传真</label>
		<table class="tb-edit">
			
				<tbody><tr name="fax">
					<th class="c-b"><span name="fax" class="combobox"><input type="text" readonly="readonly" style="width: 92px;" class="cbb-text" value="传真"><i class="icons icon-arrow-hot"></i></span></th>
					<td>
						<div class="edit-box">
							<input type="text" class="text tel-text" name="TEL_FAX_0" value="" style="width:400px;"> 
							<a href="" class="tool-tips icons icon-item-del logClass" name="delBtn" data="删除传真"></a> 
							<a href="" class="tool-tips icons icon-item-add logClass" name="addBtn" data="新增传真"></a>
							<span class="tel-area"></span>
						</div>
					</td>
				</tr>
			
			
		</tbody></table>
	</div>
	
	
	
	<div class="tb-item">
		<label class="item-th">电子邮箱</label>
		<table class="tb-edit">
			
				<tbody><tr name="email">
					<th class="c-b"><span name="email" class="combobox"><input type="text" readonly="readonly" style="width: 92px;" class="cbb-text" value="电子邮箱"><i class="icons icon-arrow-hot"></i></span></th>
					<td><input type="text" class="text" name="EMAIL_0" value="" style="width:400px;"> <a href="" class="tool-tips icons icon-item-del logClass" name="delBtn" data="删除电子邮箱"></a> <a href="" class="tool-tips icons icon-item-add logClass" name="addBtn" data="新增电子邮箱"></a></td>
				</tr>
			
			
		</tbody></table>
	</div>
	
	
	
	<div class="tb-item">
		<label class="item-th">QQ</label>
		<table class="tb-edit">
			
				<tbody><tr name="qq">
					<td><input type="text" class="text" style="width: 250px;" name="X-TC-dwQQ" value=""> <a href="" class="tool-tips icons icon-item-del logClass" name="delBtn" data="删除QQ"></a> <a href="" class="tool-tips icons icon-item-add logClass" name="addBtn" data="新增QQ"></a></td>
				</tr>
			
			
		</tbody></table>
	</div>
	
	
	<h3 class="title">更多详情</h3>
	<div class="tb-item">
		<table class="tb-edit">
				<tbody><tr>
					<th>生日</th>
					<td colspan="2"><input id="birthday" type="text" style="width: 250px;" class="text hasDatepicker" name="BDAY" value=""> <a href="" class="tool-tips icons icon-item-del logClass" name="delBtn" data="删除生日"></a></td>
				</tr>
				
				
				<tr>
					<th>公司/部门</th>
					<td colspan="2">
						<input type="text" class="text" name="ORG" value=""> <a href="" class="tool-tips icons icon-item-del logClass" name="delBtn" data="删除公司/部门"></a>
					</td>
				</tr>
				
			
			
			
				<tr>
					<th>职位</th>
					<td colspan="2"><input type="text" class="text" name="TITLE" value=""> <a href="" class="tool-tips icons icon-item-del logClass" name="delBtn" data="删除职位"></a></td>
				</tr>
			
			
		</tbody></table>
	</div>
	
	
	<div class="tb-item">
		<label class="item-th">地址</label>
		<table class="tb-edit">
			
				<tbody><tr name="adr">
					<th class="c-b"><span name="adr" class="combobox"><input type="text" readonly="readonly" style="width: 92px;" class="cbb-text" value="地址"><i class="icons icon-arrow-hot"></i></span></th>
					<td><input type="text" class="text" name="ADR_0" value="" style="width:400px;"> <a href="" class="tool-tips icons icon-item-del logClass" name="delBtn" data="删除地址"></a> <a href="" class="tool-tips icons icon-item-add logClass" name="addBtn" data="新增地址"></a></td>
				</tr>
			
			
		</tbody></table>
	</div>
	
	
	
	<div class="tb-item">
		<label class="item-th">网址</label>
		<table class="tb-edit">
			
				<tbody><tr name="url">
					<th class="c-b"><span name="url" class="combobox"><input type="text" readonly="readonly" style="width: 92px;" class="cbb-text" value="网址"><i class="icons icon-arrow-hot"></i></span></th>
					<td><input type="text" class="text" name="URL_0" value="" style="width:400px;"> <a href="" class="tool-tips icons icon-item-del logClass" name="delBtn" data="删除网址"></a> <a href="" class="tool-tips icons icon-item-add logClass" name="addBtn" data="新增网址"></a></td>
				</tr>
			
			
		</tbody></table>
	</div>

</form>
</div></div><div id="userListBox" class="user-list-box" style="display: block; height: 360px;"><ul class="user-list"><li dataid="139" class="selected">阿究</li><li dataid="4">阿姨</li><li dataid="188">彪子平江车</li><li dataid="70">漂</li><li dataid="150">蔡惠群</li><li dataid="202">曹主任农大</li><li dataid="179">湛溇金</li><li dataid="119">湛嫔鹏</li><li dataid="181">陈财源</li><li dataid="11">陈典</li><li dataid="12">陈虎军</li><li dataid="13">陈立方</li><li dataid="14">陈思思</li><li dataid="205">陈雯曲靖医专，副馆长</li><li dataid="15">陈云英</li><li dataid="16">除鑫</li><li dataid="17">大姐</li><li dataid="18">大姨</li><li dataid="191">邓凯凯</li><li dataid="20">邓思婷</li><li dataid="163">樊智</li><li dataid="200">菲菲姐</li><li dataid="182">甘浦文</li><li dataid="177">红姑姑</li><li dataid="208">龚老师开远技术</li><li dataid="153">姑父丁</li><li dataid="221">古老师西南林业大学</li><li dataid="194">郭会玉</li><li dataid="196">郭老师云大技术部</li><li dataid="204">国通快递小西门</li><li dataid="226">国土资源技术</li><li dataid="26">耗子</li><li dataid="199">何波</li><li dataid="27">何纷</li><li dataid="217">何玲玲</li><li dataid="29">何鑫沅</li><li dataid="198">昆明医学院王华平</li><li dataid="203">昆明冶金高等专科学校</li><li dataid="216">瞿秋燕</li><li dataid="228">纪聪聪</li><li dataid="222">姜姐</li><li dataid="207">蒋文</li><li dataid="72">青蛙</li><li dataid="225">赖毅农大馆长</li><li dataid="43">老黄广州</li><li dataid="172">老妈</li><li dataid="44">老牛</li><li dataid="229">黎老师昆明学院</li><li dataid="219">黎一佑</li><li dataid="46">李国辉</li></ul></div></div>

<div id="contactSortDiv" style="display: none;">
	<a href="javascript:void(0)" name="name_ASC" class="logClass"><i class="icons icon-sort-az-g"></i> 从A到Z</a>
	<a href="javascript:void(0)" name="name_DESC" class="logClass"><i class="icons icon-sort-za-g"></i> 从Z到A</a>
	<a href="javascript:void(0)" name="time_DESC" class="logClass"><i class="icons icon-sort-no-g"></i> 从新到旧</a>
	<a href="javascript:void(0)" name="time_ASC" class="logClass" style="_margin-right: -3px;"><i class="icons icon-sort-on-g"></i> 从旧到新</a>
</div>

<div class="drop-box" id="groupTipsBox"></div>
<div class="drop-box" id="contactMoreManage">
	<a href="javascript:void(0)" class="logClass" name="contact_merge">合并重复联系人</a>
	<a href="javascript:void(0)" class="logClass" name="contact_export">导出联系人到本地</a>
	<a href="javascript:void(0)" class="logClass" name="contact_import">导入联系人</a>
	<a href="javascript:void(0)" class="logClass" name="contact_time">时光机</a>
	<a href="javascript:void(0)" class="logClass" name="contact_batch">批量整理</a>
	<span class="split-line"></span>
	<a href="javascript:void(0)" class="logClass" name="contact_chong">手机快速充值</a><br>
</div>
<div id="loading" class="ajax-tips" style="left: 583px; display: none;">正在加载...</div>
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
	<a href="javascript:location.replace('/pim/login_out.jsp')" name="avatar-tips-quit" class="icon-quit logClass">退出登录</a><br>
</div>
<script>
var PIM = {};
PIM.Path = {
	path: '/pim/contact',
	parentPath: '/pim',
	rootPath: '',
	jumpUrl : 'http://pim.qq.com'
};
PIM.QQ = '524632303';
var pim_sid_c = "6438cb4704b0c3aad28573ff107fe6a72a3d1baf0960e22e9fb2abd760dfed45eaaf6e2ebd1732f58a1bd48f5eb5d2d2265215d9339cedfb";
var mobile_c = "";
//去掉+86、86
var m_c="";
var web_pim_sid_c = "1A5502E67337141F9A95D91B7AAA3A09";
if(mobile_c != "")
{
	m_c = mobile_c.replace('+','');
	if(m_c.indexOf('86') != -1)
	{
		m_c = m_c.substring(2);
	}
}
</script>
<script type="text/javascript" src="<?=base_url().'scripts/aft_login/contact_request.js?request=js/jquery.js;js/jquery.md5.js;js/jquery.alert.js;js/jquery.hashchange.js;js/ui/jquery-ui.js;js/placeholder.js;js/common.js;js/tips.js;js/combobox.js;js/dropBox.js;js/group_manage.js;js/page.js;js/contactsSuper.js;js/contacts.js;js/group.js;js/lazyload.js;js/pim.js&amp;key=2E5037F54A3A8479B141A5828447E0AE'?>"></script>
<script>
$(function(){
	try{
	PIM.ContactsList.updatePage({
		pageNo:1, 
    	pageSize:50,
    	pageCount:3,
    	totalRecordCount:148
	});
	}catch(e){
		logError(e,'contact.jsp;295');
	}
});
</script>

<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div></body></html>
<div class="sub-menu" id="subMenu">
	<div id="groupAll">
		<ul class="group-list">
			<li groupid="-1" class="f group-item logClass b" name="group_all"><a class="group-name" href="javascript:void(0)"><span class="g-n-t">全部</span><span id="groupAllCount" class="count">[148]</span></a></li>
		</ul>
	</div>
	<div id="groupBox">
		<div class="group-scroll-box">
			<ul class="group-list" id="groupList">
				
					<li name="group_other" class="group-item logClass group can-drop" groupid="6" title="System Group: My Contacts" >
						<a href="javascript:void(0)" class="group-name">
							<span name="gName" class="g-n-t">System Group: My Contacts</span><span class="count">[112]</span>
						</a>
					</li>
				
					
				
			</ul>
		</div>
		<a href="javascript:void(0)" class="scroll-top"></a>
		<a href="javascript:void(0)" class="scroll-bottom"></a>
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
	<div id="contactsList" class="content">
		<div class="btn-bar">
			<span class="btn logClass" name="add_contact">新建</span>
			<span class="btn logClass btn-spacing" name="del_sel_contact">删除</span>
			<span class="btn logClass" name="del_contact_by_group">清空组</span>
			<span class="btn btn-w90 logClass btn-spacing group-manage" name="group_manage_list">管理组<span class="split">|</span><i class="icons icon-arrow-light"></i></span>
			<span class="btn btn-w90 logClass" name="more_manage" id="moreManageBtn">更多操作<span class="split">|</span><i class="icons icon-arrow-light"></i></span>		
			
			<span class="search"><input type="text" class="search-text" placeholder="按姓名、电话、邮箱搜索" name="contact_search_text" /></span>
		</div>
		<div class="filters-box">
			<table class="filters logClass" name="a_click_letter">
				<tr id="filters">
					<td class="first"><a class="first selected" href="javascript:void(0)">全部</a></td>
					
						<td>
						
								<a href="javascript:void(0)">A</a>
							
						</td>
					
						<td>
						
								<a href="javascript:void(0)">B</a>
							
						</td>
					
						<td>
						
								<a href="javascript:void(0)">C</a>
							
						</td>
					
						<td>
						
								<a href="javascript:void(0)">D</a>
							
						</td>
					
						<td>
						
								<span>E</span>
							
						</td>
					
						<td>
						
								<a href="javascript:void(0)">F</a>
							
						</td>
					
						<td>
						
								<a href="javascript:void(0)">G</a>
							
						</td>
					
						<td>
						
								<a href="javascript:void(0)">H</a>
							
						</td>
					
						<td>
						
								<span>I</span>
							
						</td>
					
						<td>
						
								<a href="javascript:void(0)">J</a>
							
						</td>
					
						<td>
						
								<a href="javascript:void(0)">K</a>
							
						</td>
					
						<td>
						
								<a href="javascript:void(0)">L</a>
							
						</td>
					
						<td>
						
								<a href="javascript:void(0)">M</a>
							
						</td>
					
						<td>
						
								<span>N</span>
							
						</td>
					
						<td>
						
								<span>O</span>
							
						</td>
					
						<td>
						
								<a href="javascript:void(0)">P</a>
							
						</td>
					
						<td>
						
								<a href="javascript:void(0)">Q</a>
							
						</td>
					
						<td>
						
								<span>R</span>
							
						</td>
					
						<td>
						
								<a href="javascript:void(0)">S</a>
							
						</td>
					
						<td>
						
								<a href="javascript:void(0)">T</a>
							
						</td>
					
						<td>
						
								<span>U</span>
							
						</td>
					
						<td>
						
								<span>V</span>
							
						</td>
					
						<td>
						
								<a href="javascript:void(0)">W</a>
							
						</td>
					
						<td>
						
								<a href="javascript:void(0)">X</a>
							
						</td>
					
						<td>
						
								<a href="javascript:void(0)">Y</a>
							
						</td>
					
						<td>
						
								<a href="javascript:void(0)">Z</a>
							
						</td>
					
						<td>
						
								<span>#</span>
							
						</td>
					
				</tr>
			</table>
		</div>
		<div class="contacts-head-box">
			<table class="tb-contacts-list" cellspacing="0">
				<thead id="contactsHead">
					<tr>
						<th class="col1">&nbsp;</th>
						<th class="col2"><i name="contact_chk_all" class="icons icon-uncheck logClass" ></i></th>
						<th class="col3"><i class="icons icon-avatar"></i></th>
						<th class="col4">
							<span id="sortByName" class="sort-item">姓名 <i class="icons icon-sort-az"></i> <i class="icons icon-arrow-hot"></i></span>
						</th>
						
						
							<th class="col5">电话</th>
								
						
						
							<th class="col6">QQ号</th>
							
						
						
							<th class="col7">组</th>
							
						
						
						
						
						
						
						
						
						
					</tr>
				</thead>
			</table>
			<a href="site.jsp" class="i-sz tool-tips logClass" data="设置" name="list_head_sz"></a>
		</div>
		<div id="contactsListBox" class="over-scroll ie6-mr20">
			<table class="tb-contacts-list logClass" cellspacing="0" name="contact_select">
				<col class="col1" />
				<col class="col2" />
				<col class="col3" />
				<col class="col4" />
				<tbody id="contactsBody">
					
							<tr class="ui-selectee" dataid="139">
								<td class="o-h"><i class="i-icons icon-drag"></i></td>
								<td><i class="icons icon-uncheck"></i></td>
								<td><span class='list-avatar can-edit logClass' name='contact_list_add_avatar'></span></td>
								<td><a class="logClass view" name="contact_Detail" href="javascript:void(0)">阿究</a></td>
								
								
									<td>
										<span class="no-drag">15273667304</span><span class="tel-area">湖南 常德</span><i class="tool-tips icons icon-more-tel" data="5YyX5Lqs: 13241242284 "></i>
									</td>
								
								
									<td>
										<span class="no-drag"> </span>
									</td>
								
								
									<td class="col7"><div class="c-g-b"><span class='g-i'>System Group: My Contacts</span> </div></td>
								
								
								
								
								
								
								
								
							</tr>
						
							<tr class="ui-selectee" dataid="4">
								<td class="o-h"><i class="i-icons icon-drag"></i></td>
								<td><i class="icons icon-uncheck"></i></td>
								<td><span class='list-avatar can-edit logClass' name='contact_list_add_avatar'></span></td>
								<td><a class="logClass view" name="contact_Detail" href="javascript:void(0)">阿姨</a></td>
								
								
									<td>
										<span class="no-drag">15575023970</span><span class="tel-area">湖南 岳阳</span>
									</td>
								
								
									<td>
										<span class="no-drag"> </span>
									</td>
								
								
									<td class="col7"><div class="c-g-b"><span class='g-i'>System Group: My Contacts</span> </div></td>
								
								
								
								
								
								
								
								
							</tr>
						
							
						
				</tbody>
			</table>
		</div>
		
		<div class="page-bar"><div class="page-bar-innerbox">
			<div class="page-size-select">
				每页显示
				<span name="page_size" class="cbb-page-size logClass"><input type="text" readonly="readonly" style="width: 26px;" class="cbb-text" value="50" /><i class="icons icon-arrow-light"></i></span>
				条
			</div>
			<div class="page page-contact">
				<i class="icons icon-page-first"></i>
				<i class="icons icon-page-prev"></i>
				<span class="page-textarea">第<input type="text" title="按回车键跳转" value="1" class="text" /> /<span class="page-count">3</span>页</span><a title="下一页" class="icons icon-page-next" href="#"></a><a title="最后一页" class="icons icon-page-last" href="#"></a>
			</div>
		</div></div>
	
	</div>
	
</div>

<div id="contactSortDiv">
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
	<a href="javascript:void(0)" class="logClass" name="contact_chong">手机快速充值</a><br />
</div>
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
<script>
var PIM = {};
PIM.Path = {
	path: '/pim/contact',
	parentPath: '/pim',
	rootPath: '',
	jumpUrl : 'http://ic.qq.com'
};
PIM.QQ = '524632303';
var pim_sid_c = "2e113c840797ffb7707559e27d69c63cec426f631cc6d241eb30a243920f8fad741f7c18d783f90b9144386c2fdf7cf0b79e0cc80d2d596c";
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
<script type='text/javascript' src='<?=base_url().'scripts/aft_login/contact_request.js?request=js/jquery.js;js/jquery.md5.js;js/jquery.alert.js;js/jquery.hashchange.js;js/ui/jquery-ui.js;js/placeholder.js;js/common.js;js/tips.js;js/combobox.js;js/dropBox.js;js/group_manage.js;js/page.js;js/contactsSuper.js;js/contacts.js;js/group.js;js/lazyload.js;js/pim.js'?>'></script>
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
</body>
</html>
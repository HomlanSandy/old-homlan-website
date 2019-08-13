<?php /* Smarty version 2.6.26, created on 2012-07-20 13:11:51
         compiled from user.tpl.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>




<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="title" content="<?php echo $this->_tpl_vars['website_title']; ?>
<?php echo $this->_tpl_vars['website_info']; ?>
" />
<meta name="description" content="<?php echo $this->_tpl_vars['website_descript']; ?>
" />
<meta name="keywords" content="<?php echo $this->_tpl_vars['websitw_keyword']; ?>
<?php echo $this->_tpl_vars['website_info']; ?>
" />
<title><?php echo $this->_tpl_vars['website_info']; ?>
<?php echo $this->_tpl_vars['website_title']; ?>
</title>
<script src="themes/<?php echo $this->_tpl_vars['themes_na']; ?>
/css/MenuToDown.js" type="text/javascript"></script>
<script src="themes/<?php echo $this->_tpl_vars['themes_na']; ?>
/css/MenuToRight.js" type="text/javascript"></script>
<script src="themes/<?php echo $this->_tpl_vars['themes_na']; ?>
/css/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="themes/<?php echo $this->_tpl_vars['themes_na']; ?>
/css/style.css" rel="stylesheet" type="text/css">
</head>
<!--
	┌======================================┌───────┐========================================┐
	├======================================│ 宣 告 │========================================┤
	├======================================└───────┘========================================┤
	│	程式用途	│	user.tpl.htm		前台會員中心 的 htm檔
	│	開發者		│	廷俊
	│	版本		│	v2.0.0.0102001
	├=======================================================================================┤
	│	1.	v1.0.1.0102001	2010/10/20	廷俊	修改會員註冊資料頁面
	│	2.	v2.0.0.0102001	2010/10/20 	廷俊	a.新增會員修改密碼頁面
	│											b.驗證修改密碼的欄位，是否為空白和確認密碼
	│											c.修改會員註冊資料頁面，判斷導入會員資料or密碼修改
	│	3.	v2.0.4.0120801	2010/12/08 	廷俊	a.新增會員查詢訂單列表顯示頁面
	│											b.新增會員點選查看該筆訂單的詳細內容顯示頁面
	│											c.前台模組清單新增會員功能清單模組
	│											d.開放會員功能清單模組，可自行新增各頁面的左欄、中間、右欄區域
	│	4.	v2.0.4.0120801	2010/12/08 	廷俊	a.新增會員查詢需求單列表顯示頁面
	│											b.新增會員點選查看該筆需求單的詳細內容顯示頁面
	│	5.	v03.00.02.1040801	2011/04/28	廷俊	1.修正會員資訊頁面需使用網頁中間區域模組列表
	│												2.新增會員登入頁面
	│	6.  v03.00.10.1062001	2011-06-22	玉玲	新增判斷螢幕解析度大小函式 container_js。
	└=======================================================================================┘
*/-->
<script type="text/javascript">
<!--
var warming_name='<?php echo $this->_tpl_vars['warming_name']; ?>
';
var warming_email_error='<?php echo $this->_tpl_vars['warming_email_error']; ?>
';
var warming_pw='<?php echo $this->_tpl_vars['warming_pw']; ?>
';
var warming_same='<?php echo $this->_tpl_vars['warming_same']; ?>
';
<?php echo ' 
	function chkalldata(){
		var objTest1 = /^\\d{8}$/;
		var objTest2 = /^\\d{2}-?\\d{6,14}$/;
		var mailTest = /^\\w+([\\.-]?\\w+)*@\\w+([\\.-]?\\w+)*(\\.\\w{2,3})+$/;

	    var impor1 = document.getElementById("UserNa").value;
		var impor2 = document.getElementById("UserMail").value;
		
        var str="";
		
	    if (impor1==""){
			str += warming_name + "\\n"; 
		}
		if(!mailTest.test(impor2)){
			str += warming_email_error + "\\n";                 
        }
		
		if (str!=""){
			alert(str);
			return false;;
		}else {
			return true;
		}
	}
/*
	2010-10-20 edit by 廷俊
	---------------------------------------------------------
	驗證修改密碼的欄位，是否為空白和確認密碼
	---------------------------------------------------------
*/
	function chkpwdata(){
		
		var impw1 = document.getElementById("old_passwd").value;
		var impw2 = document.getElementById("new_passwd").value;
		var impw3 = document.getElementById("chknew_passwd").value;
		
        var str="";
	    if (impw1=="" ||impw2=="" ||impw3==""){
			str += warming_pw + "\\n"; 
		}
		if(impw2!=impw3){
			str += warming_same + "\\n";                 
        }
		
		if (str!=""){
			alert(str);
			return false;;
		}else {
			return true;
		}
	}
	
	/*
	2010-11-16 edit by 健嘉
	---------------------------------------------------------
	驗證email格式
	---------------------------------------------------------
	*/
	function chkmail(){
		var reg_email=/^\\w+((-\\w+)|(\\.\\w+))*\\@[A-Za-z0-9]+((\\.|-)[A-Za-z0-9]+)*\\.[A-Za-z0-9]+$/; 
		var UserMail=document.getElementById("UserMail").value;
		
		if (UserMail !="" && !reg_email.test(UserMail))
		{
			alert(warming_email_error);
			document.getElementById("UserMail").focus();
		}
		document.getElementById("outputTarget").src="mem_chk.php?act=mail&data=" + UserMail;
	}
//-->
</script>
'; ?>

<!-- /*
	2010-12-08 edit by 廷俊
	----------------------------------------------------
	1.前台模組清單新增會員功能清單模組
	2.開放會員功能清單模組，可自行新增各頁面的左欄、中間、右欄區域
	---------------------------------------------------- 
*/	 -->
<body>
<?php if ($this->_tpl_vars['container'] != 0): ?>
<!-- 頁面置中及寬度設定 -->
<div id="container" style="width:<?php echo $this->_tpl_vars['container']; ?>
;">

<!-- 頁頭位置設定 -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/header.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<!-- 上方MENU位置設定 -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/toplink_menu.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<iframe src="javascript:void(0);" name="outputTarget" height="0" width="0" style="display:none;" id="outputTarget"></iframe>

<table width="100%" height="<?php echo $this->_tpl_vars['PageHeightDefault']; ?>
" border="0" cellspacing="0" cellpadding="0">
	<tr>

		<?php if ($this->_tpl_vars['left'] != 0): ?>  
		<!-- 頁身 左方 區域位置設定 -->
		<td id="left" valign="top" style="width:<?php echo $this->_tpl_vars['left']; ?>
;">
			<table cellpadding="0" cellspacing="0" border="0" width="100%">
				<?php unset($this->_sections['a']);
$this->_sections['a']['name'] = 'a';
$this->_sections['a']['loop'] = is_array($_loop=$this->_tpl_vars['page_left']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['a']['show'] = true;
$this->_sections['a']['max'] = $this->_sections['a']['loop'];
$this->_sections['a']['step'] = 1;
$this->_sections['a']['start'] = $this->_sections['a']['step'] > 0 ? 0 : $this->_sections['a']['loop']-1;
if ($this->_sections['a']['show']) {
    $this->_sections['a']['total'] = $this->_sections['a']['loop'];
    if ($this->_sections['a']['total'] == 0)
        $this->_sections['a']['show'] = false;
} else
    $this->_sections['a']['total'] = 0;
if ($this->_sections['a']['show']):

            for ($this->_sections['a']['index'] = $this->_sections['a']['start'], $this->_sections['a']['iteration'] = 1;
                 $this->_sections['a']['iteration'] <= $this->_sections['a']['total'];
                 $this->_sections['a']['index'] += $this->_sections['a']['step'], $this->_sections['a']['iteration']++):
$this->_sections['a']['rownum'] = $this->_sections['a']['iteration'];
$this->_sections['a']['index_prev'] = $this->_sections['a']['index'] - $this->_sections['a']['step'];
$this->_sections['a']['index_next'] = $this->_sections['a']['index'] + $this->_sections['a']['step'];
$this->_sections['a']['first']      = ($this->_sections['a']['iteration'] == 1);
$this->_sections['a']['last']       = ($this->_sections['a']['iteration'] == $this->_sections['a']['total']);
?>
					<tr><td style="width:100%;"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['page_left'][$this->_sections['a']['index']]['md_tpl'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td></tr>
				<?php endfor; endif; ?>
			</table>
		</td>
		<?php endif; ?>

		<?php if ($this->_tpl_vars['center'] != 0): ?>
		<!-- 頁身 中間 主要區域位置設定 --> 
		<td id="main" valign="top" style="width:<?php echo $this->_tpl_vars['center']; ?>
;">
			<!-- 會員註冊資料 START --> 
			<!--
				2010-10-20 edit by 廷俊
				---------------------------------------------------------
				1.新增會員修改密碼頁面
				2.修改會員註冊資料頁面，判斷導入會員資料or密碼修改
				---------------------------------------------------------
				2010-12-08 edit by 廷俊
				---------------------------------------------------------
				1.新增會員查詢訂單列表顯示頁面
				2.新增會員點選查看該筆訂單的詳細內容顯示頁面
				3.新增會員查詢需求單列表顯示頁面
				4.新增會員點選查看該筆需求單的詳細內容顯示頁面
				---------------------------------------------------------
				2011-04-28 edit by 廷俊
				----------------------------------------------------
				新增會員登入頁面
				---------------------------------------------------- 
			-->
			<?php if ($this->_tpl_vars['act'] == 'login'): ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/user_login.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php elseif ($this->_tpl_vars['act'] == 'edi'): ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/user_register.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php elseif ($this->_tpl_vars['act'] == 'edi_pw'): ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/user_editpw.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php elseif ($this->_tpl_vars['act'] == 'sel_ord'): ?>
				<?php if ($this->_tpl_vars['umOrder']): ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/user_selord.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php else: ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/user_selordlist.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php endif; ?>
			<?php elseif ($this->_tpl_vars['act'] == 'sel_dem'): ?>
				<?php if ($this->_tpl_vars['umDemand']): ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/user_seldem.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php else: ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/user_seldemlist.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php endif; ?>
			<!--
				2010-11-16 edit by 健嘉
				---------------------------------------------------------
				1.新增組織圖功能
				---------------------------------------------------- 
			-->
			<?php elseif ($this->_tpl_vars['act'] == 'team'): ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/user_team.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<!--
				2010-11-30 edit by 健嘉
				---------------------------------------------------------
				1.組織圖會員資料明細
				---------------------------------------------------- 
			-->
			<?php elseif ($this->_tpl_vars['act'] == 'team_show'): ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/user_team_detail.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php endif; ?>
			<!-- 會員註冊資料 END -->
			 
			<table cellpadding="0" cellspacing="0" border="0" width="100%">
				<?php unset($this->_sections['b']);
$this->_sections['b']['name'] = 'b';
$this->_sections['b']['loop'] = is_array($_loop=$this->_tpl_vars['page_center']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['b']['show'] = true;
$this->_sections['b']['max'] = $this->_sections['b']['loop'];
$this->_sections['b']['step'] = 1;
$this->_sections['b']['start'] = $this->_sections['b']['step'] > 0 ? 0 : $this->_sections['b']['loop']-1;
if ($this->_sections['b']['show']) {
    $this->_sections['b']['total'] = $this->_sections['b']['loop'];
    if ($this->_sections['b']['total'] == 0)
        $this->_sections['b']['show'] = false;
} else
    $this->_sections['b']['total'] = 0;
if ($this->_sections['b']['show']):

            for ($this->_sections['b']['index'] = $this->_sections['b']['start'], $this->_sections['b']['iteration'] = 1;
                 $this->_sections['b']['iteration'] <= $this->_sections['b']['total'];
                 $this->_sections['b']['index'] += $this->_sections['b']['step'], $this->_sections['b']['iteration']++):
$this->_sections['b']['rownum'] = $this->_sections['b']['iteration'];
$this->_sections['b']['index_prev'] = $this->_sections['b']['index'] - $this->_sections['b']['step'];
$this->_sections['b']['index_next'] = $this->_sections['b']['index'] + $this->_sections['b']['step'];
$this->_sections['b']['first']      = ($this->_sections['b']['iteration'] == 1);
$this->_sections['b']['last']       = ($this->_sections['b']['iteration'] == $this->_sections['b']['total']);
?>
					<tr><td style="width:100%;"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['page_center'][$this->_sections['b']['index']]['md_tpl'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td></tr>
				<?php endfor; endif; ?>
			</table>
		</td>
		<?php endif; ?>

		<?php if ($this->_tpl_vars['right'] != 0): ?>
		<!-- 頁身 右方 區域位置設定 -->
		<td valign="top" id="right" style="width:<?php echo $this->_tpl_vars['right']; ?>
;">
			<table cellpadding="0" cellspacing="0" border="0" width="100%">
				<?php unset($this->_sections['c']);
$this->_sections['c']['name'] = 'c';
$this->_sections['c']['loop'] = is_array($_loop=$this->_tpl_vars['page_right']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['c']['show'] = true;
$this->_sections['c']['max'] = $this->_sections['c']['loop'];
$this->_sections['c']['step'] = 1;
$this->_sections['c']['start'] = $this->_sections['c']['step'] > 0 ? 0 : $this->_sections['c']['loop']-1;
if ($this->_sections['c']['show']) {
    $this->_sections['c']['total'] = $this->_sections['c']['loop'];
    if ($this->_sections['c']['total'] == 0)
        $this->_sections['c']['show'] = false;
} else
    $this->_sections['c']['total'] = 0;
if ($this->_sections['c']['show']):

            for ($this->_sections['c']['index'] = $this->_sections['c']['start'], $this->_sections['c']['iteration'] = 1;
                 $this->_sections['c']['iteration'] <= $this->_sections['c']['total'];
                 $this->_sections['c']['index'] += $this->_sections['c']['step'], $this->_sections['c']['iteration']++):
$this->_sections['c']['rownum'] = $this->_sections['c']['iteration'];
$this->_sections['c']['index_prev'] = $this->_sections['c']['index'] - $this->_sections['c']['step'];
$this->_sections['c']['index_next'] = $this->_sections['c']['index'] + $this->_sections['c']['step'];
$this->_sections['c']['first']      = ($this->_sections['c']['iteration'] == 1);
$this->_sections['c']['last']       = ($this->_sections['c']['iteration'] == $this->_sections['c']['total']);
?>
					<tr><td style="width:100%;"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['page_right'][$this->_sections['c']['index']]['md_tpl'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></td></tr>
				<?php endfor; endif; ?>
			</table>
		</td>
		<?php endif; ?>

	</tr>
</table>
<!-- 頁尾位置設定 -->
<div id="footer"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/footer.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></div>

</div>
<?php endif; ?>

<!-- 判斷螢幕解析度大小 -->
<?php echo $this->_tpl_vars['container_js']; ?>


</body>
</html>
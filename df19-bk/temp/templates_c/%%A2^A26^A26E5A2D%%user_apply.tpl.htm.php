<?php /* Smarty version 2.6.26, created on 2012-07-12 13:58:46
         compiled from user_apply.tpl.htm */ ?>
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


<script type="text/javascript">
<!--
/*
	2010-05-14 edit by 廷俊
	------------------------------------------------------
	1.驗證會員email重複
	2.驗證會員基本資料
	------------------------------------------------------		
*/	
var manager_mode="<?php echo $this->_tpl_vars['manager_mode']; ?>
";
var lang_db="<?php echo $this->_tpl_vars['lang_db']; ?>
";
var warming_name="<?php echo $this->_tpl_vars['warming_name']; ?>
";
var warming_id="<?php echo $this->_tpl_vars['warming_id']; ?>
";
var warming_pw="<?php echo $this->_tpl_vars['warming_pw']; ?>
";
var warming_same="<?php echo $this->_tpl_vars['warming_same']; ?>
";
var warming_email="<?php echo $this->_tpl_vars['warming_email']; ?>
";
var warming_idre="<?php echo $this->_tpl_vars['warming_idre']; ?>
";
var warming_mailre="<?php echo $this->_tpl_vars['warming_mailre']; ?>
";
var warming_char_error="<?php echo $this->_tpl_vars['warming_char_error']; ?>
";
var warming_email_error="<?php echo $this->_tpl_vars['warming_email_error']; ?>
";
var	warming_referee_name="<?php echo $this->_tpl_vars['warming_referee_name']; ?>
";
var	warming_referee_phone="<?php echo $this->_tpl_vars['warming_referee_phone']; ?>
";

<?php echo '  

	function value_type_chk(obje){
		var p_value=obje.value;
		var reg_char=/^[a-zA-Z0-9_]+$/; 
		
		if (p_value!="" && !reg_char.test(p_value))
		{
			alert(warming_char_error);
			obje.focus();
		}
	}
	function chkalldata(){
		var msg="";		
		if(document.getElementById("UserNa").value==\'\'){
			msg += warming_name + "\\r\\n";			
		}
		if(document.getElementById("UserLoginid").value==\'\'){
			msg += warming_id + "\\r\\n";			
		} 				
		if((document.getElementById("UserPwd").value==\'\') && (document.getElementById("UserId").value==\'\')){
			msg += warming_pw + "\\r\\n";
		}
		if(document.getElementById("UserPwd").value!=document.getElementById("chkUserPwd").value){
			msg += warming_same + "\\r\\n";
		}
 		if(document.getElementById("UserMail").value==\'\'){
			msg += warming_email + "\\r\\n";
		}
		if(document.getElementById("loginidtxt").innerText!=\'\'){
			msg += warming_idre + "\\r\\n";
		}		
		if(document.getElementById("mailre").innerText!=\'\'){
			msg += warming_mailre + "\\r\\n";
		}
		/*
		2010-11-16 edit by 健嘉
		---------------------------------------------------------
		驗證推薦人身分
		---------------------------------------------------- 
		*/
		if (manager_mode==1 && lang_db==\'\'){
			if(document.getElementById("refereeidtxt").innerText!=\'\'){
				msg += "請輸入正確的推薦人資料" + "\\r\\n";
			}
			if(document.getElementById("UserReferName").value==\'\'){
				msg += "推薦人姓名不得空白" + "\\r\\n";
			}if(document.getElementById("UserReferPhone").value==\'\'){
				msg += "推薦人手機號碼不得為空白" + "\\r\\n";
			}
		}
		if(msg==\'\'){
			return true;
		}else{
			alert(msg);
			return false;
		}
	}
	
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
	
	function chkloginid(){
		var strCmnd="";
		var dataid=document.getElementById("UserLoginid").value;
		strCmnd="mem_chk.php?act=loginid&data=" + dataid;	
		document.getElementById("outputTarget").src=strCmnd;
	}
/*
	2010-11-16 edit by 健嘉
	---------------------------------------------------------
	驗證推薦人身分
	---------------------------------------------------- 
*/
	function refermember(){
		var UserReferName=document.getElementById("UserReferName").value;
		var UserReferPhone=document.getElementById("UserReferPhone").value;
		var strCmnd2="";
		if (UserReferName!="" && UserReferPhone!=""){
			strCmnd2="mem_chk.php?act=ChkreferMember&UserReferName="+UserReferName+"&UserReferPhone="+UserReferPhone;
			document.getElementById("outputTarget").src=strCmnd2;		
		}else{
			document.getElementById(\'refereeidtxt\').innerText=\'\';
		}
	}
	
'; ?>
	
//-->
</script>
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

<iframe src="javascript:void(0);" name="outputTarget" height="0%" width="0%" id="outputTarget"></iframe>

<table width="100%" height="<?php echo $this->_tpl_vars['PageHeightDefault']; ?>
" border="0" cellspacing="0" cellpadding="0">
<tr>
<!-- 頁身 中間 主要區域位置設定 --> 
<td id="main" valign="top" style="width:<?php echo $this->_tpl_vars['center']; ?>
;">

	<?php if ($this->_tpl_vars['nowdo'] == 'readreg'): ?>
    <!-- 會員註冊條款 --> 
	  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/user_notice.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php elseif ($this->_tpl_vars['nowdo'] == 'reg'): ?>
    <!-- 會員註冊資料 --> 
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/user_register.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php else: ?>
    <!-- 會員查詢密碼 --> 
	  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "modules/user_referpw.tpl.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endif; ?>

</td>
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
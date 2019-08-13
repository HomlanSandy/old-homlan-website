<?php /* Smarty version 2.6.26, created on 2013-12-25 15:35:51
         compiled from func_pwd.htm */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無標題文件</title>
<link href="css/style1.css" rel="stylesheet" type="text/css">
</head>
<!--
	┌======================================┌───────┐========================================┐
	├======================================│ 宣 告 │========================================┤
	├======================================└───────┘========================================┤
	│	程式用途	│	func_pwd.htm		後台修改密碼 的 htm檔
	│	開發者		│	廷俊
	│	版本		│	v1.0.1.0091501
	├=======================================================================================┤
	│	1.	v1.0.1.0091501	2010/09/15	廷俊	修改密碼頁面，顯示帳號
	└=======================================================================================┘
-->
<script>
var old_passwd="<?php echo $this->_tpl_vars['old_passwd']; ?>
";
var new_passwd="<?php echo $this->_tpl_vars['new_passwd']; ?>
";
var chknew_passwd="<?php echo $this->_tpl_vars['chknew_passwd']; ?>
";
var null_error="<?php echo $this->_tpl_vars['null_error']; ?>
!";
var pwd_chk_error="<?php echo $this->_tpl_vars['pwd_chk_error']; ?>
!";
var input_char_error="<?php echo $this->_tpl_vars['input_char_error']; ?>
";
<?php echo '
<!--
	function save_chk(){
		var msg="";				
		if (document.all("old_passwd").value==""){
			msg+=old_passwd+null_error+"\\r\\n";
		} 
		if (document.all("new_passwd").value==""){
			msg+=new_passwd+null_error+"\\r\\n";
		}
		if (document.all("chknew_passwd").value==""){
			msg+=chknew_passwd+null_error+"\\r\\n";
		}		
		if (document.all("new_passwd").value!="" && document.all("chknew_passwd").value!="") {
			if (document.all("new_passwd").value!=document.all("chknew_passwd").value) {msg+=pwd_chk_error+"\\r\\n";}
		}
		if (msg!=""){
			alert(msg);	return false;
		} else {
			return true;
		}
	}
	
	function input_value_chk(obj){
		var reg=/^[a-zA-Z0-9_]+$/;		
		if ((obj.value!="") && (!reg.test(obj.value))){
			alert(input_char_error);
			obj.value="";
			obj.focus();
		}
	}
-->
'; ?>

</script>

<body>

<div id="use_title">
  <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="72%" align="left"><?php echo $this->_tpl_vars['PageTitle2']; ?>
</td>
      <td width="12%" align="right">&nbsp;</td>
    </tr>
  </table>
</div>

<!--
	2010-09-14 edit by 廷俊
	----------------------------------------------------
	新增、修改、刪除成功提示訊息
	---------------------------------------------------- 			
-->
<?php echo $this->_tpl_vars['Message']; ?>



<div id="show_table3">
	<form name="savefrm" method="post" action="<?php echo $this->_tpl_vars['frm_act']; ?>
" onsubmit="return save_chk();">
    <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
    <td valign="top">

		<table border="0" cellpadding="1" cellspacing="1" align="center"  width="80%" height="100%">
			<tr>
				<td width="25%" align="right">&nbsp;</td>
				<td align="left"><INPUT TYPE="hidden" NAME="group_id" value="<?php echo $this->_tpl_vars['group_id_value']; ?>
"></td>
			</tr>
<!--
	2010-09-15 edit by 廷俊
	----------------------------------------------------
	修改密碼頁面，顯示帳號
	---------------------------------------------------- 			
-->			
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['manager_na']; ?>
</th>
				<td align="left"><INPUT TYPE="text" size="18" value="<?php echo $this->_tpl_vars['login_id']; ?>
" disabled></td>
			</tr>	
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['old_passwd']; ?>
</th>
				<td align="left"><INPUT TYPE="password" NAME="old_passwd" id="old_passwd" size="20" value="" onblur="javascript:input_value_chk(this);"><?php echo $this->_tpl_vars['input_type_text']; ?>
</td>
			</tr>	
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['new_passwd']; ?>
</th>
				<td align="left"><INPUT TYPE="password" NAME="new_passwd" id="new_passwd" size="20" value="" onblur="javascript:input_value_chk(this);"><?php echo $this->_tpl_vars['input_type_text']; ?>
</td>
			</tr>	
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['chknew_passwd']; ?>
</th>
				<td align="left"><INPUT TYPE="password" NAME="chknew_passwd" id="chknew_passwd" size="20" value="" onblur="javascript:input_value_chk(this);"><?php echo $this->_tpl_vars['input_type_text']; ?>
</td>
			</tr>					
			<tr>
				<td colspan="2" align="center"><INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
"><INPUT TYPE="reset" value="重新設定"></td>
			</tr>					
		</table>
    </td>
    </tr>
    </table>
	</form>
</div>

<?php echo $this->_tpl_vars['temp_log']; ?>
</body>
</html>
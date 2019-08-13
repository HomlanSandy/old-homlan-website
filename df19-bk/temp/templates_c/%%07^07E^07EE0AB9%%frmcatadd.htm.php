<?php /* Smarty version 2.6.26, created on 2015-03-16 17:53:30
         compiled from frmcatadd.htm */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $this->_config[0]['vars']['website_title']; ?>
</title>
<link href="css/style1.css" rel="stylesheet" type="text/css">
</head>
<?php echo '
<script>
<!--
	function save_chk(){
		var Err_Str="";
		if (document.all(\'cat_na\').value==""){
			Err_Str="分類名稱空白!";
		}
		
		if (Err_Str!=""){
			alert(Err_Str);
			return false;
		} else {
			return true;
		}
	
	}
-->
</script>
'; ?>

<body>

<div id="use_title">
  <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="72%" align="left"><?php echo $this->_tpl_vars['PageTitle2']; ?>
</td>
      <td width="12%" align="right">
        <input name="button" type="submit" class="set_new_btn" id="button" value="<?php echo $this->_tpl_vars['Btn_List']; ?>
" onclick="location.href='<?php echo $this->_tpl_vars['Btn_List_Url']; ?>
';">
      </td>
    </tr>
  </table>
</div>
<!--
	2010-09-13 edit by 廷俊
	----------------------------------------------------
	新增、修改、刪除成功提示訊息
	---------------------------------------------------- 			
-->
<?php echo $this->_tpl_vars['Message']; ?>

<form name="savefrm" method="post" action="<?php echo $this->_tpl_vars['savefrm_act']; ?>
" onsubmit="return save_chk();">
<div id="show_table3">
	
    <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
    <td valign="top">
		<table border="0" cellpadding="1" cellspacing="1" align="center"  width="80%" height="100%">
			<tr>
				<td width="25%" align="right">&nbsp;</td>
				<td align="left">&nbsp;<INPUT TYPE="hidden" NAME="cat_id" value="<?php echo $this->_tpl_vars['cat_id_value']; ?>
"></td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['cat_na']; ?>
</th>
				<td align="left"><INPUT TYPE="text" NAME="cat_na" id="cat_na" size="20" value="<?php echo $this->_tpl_vars['cat_na_value']; ?>
"></td>
			</tr>						
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['info_state']; ?>
</th>
				<td align="left"><INPUT TYPE="radio" NAME="info_state" value="1" <?php echo $this->_tpl_vars['checkedyes']; ?>
><?php echo $this->_tpl_vars['infostateYes']; ?>
<INPUT TYPE="radio" NAME="info_state" value="0" <?php echo $this->_tpl_vars['checkedno']; ?>
><?php echo $this->_tpl_vars['infostateNo']; ?>
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
	 
</div>

<?php echo $this->_tpl_vars['temp_log']; ?>
</body>
</html>
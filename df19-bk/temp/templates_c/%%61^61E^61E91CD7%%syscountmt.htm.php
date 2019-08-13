<?php /* Smarty version 2.6.26, created on 2015-03-16 17:57:53
         compiled from syscountmt.htm */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $this->_config[0]['vars']['website_title']; ?>
</title>
<link href="css/style1.css" rel="stylesheet" type="text/css">
</head>
<!--
	┌======================================┌───────┐========================================┐
	├======================================│ 宣 告 │========================================┤
	├======================================└───────┘========================================┤
	│	程式用途	│	syscountmt.htm		計數器 的 HTM頁面
	│	開發者		│	玉玲、Fish、智倩
	│	版本		│	v1.0.1.0081001
	├=======================================================================================┤
	│	1.	v1.0.1.0081001	2010/08/10	廷俊	修改成功訊息
	└=======================================================================================┘
 -->
<script language="javascript">
<!--
var msg="<?php echo $this->_tpl_vars['msg']; ?>
";
<?php echo '
/*
	2010-05-04 edit by 廷俊
	------------------------------------------------------
	驗證計數器
	------------------------------------------------------
	2010-05-13 edit by 廷俊
	------------------------------------------------------
	訪客人數更改為九位數
	------------------------------------------------------			
*/
function chk_count(){
	var count_visit=document.savefrm.count_visit.value;

	if(count_visit >= 0 && count_visit <= 999999999){
		return true;
	}else{
		alert(msg);
		return false;
	}
}
'; ?>

-->
</script>

<body>

<div id="use_title">
  <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="72%" align="left"><?php echo $this->_tpl_vars['PageTitle_Count']; ?>
</td>
      <td width="12%" align="right">&nbsp;</td>
    </tr>
  </table>
</div>
<!--
	2010-08-10 edit by 廷俊
	----------------------------------------------------
	修改成功訊息
	---------------------------------------------------- 			
-->
<?php echo $this->_tpl_vars['Message']; ?>

<!--
2010-05-03 edit by 廷俊
------------------------------------------------------
驗證計數器
------------------------------------------------------	
-->
<div id="show_table3">
	<form name="savefrm" method="post" action="<?php echo $this->_tpl_vars['savefrm_act']; ?>
" onsubmit="return chk_count();">
    <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
    <td valign="top">

		<table border="0" cellpadding="1" cellspacing="1" align="center"  width="80%" height="100%">
			<tr>
				<td width="25%" align="right">&nbsp;</td>
				<td align="left" colspan="3">&nbsp;</td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['count_open']; ?>
</th>
				<td align="left" colspan="3">
					<INPUT TYPE="radio" NAME="opened" value="1" <?php echo $this->_tpl_vars['openedyes']; ?>
><?php echo $this->_tpl_vars['count_open_yes']; ?>

					<INPUT TYPE="radio" NAME="opened" value="0" <?php echo $this->_tpl_vars['openedno']; ?>
><?php echo $this->_tpl_vars['count_open_no']; ?>

				</td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['count_visit']; ?>
</th>
				<td align="left" colspan="3">
					<INPUT TYPE="text" NAME="count_visit" value="<?php echo $this->_tpl_vars['count_visit_value']; ?>
" >
				</td>
			</tr>			
			<tr>
				<th align="right"><input type="radio" name="syscountmt" value="1" <?php echo $this->_tpl_vars['syscountmt1']; ?>
></th>
				<td align="left" valign="middle">				
					<img src="<?php echo $this->_tpl_vars['count_style1']; ?>
" border=0>
				</td>			
				<th align="right"><input type="radio" name="syscountmt" value="2" <?php echo $this->_tpl_vars['syscountmt2']; ?>
></th>
				<td align="left" valign="middle">				
				<img src="<?php echo $this->_tpl_vars['count_style2']; ?>
" border=0>
				</td>
			</tr>
			<tr>
				<th align="right"><input type="radio" name="syscountmt" value="3" <?php echo $this->_tpl_vars['syscountmt3']; ?>
></th>
				<td align="left" valign="middle">				
					<img src="<?php echo $this->_tpl_vars['count_style3']; ?>
" border=0>
				</td>			
				<th align="right"><input type="radio" name="syscountmt" value="4" <?php echo $this->_tpl_vars['syscountmt4']; ?>
></th>
				<td align="left" valign="middle">				
					<img src="<?php echo $this->_tpl_vars['count_style4']; ?>
" border=0>
				</td>
			</tr>	
			<tr>
				<th align="right"><input type="radio" name="syscountmt" value="5" <?php echo $this->_tpl_vars['syscountmt5']; ?>
></th>
				<td align="left" valign="middle">				
					<img src="<?php echo $this->_tpl_vars['count_style5']; ?>
" border=0>
				</td>
				<th align="right"><input type="radio" name="syscountmt" value="6" <?php echo $this->_tpl_vars['syscountmt6']; ?>
></th>
				<td align="left" valign="middle"><img src="<?php echo $this->_tpl_vars['count_style6']; ?>
" border=0></td>			
			</tr>				
<!--
2010-05-03 edit by 廷俊
------------------------------------------------------
修改	<INPUT TYPE="reset" value="<?php echo $this->_tpl_vars['Btn_Reset']; ?>
">
------------------------------------------------------	
-->
			<tr>
				<th colspan="4" align="center"><INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
"><INPUT TYPE="reset" value="<?php echo $this->_tpl_vars['Btn_Reset']; ?>
"></th>
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
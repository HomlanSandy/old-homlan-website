<?php /* Smarty version 2.6.26, created on 2012-07-09 15:59:12
         compiled from footer.htm */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $this->_config[0]['vars']['website_title']; ?>
</title>
<link href="css/style1.css" rel="stylesheet" type="text/css">
</head>
<!-- /*
	┌======================================┌───────┐========================================┐
	├======================================│ 宣 告 │========================================┤
	├======================================└───────┘========================================┤
	│	程式用途	│	footer.htm		頁面底部設定 的 HTML頁面
	│	開發者		│	廷俊
	│	版本		│	v2.0.8.1012001
	├=======================================================================================┤
	│	1.	v2.0.8.1012101	2011/01/21	廷俊	a.新增備註訊息區
	│											b.備註前台多國語言的連結網址，只顯示有效的語言別
	│	2.	v2.0.8.1031401	2011/03/14	廷俊	遮蔽備註訊息區，前台多國語言的連結網址
	└=======================================================================================┘
*/ -->
<body>
<div id="use_title">
  <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>      
      <td width="72%" align="left"><?php echo $this->_tpl_vars['footer']; ?>
</td>
      <td width="12%" align="right">&nbsp;</td>
    </tr>
  </table>
</div>

<!--
	2010-09-14 edit by 廷俊
	----------------------------------------------------
	修改成功提示訊息
	---------------------------------------------------- 			
-->
<?php echo $this->_tpl_vars['Message']; ?>


<div id="show_table3">
<form name="savefrm" method="post" action="footer.php?act=save">
	<table border="0" cellpadding="0" cellspacing="0" align="center"  width="98%">			
		<tr>				
			<td>&nbsp;</td>
		</tr>
		<tr>				
			<td align="center"><?php echo $this->_tpl_vars['FckEditor']; ?>
</td>
		</tr>
<!-- 	
	2011-03-14 edit by 廷俊
	----------------------------------------------------
	遮蔽備註訊息區，前台多國語言的連結網址
	---------------------------------------------------- 

		<tr>				
			<td>&nbsp;</td>
		</tr>
		<tr>				
			<td><?php echo $this->_tpl_vars['NoteMessage']; ?>
</td>
		</tr>
-->
		<tr>				
			<td>&nbsp;</td>
		</tr>
		<tr>				
			<td align="center">
				<INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
">
			</td>
		</tr>
		<tr>				
			<td>&nbsp;</td>
		</tr>
	</table>
</form>
</div>

<?php echo $this->_tpl_vars['temp_log']; ?>
</body>
</html>
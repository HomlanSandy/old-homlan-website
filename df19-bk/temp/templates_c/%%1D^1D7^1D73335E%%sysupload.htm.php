<?php /* Smarty version 2.6.26, created on 2015-04-07 20:50:17
         compiled from sysupload.htm */ ?>
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
	│	程式用途	│	sysupload.htm		ezportal後台線上更新 HTML處理頁面
	│	開發者		│	玉玲
	│	版本		│	v1.0.0.0100401
	├=======================================================================================┤
	│	1.	v1.0.1.0100401	2010/10/04	廷俊	a.驗證是否瀏覽上傳檔案
	│											b.增加注意事項說明文字
	│	2.	v1.0.1.0100701	2010/10/07	廷俊	線上更新成功提示訊息
	│	3.	v03.00.10.1062001	2011-06-29	玉玲	1.新增css樣式項目說明text_note。
	└=======================================================================================┘
*/ -->
<script type="text/javascript">
var warming_file="<?php echo $this->_tpl_vars['warming_file']; ?>
";
<?php echo '
	function clear_db_list(){
		document.getElementById(\'tList\').innerHTML=\'\';
	}
	function show_db_list(){
		var str="?act=table_list";
		document.getElementById(\'codebehide\').src=str;
	}
/*
	2010-10-04 edit by 廷俊
	--------------------------------------------------------------
	驗證是否瀏覽上傳檔案
	--------------------------------------------------------------
*/
	function chkpost(){
		msg="";
		if(document.getElementById("sysfile").value==\'\'){
			msg += warming_file + "\\r\\n";
		}		
		if(msg==\'\'){
			return true;
		}else{
			alert(msg);
			return false;
		}
	}
'; ?>

</script>
<body>

<div id="use_title">
  <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="72%" align="left"><?php echo $this->_tpl_vars['sysupload']; ?>
</td>
      <td width="12%" align="right">&nbsp;</td>
    </tr>
  </table>
</div>
<!--
	2010-10-07 edit by 廷俊
	----------------------------------------------------
	線上更新成功提示訊息
	---------------------------------------------------- 			
-->
<?php echo $this->_tpl_vars['Message']; ?>

<div id="show_table3">
	<form name="savefrm" method="post" action="sysupload.php?act=upload" enctype="multipart/form-data" onsubmit="return chkpost();">
	<table border="0" cellpadding="1" cellspacing="1" align="center"  width="98%">	
		<tr>				
			<th align="center" colspan="2">&nbsp;</th>
		</tr>		
		<tr>				
			<th align="right" width="10%"><?php echo $this->_tpl_vars['uploadfile']; ?>
</th>
			<td align="left" valign="middle"><input type="file" name="sysfile" id="sysfile" size="50"></td>
		</tr>				
		<tr>			
			<th align="center">&nbsp;</th>
			<td align="left"><INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
"></td>
		</tr>
<!-- /*
	2010-10-04 edit by 廷俊
	--------------------------------------------------------------
	增加注意事項說明文字
	--------------------------------------------------------------
*/ -->
		<tr>	
			<td align="center">&nbsp;</td>
			<td align="left" valign="middle" class="text_note"><?php echo $this->_tpl_vars['ps']; ?>
</td>
		</tr>
	</table>
	</form>
</div>

<?php echo $this->_tpl_vars['temp_log']; ?>
</body>
</html>
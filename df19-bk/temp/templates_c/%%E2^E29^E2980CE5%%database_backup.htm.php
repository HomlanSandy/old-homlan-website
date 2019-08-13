<?php /* Smarty version 2.6.26, created on 2015-04-07 20:50:18
         compiled from database_backup.htm */ ?>
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
	│	程式用途	│	database_backup.htm		資料庫備份 的 HTM頁面
	│	開發者		│	玉玲、Fish、智倩
	│	版本		│	v1.0.1.0081001
	├=======================================================================================┤
	│	1.	v1.0.1.0081001	2010/08/10	廷俊	資料庫備份檔新增、刪除成功訊息
	└=======================================================================================┘
*/ -->
<script language="javascript">
/* 	
	2010-05-13 edit by 廷俊
	------------------------------------------------------
	驗證檔名
	------------------------------------------------------	
 */
	var warming_space = "<?php echo $this->_tpl_vars['warming_space']; ?>
";
	var warming_str = "<?php echo $this->_tpl_vars['warming_str']; ?>
";
	var warming_chr = "<?php echo $this->_tpl_vars['warming_chr']; ?>
";	
<?php echo '
	function chkpost(){
		var db_na = document.getElementById(\'db_text\').value;
		msg="";		
		//判斷空值	
		if(db_na == \'\'){	
			msg += warming_space + "\\r\\n";
		}
		//判斷\\/:*?"<>|
		if(db_na.replace(/[\\\\\\/:*?"<>|]/).length != db_na.length){	
			msg += warming_str + "\\r\\n";
		}
		//判斷是否含有中文字
		if (escape(db_na).indexOf("%u") != -1) {
			msg += warming_chr + "\\r\\n";
		}
		if(msg==\'\'){
			return true;
		}else{
			alert(msg);
			return false;
		}
	}
	function clear_db_list(){
		document.getElementById(\'tList\').innerHTML=\'\';
	}
	function show_db_list(){
		var str="?act=table_list";
		document.getElementById(\'codebehide\').src=str;
	}
'; ?>

</script>
<body>

<div id="use_title">
  <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="72%" align="left"><?php echo $this->_tpl_vars['database_backup']; ?>
</td>
      <td width="12%" align="right">&nbsp;</td>
    </tr>
  </table>
</div>
<!--
	2010-08-10 edit by 廷俊
	----------------------------------------------------
	資料庫備份檔新增、刪除成功訊息
	---------------------------------------------------- 			
-->
<?php echo $this->_tpl_vars['Message']; ?>

<div id="show_table3">
	<form name="savefrm" method="post" action="database.php?act=backup" onsubmit="return chkpost();">
	<table border="0" cellpadding="1" cellspacing="1" align="center"  width="98%">	
		<tr>				
			<th align="center" colspan="3">&nbsp;</th>
		</tr>	
		<tr>				
			<th align="center" colspan="3"><?php echo $this->_tpl_vars['database_backup_type']; ?>
</th>
		</tr>	
		<tr>				
			<td align="right"><input type="radio" name="backup_type" value="all" checked onclick="clear_db_list();"><?php echo $this->_tpl_vars['backup_all']; ?>
</td>
			<td align="left"><?php echo $this->_tpl_vars['backup_all_text']; ?>
</td>
		</tr>
<!--
	2010-05-12 edit by 廷俊
	------------------------------------------------------
	遮蔽掉個別備份功能
	------------------------------------------------------		
		<tr>				
			<th align="right"><input type="radio" name="backup_type" value="select" onclick="show_db_list();"></th>
			<td align="left"><?php echo $this->_tpl_vars['backup_select']; ?>
</td>
			<td align="left"><?php echo $this->_tpl_vars['backup_select_text']; ?>
</td>
		</tr>			
-->
<!--
	2010-05-13 edit by 廷俊
	------------------------------------------------------
	使用者可編輯檔名
	------------------------------------------------------		
-->
		<tr>
			
			<td align="right"><?php echo $this->_tpl_vars['file_name']; ?>
</td>			
			<td align="left" ><input type="text" id="db_text" name="db_text" size=50 value="<?php echo $this->_tpl_vars['db_text']; ?>
"></td>
		</tr>
		<tr>				
			<th align="right">&nbsp;</th>
			<td align="left" colspan="2"><span id="tList"></span></td>
		</tr>			
		<tr>			
			<td align="center" colspan="3">
				<INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
">
			</td>
		</tr>
		<tr>		
			<td align="center" colspan="3"><iframe id="codebehide" width="00%" height="00%"></iframe></td>			
		</tr>
		<tr>	
			<th align="right">&nbsp;</th>
			<td align="left" colspan="2"><?php echo $this->_tpl_vars['sList']; ?>
</td>			
		</tr>		
	</table>
	</form>
</div>

<?php echo $this->_tpl_vars['temp_log']; ?>
</body>
</html>
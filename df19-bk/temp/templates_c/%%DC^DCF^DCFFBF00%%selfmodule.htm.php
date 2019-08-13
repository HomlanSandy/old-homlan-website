<?php /* Smarty version 2.6.26, created on 2012-07-19 20:57:36
         compiled from selfmodule.htm */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無標題文件</title>
<script src="js/calendar.js" type="text/javascript"></script>
<script src="js/calendar-en.js" type="text/javascript"></script>
<script src="js/calendar-setup.js" type="text/javascript"></script>

<link href="css/calendar-win2k-cold-1.css" rel="stylesheet" type="text/css" />
<link href="css/style1.css" rel="stylesheet" type="text/css">
</head>
	<script language=javascript>
<!--
/*註解
2010-05-05 edit by 廷俊
------------------------------------------------------
增加驗證生效日期須小於等於截止日期
------------------------------------------------------		
*/
var warming_date="<?php echo $this->_tpl_vars['warming_date']; ?>
";
<?php echo '
	function chkpost(){
		msg="";
		if(document.getElementById("f_date_b").value > document.getElementById("f_date_a").value){
			msg += warming_date + "\\r\\n";
		}
		if(msg==\'\'){
			return true;
		}else{
			alert(msg);
			return false;
		}
	}

'; ?>
	
//-->
	</script>
<body>
<div id="use_title">
  <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="72%" align="left"><?php echo $this->_tpl_vars['PageTitle2']; ?>
</td>
      <td width="12%" align="right">
        <input name="button" type="submit" class="set_new_btn" id="button" value="<?php echo $this->_tpl_vars['btn_List']; ?>
" onclick="location.href='<?php echo $this->_tpl_vars['BtnCmdListUrl']; ?>
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

<div id="show_table3">
	  <form method=post action="selfmodulelist.php?act=save" onsubmit="return chkpost();">
		<table border="0" cellpadding="2" cellspacing="2" align="center" width="100%">
			<tr>
				<th align="right" width="15%"></th>
				<td align="left" width="80%"><INPUT TYPE="hidden" NAME="selfcmd_id" value="<?php echo $this->_tpl_vars['selfcmd_id']; ?>
"></td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['ModuleTitle']; ?>
</th>
				<td align="left"><INPUT TYPE="text" NAME="selfcmd_title" size="50" value="<?php echo $this->_tpl_vars['selfcmd_title']; ?>
"></td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['SelfStartDay']; ?>
</th>
				<td align="left"><input type="text" name="selfcmd_startdate" id="f_date_b" value="<?php echo $this->_tpl_vars['selfcmd_startdate']; ?>
" readonly></td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['SelfEndDay']; ?>
</th>
				<td align="left"><input type="text" name="selfcmd_enddate" id="f_date_a" value="<?php echo $this->_tpl_vars['selfcmd_enddate']; ?>
" readonly></td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['ModuleOrder']; ?>
</th>
				<td align="left"><INPUT TYPE="text" NAME="selfcmd_order" size="20" value="<?php echo $this->_tpl_vars['selfcmd_order']; ?>
"></td>
			</tr>
			</tr>
			<tr>
				<th align="right" valign="top"><?php echo $this->_tpl_vars['ModuleContent']; ?>
</th>
				<td align="left" valign="top"><?php echo $this->_tpl_vars['FckEditor']; ?>
</td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['InfoState']; ?>
</th>
				<td align="left"><INPUT TYPE="radio" NAME="info_state" value="1" checked><?php echo $this->_tpl_vars['infostateyes']; ?>
<INPUT TYPE="radio" NAME="info_state" value="0" <?php if ($this->_tpl_vars['info_state'] == '0'): ?>checked<?php endif; ?>><?php echo $this->_tpl_vars['infostateno']; ?>
</td>
			</tr>	
			<tr>
				<td colspan="2" align="center"><INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
"><INPUT TYPE="reset" value="<?php echo $this->_tpl_vars['Btn_Reset']; ?>
"></td>
			</tr>
		</table>
	  </form>
<?php echo '
<script type="text/javascript">
<!--

	today = new Date();
	
	function catcalc(cal) {
        var date = cal.date;
        var time = date.getTime()
        var date1 = new Date(time);
        //field.value = date2.print("%Y/%m/%d");
		document.getElementById("f_date_a").innerText=date1.print("%Y-%m-%d");
    }
    Calendar.setup({
    inputField     :    "f_date_a",   // id of the input field
    ifFormat       :    "%Y-%m-%d",       // format of the input field
    showsTime      :    false,
    timeFormat     :    "24",
    range          :    [today.getYear()-100,today.getYear()+100],
    onUpdate       :    catcalc
    });
	
	function catcald(cal) {
        var date = cal.date;
        var time = date.getTime()
        var date2 = new Date(time);
        //field.value = date2.print("%Y/%m/%d");
		document.getElementById("f_date_b").innerText=date2.print("%Y-%m-%d");
    }
    Calendar.setup({
    inputField     :    "f_date_b",   // id of the input field
    ifFormat       :    "%Y-%m-%d",       // format of the input field
    showsTime      :    false,
    timeFormat     :    "24",
    range          :    [today.getYear()-100,today.getYear()+100],
    onUpdate       :    catcald
    });
//-->
</script>
'; ?>

</div>

<?php echo $this->_tpl_vars['temp_log']; ?>
</body>
</html>
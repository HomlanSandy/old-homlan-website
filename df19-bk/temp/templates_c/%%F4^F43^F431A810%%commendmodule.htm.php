<?php /* Smarty version 2.6.26, created on 2012-07-19 20:53:55
         compiled from commendmodule.htm */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無標題文件</title>
<script src="js/calendar.js" type="text/javascript"></script>
<script src="js/calendar-en.js" type="text/javascript"></script>
<script src="js/calendar-setup.js" type="text/javascript"></script>
<link href="css/calendar-win2k-cold-1.css" rel="stylesheet" type="text/css" />
<script src="js/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="css/style1.css" rel="stylesheet" type="text/css">
</head> 
<script type="text/javascript">
<!--
/*註解
2010-05-05 edit by 廷俊
------------------------------------------------------
增加驗證生效日期須小於等於截止日期
------------------------------------------------------		
*/
	var number_error="<?php echo $this->_tpl_vars['number_error']; ?>
";
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
		function isNumber(obje){
			var re =/^[0-9]+$/;
			if ((obje.value!="") && (!re.test(obje.value))){
				alert(number_error); obje.focus();return false;
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

<div id="show_table2">
<!--
	2010-05-12 edit by 廷俊
	------------------------------------------------------
	新增推薦模組時，將資訊明細列表反白
	------------------------------------------------------
-->
<!-- 頁籤起 -->
	<div id="TabbedPanels1" class="TabbedPanels">
	  <ul class="TabbedPanelsTabGroup">
		<li class="TabbedPanelsTab" tabindex="0"><?php echo $this->_tpl_vars['PageList1']; ?>
</li>
		<li class="TabbedPanelsTab" tabindex="0" <?php if ($this->_tpl_vars['act'] == add): ?> disabled <?php endif; ?>><?php echo $this->_tpl_vars['PageList2']; ?>
</li>	
	  </ul>
	<div class="TabbedPanelsContentGroup">
	  <!-- 推薦模組設定 -->
	  <div class="TabbedPanelsContent">
	   <form method=post action="commendmodulelist.php?act=save" onsubmit="return chkpost();">
		<table border="0" cellpadding="2" cellspacing="2" align="center" width="95%">
			<tr>
				<th align="right">&nbsp;</th>
				<td align="left"><INPUT TYPE="hidden" NAME="commend_id" value="<?php echo $this->_tpl_vars['commend_id']; ?>
"></td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['ModuleTitle']; ?>
</th>
				<td align="left"><INPUT TYPE="text" NAME="commend_title" size="50" value="<?php echo $this->_tpl_vars['commend_title']; ?>
"></td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['CmdStartDay']; ?>
</th>
				<td align="left"><input type="text" name="commend_startdate" id="f_date_b" value="<?php echo $this->_tpl_vars['commend_startdate']; ?>
" readonly></td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['CmdEndDay']; ?>
</th>
				<td align="left"><input type="text" name="commend_enddate" id="f_date_a" value="<?php echo $this->_tpl_vars['commend_enddate']; ?>
" readonly></td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['CmdDisplay']; ?>
</th>
				<td align="left" valign="middle">
					<input type="radio" name="cmdShowType" value="1" checked><?php echo $this->_tpl_vars['infos_na']; ?>

					<input type="radio" name="cmdShowType" value="2" <?php if ($this->_tpl_vars['command_show_type'] == 2): ?>checked<?php endif; ?>><?php echo $this->_tpl_vars['infos_small_pic']; ?>
				</td>
			</tr>			
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['CmdRecordLimit']; ?>
</th>
				<td align="left"><INPUT TYPE="text" NAME="command_recordmax" size="10" value="<?php echo $this->_tpl_vars['command_recordmax']; ?>
"><?php echo $this->_tpl_vars['CmdRecordLimitText']; ?>
</td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['CmdRecordAll']; ?>
</th>
				<td align="left"><INPUT TYPE="text" NAME="commend_recordmore" size="10" value="<?php echo $this->_tpl_vars['command_more']; ?>
"><?php echo $this->_tpl_vars['CmdRecordAllText']; ?>
</td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['CmdOrder']; ?>
</th>
				<td align="left"><INPUT TYPE="text" NAME="commend_order" size="10" value="<?php echo $this->_tpl_vars['commend_order']; ?>
"></td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['CmdMoudleType']; ?>
</th>
				<td align="left">
					<INPUT TYPE="radio" NAME="md_type" value="common" checked onclick="javascript:document.getElementById('marquee_item').style.display='none';"><?php echo $this->_tpl_vars['CmdMoudlelList']; ?>
<INPUT TYPE="radio" NAME="md_type" value="marquee" <?php if ($this->_tpl_vars['md_type'] == 'marquee'): ?>checked<?php endif; ?>  onclick="javascript:document.getElementById('marquee_item').style.display='';"><?php echo $this->_tpl_vars['CmdMoudlelMaqeen']; ?>
					
				</td>
			</tr>
			<tr id="marquee_item" <?php if ($this->_tpl_vars['md_type'] != 'marquee'): ?>style="display:none;"<?php endif; ?>>
				<th align="right">&nbsp;</th>
				<td align="left">
					<?php echo $this->_tpl_vars['MaqeenHeight']; ?>
<INPUT TYPE="text" NAME="marquee_height" size="5" value="<?php echo $this->_tpl_vars['marquee_height']; ?>
"><?php echo $this->_tpl_vars['MaqeenHeightText']; ?>
<br>
					<?php echo $this->_tpl_vars['MaqeenSpeed']; ?>
<INPUT TYPE="text" NAME="marquee_speed" size="5" value="<?php echo $this->_tpl_vars['marquee_speed']; ?>
"><?php echo $this->_tpl_vars['MaqeenSpeedText']; ?>
					
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
				<td colspan="2" align="center">&nbsp;</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
">
					<INPUT TYPE="reset" value="<?php echo $this->_tpl_vars['Btn_Reset']; ?>
">
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">&nbsp;</td>
			</tr>
		</table>
	  </div>
	  
	  <!-- 資訊明細列表 -->
	  <div class="TabbedPanelsContent">	
		<table border="0" cellpadding="2" cellspacing="2" align="center" width="95%">		
			<tr>
				<td colspan="2" align="center">&nbsp;</td>
			</tr>
			<tr>
				<td>
					<table id="MyTbDetail2" align="center" border="0" cellpadding="1" cellspacing="1" width="100%"><tr height=25>
						<td width=10% align=center><B><?php echo $this->_tpl_vars['ModuleId']; ?>
</B></td>
						<td width=60% align=center><B><?php echo $this->_tpl_vars['CmdInfoNa']; ?>
</B></td>
						<td width=10% align=center><B><?php echo $this->_tpl_vars['CmdOrder']; ?>
</B></td>
						<td width=20% align=center><B><?php echo $this->_tpl_vars['CmdInfoEdite']; ?>
</B></td></tr>
						<?php echo $this->_tpl_vars['tblstr']; ?>

					</table>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">&nbsp;</td>
			</tr>
			<tr>				
				<td align="center">
					<INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
">
					<INPUT TYPE="reset" value="<?php echo $this->_tpl_vars['Btn_Reset']; ?>
">
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">&nbsp;</td>
			</tr>
		</table>	
	  </div>
	</form>		
	</div>
</div>  
<?php echo '  
<script type="text/javascript">
<!--
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");

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


<!-- 頁籤終 -->
</div>
 
<?php echo $this->_tpl_vars['temp_log']; ?>
</body>
</html>
<?php /* Smarty version 2.6.26, created on 2016-01-28 14:44:57
         compiled from func_useredit.htm */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無標題文件</title>
<link href="css/style1.css" rel="stylesheet" type="text/css">
</head>
<!-- /*
	┌======================================┌───────┐========================================┐
	├======================================│ 宣 告 │========================================┤
	├======================================└───────┘========================================┤
	│	程式用途	│	func_useredit.htm	後台帳號管理 的 HTML處理頁面
	│	開發者		│	玉玲
	│	版本		│	v1.0.1.0091401
	├=======================================================================================┤
	│	1.	v1.0.1.0091401	2010/09/14	廷俊	驗證管理者帳號必須選擇權限群組
	│	2.	v2.0.1.0112501	2010/11/25	娜娜	當編輯儲存時不需驗證帳號是否重複
	│	3.	v03.00.10.1062001	2011-06-29	玉玲	1.新增css樣式項目說明text_note。
	└=======================================================================================┘
*/ -->
<SCRIPT LANGUAGE="JavaScript">
<!--
var name_error="<?php echo $this->_tpl_vars['name_error']; ?>
";
var account_error="<?php echo $this->_tpl_vars['account_error']; ?>
";
var logintxt_error="<?php echo $this->_tpl_vars['logintxt_error']; ?>
";//$_LANG['logintxt_error']="帳號重複，請輸入其他帳號!";
var login_input_error="<?php echo $this->_tpl_vars['login_input_error']; ?>
";
var warming_gp="<?php echo $this->_tpl_vars['warming_gp']; ?>
";
var act="<?php echo $this->_tpl_vars['act']; ?>
";
<?php echo '
/*
 	2010-09-14 edit by 廷俊
	----------------------------------------------------
	驗證管理者帳號必須選擇權限群組
	----------------------------------------------------  
*/
	function chkpost(){	
		var teststr=/^[a-zA-Z0-9_]+$/; 
		msg="";
		if(document.getElementById("manager_na").value==""){
			msg += name_error+"\\r\\n";
		}
		if(document.getElementById("manager_LoginId").value==\'\'){
			msg += account_error+"\\r\\n";
		} else {
			 if(!teststr.test(document.getElementById("manager_LoginId").value)){
				msg += login_input_error+"\\r\\n";
			 }
		}
		if(act==\'add\')
		{
			if (document.getElementById("logintxt").innerText!=\'\'){
				msg += logintxt_error+"\\r\\n";
			}
		}
		if(document.getElementById("manager_funcgroup").value==0){
			msg += warming_gp + "\\r\\n";
		}	
		if(msg==\'\'){
			return true;
		} else {	
			alert(msg);	
			return false;	
		}
	
	}
	
	function chkloginid(){
		document.getElementById("logintxt").innerText=\'\';
		var datastr=document.getElementById("manager_LoginId").value;
		if (datastr!=\'\'){
			document.getElementById("ifm").src="func_manager.php?act=loginidchk&data=" + datastr;
		}
		
	}
//-->
'; ?>

</SCRIPT>


<body>

<div id="use_title">
  <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="72%" align="left"><?php echo $this->_tpl_vars['PageTitle2']; ?>
</td>
      <td width="12%" align="right">
        <input name="button" type="submit" class="set_new_btn" id="button" value="<?php echo $this->_tpl_vars['Btn_List']; ?>
" onclick="location.href='<?php echo $this->_tpl_vars['BtnListUrl']; ?>
';">
      </td>
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
	<form name="frm" method="post" action="<?php echo $this->_tpl_vars['frm_act']; ?>
" onsubmit="return chkpost();">
	<table width="100%" height="100%" border="0" cellpadding="2" cellspacing="2">
    <tr>
    <td valign="top">

		<table border="0" cellpadding="1" cellspacing="1" align="center"  width="80%" height="100%">
			<tr>
				<td width="25%" align="right">&nbsp;</td>
				<td align="left" class="text_note">&nbsp;<INPUT TYPE="hidden" NAME="manager_id" id="manager_id" value="<?php echo $this->_tpl_vars['manager_id_value']; ?>
"></td>
			</tr>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['manager_na']; ?>
</th>
				<td align="left" class="text_note"><INPUT TYPE="text" NAME="manager_na" id="manager_na" size="20" value="<?php echo $this->_tpl_vars['manager_na_value']; ?>
">*</td>
			</tr>	
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['manager_email']; ?>
</th>
				<td align="left" class="text_note"><INPUT TYPE="text" NAME="manager_email" id="manager_email" size="50" value="<?php echo $this->_tpl_vars['manager_email_value']; ?>
"></td>
			</tr>	
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['manager_tel']; ?>
</th>
				<td align="left"><INPUT TYPE="text" NAME="manager_tel" id="manager_tel" size="20" value="<?php echo $this->_tpl_vars['manager_tel_value']; ?>
"></td>
			</tr>	
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['manager_LoginId']; ?>
</th>
				<td align="left"><INPUT TYPE="text" NAME="manager_LoginId" id="manager_LoginId" size="20" value="<?php echo $this->_tpl_vars['manager_LoginId_value']; ?>
" <?php if ($this->_tpl_vars['act'] == 'add'): ?><?php if ($this->_tpl_vars['sys_default'] != 'sys'): ?>onblur="chkloginid();"<?php endif; ?><?php endif; ?> <?php echo $this->_tpl_vars['umreadonly']; ?>
><?php echo $this->_tpl_vars['login_input_type']; ?>
<span id="logintxt" class="text_note">*</span></td>
			</tr>	
			<?php if ($this->_tpl_vars['act'] == 'add'): ?>
			<tr>
				<th align="right">&nbsp;</th>
				<td align="left"><span id="logintxt" class="text_note"><?php echo $this->_tpl_vars['default_password']; ?>
</span></td>
			</tr>
			<?php endif; ?>
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['manager_funcgroup']; ?>
</th>
				<td align="left">
					<SELECT NAME="manager_funcgroup" id="manager_funcgroup">					
					<?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['umFuncGroup']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['j']['show'] = true;
$this->_sections['j']['max'] = $this->_sections['j']['loop'];
$this->_sections['j']['step'] = 1;
$this->_sections['j']['start'] = $this->_sections['j']['step'] > 0 ? 0 : $this->_sections['j']['loop']-1;
if ($this->_sections['j']['show']) {
    $this->_sections['j']['total'] = $this->_sections['j']['loop'];
    if ($this->_sections['j']['total'] == 0)
        $this->_sections['j']['show'] = false;
} else
    $this->_sections['j']['total'] = 0;
if ($this->_sections['j']['show']):

            for ($this->_sections['j']['index'] = $this->_sections['j']['start'], $this->_sections['j']['iteration'] = 1;
                 $this->_sections['j']['iteration'] <= $this->_sections['j']['total'];
                 $this->_sections['j']['index'] += $this->_sections['j']['step'], $this->_sections['j']['iteration']++):
$this->_sections['j']['rownum'] = $this->_sections['j']['iteration'];
$this->_sections['j']['index_prev'] = $this->_sections['j']['index'] - $this->_sections['j']['step'];
$this->_sections['j']['index_next'] = $this->_sections['j']['index'] + $this->_sections['j']['step'];
$this->_sections['j']['first']      = ($this->_sections['j']['iteration'] == 1);
$this->_sections['j']['last']       = ($this->_sections['j']['iteration'] == $this->_sections['j']['total']);
?>
					<option VALUE="<?php echo $this->_tpl_vars['umFuncGroup'][$this->_sections['j']['index']]['group_id']; ?>
" <?php echo $this->_tpl_vars['umFuncGroup'][$this->_sections['j']['index']]['group_sel']; ?>
><?php echo $this->_tpl_vars['umFuncGroup'][$this->_sections['j']['index']]['group_na']; ?>
</option>
					<?php endfor; endif; ?>
					</SELECT>
					<span id="logintxt" class="text_note">*</span>
				</td>
			</tr>				
			<tr>
				<th align="right"><?php echo $this->_tpl_vars['FlistInfo']; ?>
</th>
				<td align="left"><INPUT TYPE="radio" NAME="info_state" value="1" <?php echo $this->_tpl_vars['checkedyes']; ?>
><?php echo $this->_tpl_vars['FlistInfoYes']; ?>
<INPUT TYPE="radio" NAME="info_state" value="0" <?php echo $this->_tpl_vars['checkedno']; ?>
><?php echo $this->_tpl_vars['FlistInfoNo']; ?>
</td>
			</tr>			
			<tr>
				<td colspan="2" align="center"><INPUT TYPE="submit" name="btn_save" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
"><INPUT TYPE="reset" name="btn_reset"></td>
			</tr>					
		</table>
    </td>
    </tr>
    </table>
	</form>
	<iframe width=00% height=00% id="ifm"></iframe>
</div>

<?php echo $this->_tpl_vars['temp_log']; ?>
</body>
</html>
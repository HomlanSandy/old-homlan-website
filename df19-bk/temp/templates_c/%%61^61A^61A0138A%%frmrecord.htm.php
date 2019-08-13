<?php /* Smarty version 2.6.26, created on 2012-07-30 10:00:20
         compiled from frmrecord.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http//www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<link href="css/style1.css" rel="stylesheet" type="text/css" />
</head> 
<!--
	┌======================================┌───────┐========================================┐
	├======================================│ 宣 告 │========================================┤
	├======================================└───────┘========================================┤
	│	程式用途	│	frmrecord.htm	後台"表單記錄查詢"編輯的HTML頁面
	│	開發者		│	廷俊
	│	版本		│	v03.00.02.1040801
	├=======================================================================================┤
	│	1.	v03.00.02.1040801	2011/04/26	廷俊	1.表單記錄編輯頁面
	│												2.返回表單記錄列表頁面，需帶表單名稱搜尋條件值
	│												3.新增、修改成功提示訊息
	│												4.搜尋表單的資料表
	│												5.取得表單欄位名稱
	│												6.利用表單欄位名稱，取得表單欄位資料
	│												7.修改表單記錄成功提示訊息
	└=======================================================================================┘
*/-->
<body>
<div id="use_title">
  <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
      <td width="72%" align="left"><?php echo $this->_tpl_vars['PageTitle2']; ?>
</td>
      <td width="12%" align="right">
        <input name="button" type="submit" class="set_new_btn" id="button" value="<?php echo $this->_tpl_vars['Btn_ListRecord']; ?>
" onclick="location.href='<?php echo $this->_tpl_vars['BtnUnfoListUrl']; ?>
';" />
      </td>
    </tr>
  </table>
</div>
<!--
	2010-07-30 edit by 廷俊
	----------------------------------------------------
	新增、修改成功提示訊息
	---------------------------------------------------- 			
-->
<?php echo $this->_tpl_vars['Message']; ?>

<div id="show_table3">
<FORM METHOD=POST enctype="multipart/form-data" ACTION="frmrecordlist.php?act=save">
	<table border="0" cellpadding="2" cellspacing="2" align="center" width="80%" height="100%">
		<tr>
			<th align="right" valign="top">&nbsp;</th>
			<td align="left">
				<INPUT TYPE="hidden" NAME="frmlist_id" id="frmlist_id" value="<?php echo $this->_tpl_vars['frmlist_id']; ?>
">
				<INPUT TYPE="hidden" NAME="frm_create_date" id="frm_create_date" value="<?php echo $this->_tpl_vars['frm_create_date']; ?>
">
			</td>
		</tr>
	<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['umListTitle']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
		<tr>
			<th align="right" valign="top"><?php echo $this->_tpl_vars['umListTitle'][$this->_sections['i']['index']]['list_title']; ?>
</th>
			<td align="left"><?php echo $this->_tpl_vars['umListRecord'][$this->_sections['i']['index']]; ?>
</td>
		</tr>
	<?php endfor; endif; ?>
	<?php if ($this->_tpl_vars['alter_date'] != ""): ?>
		<tr>
			<th align="right" valign="top"><?php echo $this->_tpl_vars['AlterDate']; ?>
</th>
			<td align="left">
				<INPUT TYPE="text" NAME="alter_date" id="alter_date" value="<?php echo $this->_tpl_vars['alter_date']; ?>
" disabled>
			</td>
		</tr>	
		<tr>
			<th align="right" valign="top"><?php echo $this->_tpl_vars['AlterUser']; ?>
</th>
			<td align="left">
				<INPUT TYPE="text" NAME="alter_user" id="alter_user" value="<?php echo $this->_tpl_vars['alter_user']; ?>
" disabled>
			</td>
		</tr>	
	<?php endif; ?>
		<tr>
			<td align="center" colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<td align="center" colspan="2">
				<INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
">
				<INPUT TYPE="reset" value="<?php echo $this->_tpl_vars['Btn_Reset']; ?>
">
			</td>
		</tr>
		<tr>
			<td align="center" colspan="2">&nbsp;</td>
		</tr>
	</table>
</FORM>
</div>
<?php echo $this->_tpl_vars['temp_log']; ?>
</body>
</html>
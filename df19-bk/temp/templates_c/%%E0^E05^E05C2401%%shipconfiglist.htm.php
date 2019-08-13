<?php /* Smarty version 2.6.26, created on 2015-04-07 20:50:13
         compiled from shipconfiglist.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'shipconfiglist.htm', 50, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<script src="js/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="css/style1.css" rel="stylesheet" type="text/css" />
</head>
<!--
	┌======================================┌───────┐========================================┐
	├======================================│ 宣 告 │========================================┤
	├======================================└───────┘========================================┤
	│	程式用途	│	shipconfig.htm		後台商品設定→出貨設定 的 htm顯示頁面
	│	開發者		│	廷俊
	│	版本		│	v1.0.0.0081701
	├=======================================================================================┤
	│	1.	v1.0.1.0081701	2010/08/17	廷俊	取消2010-08-12的訂單設定、需求單設定，更正為編輯付款設定、出貨設定
	└=======================================================================================┘
-->	
<body>
<div id="use_title">
  <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="72%" align="left"><?php echo $this->_tpl_vars['PageTitle']; ?>
</td>
      <td width="12%" align="right">
        <input name="button" type="button" class="set_new_btn" id="button" value="<?php echo $this->_tpl_vars['Btn_AddShip']; ?>
" onclick="location.href='<?php echo $this->_tpl_vars['BtnAddShipUrl']; ?>
';">
      </td>
    </tr>
  </table>
</div>
<!--
	2010-08-17 edit by 廷俊
	----------------------------------------------------
	修改成功訊息
	---------------------------------------------------- 			
-->
<?php echo $this->_tpl_vars['Message']; ?>


<div id="show_table2" class="main_link">
		<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
			<tr>      
				<td width="60px" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['ShipId']; ?>
</td>
				<td width="" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['Ship']; ?>
</td>
				<td width="90px" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['ShipOrder']; ?>
</td>
				<td width="90px" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['InfoState']; ?>
</td>	
				<td width="90px" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['ShipOperator']; ?>
</td>
			</tr>
				<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['umship']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<td height="25" align="center" valign="middle" class="table_td_02"><?php echo smarty_function_math(array('equation' => "x+(y-1)*z",'x' => $this->_sections['i']['rownum'],'y' => $this->_tpl_vars['num_page'],'z' => $this->_tpl_vars['perpagenum_value']), $this);?>
</td>
				<td height="25" align="left" valign="middle" class="table_td_02"><?php echo $this->_tpl_vars['umship'][$this->_sections['i']['index']]['ship_na']; ?>
</td>
				<td height="25" align="center" valign="middle" class="table_td_02"><?php echo $this->_tpl_vars['umship'][$this->_sections['i']['index']]['ship_order']; ?>
</td>
				<td height="25" align="center" valign="middle" class="table_td_02"><?php echo $this->_tpl_vars['umship'][$this->_sections['i']['index']]['info_state']; ?>
</td>	
				<td height="25" valign="middle" align="center" class="table_td_02"><a href="<?php echo $this->_tpl_vars['umship'][$this->_sections['i']['index']]['ship_url']; ?>
"><?php echo $this->_tpl_vars['ShipEdit']; ?>
</a>&nbsp;|&nbsp;<a href="<?php echo $this->_tpl_vars['umship'][$this->_sections['i']['index']]['delShip_url']; ?>
" onclick="return confirm('<?php echo $this->_tpl_vars['chkDelete']; ?>
?');"><?php echo $this->_tpl_vars['ShipDelete']; ?>
</a></td>
			</tr>
				<?php endfor; endif; ?>
		</table>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="50%" height="30" align="left" class="table_td_03">
    <?php echo $this->_tpl_vars['records_str']; ?>

    </td>
    <td width="50%" align="right" class="table_td_03">
    <?php if ($this->_tpl_vars['firsturl'] != ''): ?><a href="<?php echo $this->_tpl_vars['firsturl']; ?>
"><?php echo $this->_tpl_vars['firstpage']; ?>
</a><?php else: ?><?php echo $this->_tpl_vars['firstpage']; ?>
<?php endif; ?>
    <?php if ($this->_tpl_vars['upperurl'] != ''): ?><a href="<?php echo $this->_tpl_vars['upperurl']; ?>
"><?php echo $this->_tpl_vars['upperpage']; ?>
</a><?php else: ?><?php echo $this->_tpl_vars['upperpage']; ?>
<?php endif; ?>
    <?php if ($this->_tpl_vars['nexturl'] != ''): ?><a href="<?php echo $this->_tpl_vars['nexturl']; ?>
"><?php echo $this->_tpl_vars['nextpage']; ?>
</a><?php else: ?><?php echo $this->_tpl_vars['nextpage']; ?>
<?php endif; ?>
    <?php if ($this->_tpl_vars['lasturl'] != ''): ?><a href="<?php echo $this->_tpl_vars['lasturl']; ?>
"><?php echo $this->_tpl_vars['lastpage']; ?>
</a><?php else: ?><?php echo $this->_tpl_vars['lastpage']; ?>
<?php endif; ?>
<!--
	2010-08-06 edit by 廷俊
	----------------------------------------------------
	輸入查詢條件後 與 下拉式選擇頁碼，都必須selected查詢條件的值
	---------------------------------------------------- 			
-->
    <select name="gotoPage" id="gotoPage" onChange="location.href=(this.value)">
		<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['total_pages']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<?php if ($this->_sections['i']['rownum'] == $this->_tpl_vars['num_page']): ?>
				<option value="?perpagenum=<?php echo $this->_tpl_vars['perpagenum_value']; ?>
&num_page=<?php echo $this->_sections['i']['rownum']; ?>
" selected><?php echo $this->_sections['i']['rownum']; ?>
</option>
			<?php else: ?>
				<option value="?perpagenum=<?php echo $this->_tpl_vars['perpagenum_value']; ?>
&num_page=<?php echo $this->_sections['i']['rownum']; ?>
"><?php echo $this->_sections['i']['rownum']; ?>
</option>
			<?php endif; ?>
		<?php endfor; endif; ?>
    </select>
	<?php echo $this->_tpl_vars['PerPageNme']; ?>

	<?php echo $this->_tpl_vars['umSetPageList']; ?>

   </td>
  </tr> 
</table>
</div>
</form>	
<?php echo $this->_tpl_vars['temp_log']; ?>
</body>
</html>
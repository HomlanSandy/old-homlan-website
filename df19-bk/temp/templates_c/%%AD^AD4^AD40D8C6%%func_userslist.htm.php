<?php /* Smarty version 2.6.26, created on 2016-01-28 14:43:47
         compiled from func_userslist.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'func_userslist.htm', 66, false),)), $this); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無標題文件</title>
<link href="css/style1.css" rel="stylesheet" type="text/css">
</head>
<!--
	┌======================================┌───────┐========================================┐
	├======================================│ 宣 告 │========================================┤
	├======================================└───────┘========================================┤
	│	程式用途	│	func_userslist.htm		帳號管理 的HTML頁面
	│	開發者		│	玉玲、Fish、智倩
	│	版本		│	v1.0.1.0080601
	├=======================================================================================┤
	│	1.	v2.0.0.0112501	2010/11/25	娜娜	列表新增搜尋功能
	└=======================================================================================┘
-->
<body>

<div id="use_title">
  <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="72%" align="left"><?php echo $this->_tpl_vars['PageTitle']; ?>
</td>
      <td width="12%" align="right">
        <input name="button" type="button" class="set_new_btn" id="button" value="<?php echo $this->_tpl_vars['Btn_Add']; ?>
" onclick="location.href='<?php echo $this->_tpl_vars['BtnAddUrl']; ?>
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

<form name="seachfrm" method="post" action="func_manager.php?act=list">
<div id="search_block">
<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left">
	  <?php echo $this->_tpl_vars['ListNa']; ?>

      <input name="textfield" type="text" size="15" value="<?php echo $this->_tpl_vars['textfield']; ?>
">
	  <?php echo $this->_tpl_vars['InfoState']; ?>
<?php echo $this->_tpl_vars['infoSel']; ?>

      <img src="images/search_1.gif" width="20" height="20">	  
	  <input type="hidden" name="perpagenum" value="<?php echo $this->_tpl_vars['perpagenum_value']; ?>
">
      <input name="button2" type="submit" class="search_btn" id="button2" value="<?php echo $this->_tpl_vars['DiscussSear']; ?>
"></td>
    </tr>
</table>
</div>

<div id="show_table4" class="main_link">
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>           
	  <td width="50px" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['ListNo']; ?>
</td>
      <td width="" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['ListAccount']; ?>
</td>
	  <td width="" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['ListNa']; ?>
</td>
	  <td width="" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['ListGroup']; ?>
</td>
	  <td width="90px" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['InfoState']; ?>
</td>
      <td width="90px" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['ListOperator']; ?>
</td>
    </tr>  
	<?php unset($this->_sections['j']);
$this->_sections['j']['name'] = 'j';
$this->_sections['j']['loop'] = is_array($_loop=$this->_tpl_vars['umLists']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
    <tr>         	   
	   <td height="25" valign="middle" align="center" class="table_td_02"><?php echo smarty_function_math(array('equation' => "x+(y-1)*z",'x' => $this->_sections['j']['rownum'],'y' => $this->_tpl_vars['num_page'],'z' => $this->_tpl_vars['perpagenum_value']), $this);?>
&nbsp;</td>	  
	   <td height="25" valign="middle" align="left" class="table_td_02"><?php echo $this->_tpl_vars['umLists'][$this->_sections['j']['index']]['list_account']; ?>
&nbsp;</td>	  
	   <td height="25" valign="middle" align="left" class="table_td_02"><?php echo $this->_tpl_vars['umLists'][$this->_sections['j']['index']]['list_na']; ?>
&nbsp;</td>	
	   <td height="25" valign="middle" align="left" class="table_td_02"><?php echo $this->_tpl_vars['umLists'][$this->_sections['j']['index']]['list_groupna']; ?>
&nbsp;</td>	
	   <td height="25" valign="middle" align="center" class="table_td_02"><?php echo $this->_tpl_vars['umLists'][$this->_sections['j']['index']]['info_state']; ?>
&nbsp;</td>	   
	   <td height="25" valign="middle" align="center" class="table_td_02"><a href="<?php echo $this->_tpl_vars['umLists'][$this->_sections['j']['index']]['list_editurl']; ?>
"><?php echo $this->_tpl_vars['ListEdit']; ?>
</a><?php if ($this->_tpl_vars['umLists'][$this->_sections['j']['index']]['list_sys'] == 'usr'): ?>&nbsp;|&nbsp;<a href="<?php echo $this->_tpl_vars['umLists'][$this->_sections['j']['index']]['list_deleteurl']; ?>
" onclick="return confirm('<?php echo $this->_tpl_vars['cheDelete']; ?>
?');"><?php echo $this->_tpl_vars['ListDelete']; ?>
<?php endif; ?></</td>
	   
    </tr>
	<?php endfor; endif; ?>	
  </table>
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
&selcatid=<?php echo $this->_tpl_vars['selcatid']; ?>
&textfield=<?php echo $this->_tpl_vars['textfield']; ?>
" selected><?php echo $this->_sections['i']['rownum']; ?>
</option>
			<?php else: ?>
				<option value="?perpagenum=<?php echo $this->_tpl_vars['perpagenum_value']; ?>
&num_page=<?php echo $this->_sections['i']['rownum']; ?>
&selcatid=<?php echo $this->_tpl_vars['selcatid']; ?>
&textfield=<?php echo $this->_tpl_vars['textfield']; ?>
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
<?php echo $this->_tpl_vars['temp_log']; ?>
</body>
</html>
<?php /* Smarty version 2.6.26, created on 2012-07-09 16:10:45
         compiled from infoslist.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'infoslist.htm', 72, false),)), $this); ?>
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
	│	程式用途	│	infoslist.htm	資訊明細列表 的 htm檔
	│	開發者		│	玉玲
	│	版本		│	v1.0.0.0073001
	├=======================================================================================┤
	│	1.	v1.0.1.0073001	2010/07/30	廷俊	刪除資訊明細成功提示訊息
	│	2.	v1.0.1.0080601	2010/08/06	廷俊	輸入查詢條件後 與 下拉式選擇頁碼，都必須selected查詢條件的值
	│	3.	v2.0.0.0111001	2010/08/06	娜娜	新增資訊狀態條件搜尋功能
	└=======================================================================================┘
-->
<body>

  <div id="use_title">
  <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="72%" align="left"><?php echo $this->_tpl_vars['PageTitle']; ?>
</td>
      <td width="12%" align="right">
        <input name="button" type="button" class="set_new_btn" id="button" value="<?php echo $this->_tpl_vars['Btn_AddInfos']; ?>
" onclick="location.href='<?php echo $this->_tpl_vars['BtnAddInfoUrl']; ?>
';">
      </td>
    </tr>
  </table>
</div>
<!--
	2010-07-30 edit by 廷俊
	----------------------------------------------------
	刪除資訊明細成功提示訊息
	---------------------------------------------------- 			
	2010-11-10 edit by 娜娜
	----------------------------------------------------
	加入資訊狀態搜欄位
	---------------------------------------------------- 			
-->
<?php echo $this->_tpl_vars['Message']; ?>

<form name="seachfrm" method="post" action="infoslist.php?act=list&qlist=1">
<div id="search_block">
<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left"><?php echo $this->_tpl_vars['Category']; ?>
<?php echo $this->_tpl_vars['catSel']; ?>
   
      <?php echo $this->_tpl_vars['InfoNa']; ?>
      
      <input name="textfield" type="text" id="textfield" size="15" value="<?php echo $this->_tpl_vars['textfield']; ?>
">
	  <?php echo $this->_tpl_vars['InfoState']; ?>

      <?php echo $this->_tpl_vars['infoSel']; ?>

      <img src="images/search_1.gif" width="20" height="20">
	  <input type="hidden" name="perpagenum" value="<?php echo $this->_tpl_vars['perpagenum_value']; ?>
">
      <input name="button2" type="submit" class="search_btn" id="button2" value="<?php echo $this->_tpl_vars['InfoSearch']; ?>
"></td>
    </tr>
</table>
</div>
</form>
<div id="show_table4" class="main_link">
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>     
	  <td width="60px" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['InfoId']; ?>
</td>
	  <td width="" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['InfoNa']; ?>
</td>
	  <!-- <td width="" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['SimpleText']; ?>
</td> -->	 	
      <td width="60px" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['InfoState']; ?>
</td>	
	   <td width="100px" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['AlterDate']; ?>
</td>
      <td width="90px" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['InfoOperator']; ?>
</td>
    </tr>
    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['umInfos']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	  <td height="25" align="left" valign="middle" class="table_td_02"><?php echo $this->_tpl_vars['umInfos'][$this->_sections['i']['index']]['infos_na']; ?>
</td>
	 <!--  <td height="25" align="left" valign="middle" class="table_td_02"><?php echo $this->_tpl_vars['umInfos'][$this->_sections['i']['index']]['infos_simple_text1']; ?>
</td> -->
	  <td height="25" align="center" valign="middle" class="table_td_02"><?php echo $this->_tpl_vars['umInfos'][$this->_sections['i']['index']]['infos_state']; ?>
</td>	
	  <td height="25" align="center" valign="middle" class="table_td_02"><?php echo $this->_tpl_vars['umInfos'][$this->_sections['i']['index']]['alter_date']; ?>
</td>
      <td height="25" valign="middle" align="center" class="table_td_02"><a href="<?php echo $this->_tpl_vars['umInfos'][$this->_sections['i']['index']]['infos_url']; ?>
"><?php echo $this->_tpl_vars['InfoEdit']; ?>
</a>&nbsp;|&nbsp;<a href="<?php echo $this->_tpl_vars['umInfos'][$this->_sections['i']['index']]['delinfos_url']; ?>
" onclick="return confirm('<?php echo $this->_tpl_vars['cheDelete']; ?>
?');"><?php echo $this->_tpl_vars['InfoDelete']; ?>
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
	2010-11-10 edit by 娜娜
	----------------------------------------------------
	加入資訊狀態搜尋條件網址傳值
	---------------------------------------------------- 			
	2011-08-23 edit by 玉玲
	----------------------------------------------------
	加入每頁顯示筆數設定的值
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
				<option value="?qlist=1&perpagenum=<?php echo $this->_tpl_vars['perpagenum_value']; ?>
&num_page=<?php echo $this->_sections['i']['rownum']; ?>
&selcatid=<?php echo $this->_tpl_vars['selcatid']; ?>
&textfield=<?php echo $this->_tpl_vars['textfield']; ?>
&selcatid2=<?php echo $this->_tpl_vars['selcatid2']; ?>
" selected><?php echo $this->_sections['i']['rownum']; ?>
</option>
			<?php else: ?>
				<option value="?qlist=1&perpagenum=<?php echo $this->_tpl_vars['perpagenum_value']; ?>
&num_page=<?php echo $this->_sections['i']['rownum']; ?>
&selcatid=<?php echo $this->_tpl_vars['selcatid']; ?>
&textfield=<?php echo $this->_tpl_vars['textfield']; ?>
&selcatid2=<?php echo $this->_tpl_vars['selcatid2']; ?>
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
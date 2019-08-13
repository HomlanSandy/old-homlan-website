<?php /* Smarty version 2.6.26, created on 2013-07-16 14:54:42
         compiled from demandlist.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'demandlist.htm', 85, false),)), $this); ?>
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
<!--
	┌======================================┌───────┐========================================┐
	├======================================│ 宣 告 │========================================┤
	├======================================└───────┘========================================┤
	│	程式用途	│	demandlist.htm		後台需求單管理列表 的 htm檔
	│	開發者		│	廷俊
	│	版本		│	v1.0.1.0082701
	├=======================================================================================┤
	│	1.	v1.0.1.0082701	2010/08/27	廷俊	建立需求單管理
	│	2.	v2.0.4.0120701	2010/12/07	廷俊	a.需求單設定開放可不限會員
	│											b.需求單新增需求者、電子郵件、聯絡電話、聯絡地址欄位
	│											c.遮蔽需求者的資料從會員資料撈
	│											d.調整需求單列表的版面配置
	└=======================================================================================┘
*/-->
<body>
  <div id="use_title">
  <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="72%" align="left"><?php echo $this->_tpl_vars['PageTitle']; ?>
</td>
      <td width="12%" align="right">&nbsp;</td>
    </tr>
  </table>
</div>
<!--
	2010-07-30 edit by 廷俊
	----------------------------------------------------
	刪除成功提示訊息
	---------------------------------------------------- 			
-->
<?php echo $this->_tpl_vars['Message']; ?>

<form name="seachfrm" method="post" action="demandlist.php?act=list">
<div id="search_block">
<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left"><?php echo $this->_tpl_vars['DemandDate']; ?>

      <input name="selcatid" type="text" id="selcatid" size="8" value="<?php echo $this->_tpl_vars['selcatid']; ?>
" readonly>
	  <?php echo $this->_tpl_vars['DemandTo']; ?>

      <input name="selcatid2" type="text" id="selcatid2" size="8" value="<?php echo $this->_tpl_vars['selcatid2']; ?>
" readonly>
	  <?php echo $this->_tpl_vars['DemandNa']; ?>

	  <input name="textfield" type="text" id="textfield" size="8" value="<?php echo $this->_tpl_vars['textfield']; ?>
">
	  <?php echo $this->_tpl_vars['ProductNa']; ?>

	  <input name="textfield2" type="text" id="textfield2" size="8" value="<?php echo $this->_tpl_vars['textfield2']; ?>
">
	  <?php echo $this->_tpl_vars['DemandState']; ?>

      <?php echo $this->_tpl_vars['infoSel']; ?>

      <img src="images/search_1.gif" width="20" height="20">
	  <input type="hidden" name="perpagenum" value="<?php echo $this->_tpl_vars['perpagenum_value']; ?>
">
      <input name="button2" type="submit" class="search_btn" id="button2" value="<?php echo $this->_tpl_vars['DemandSearch']; ?>
"></td>
    </tr>
</table>
</div>
</form>
<!--
	2010-12-07 edit by 廷俊
	----------------------------------------------------
	1.調整需求單列表的版面配置
	2.需求單設定開放可不限會員
	3.需求單新增需求者、電子郵件、聯絡電話、聯絡地址欄位
	4.遮蔽需求者的資料從會員資料撈
	---------------------------------------------------- 			
-->
<div id="show_table4" class="main_link">
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>     
	  <td width="60px" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['DemandListId']; ?>
</td>
	  <td width="150px" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['DemandId']; ?>
</td>
	  <td width="180px" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['DemandDate']; ?>
</td>
	  <td width="" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['DemandNa']; ?>
</td>
	  <td width="120px" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['DemandState']; ?>
</td>	
      <td width="120px" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['DemandOperator']; ?>
</td>
    </tr>
    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['umDemand']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	  <td height="25" align="center" valign="middle" class="table_td_02"><?php echo $this->_tpl_vars['umDemand'][$this->_sections['i']['index']]['demand_id']; ?>
</td>
	  <td height="25" align="center" valign="middle" class="table_td_02"><?php echo $this->_tpl_vars['umDemand'][$this->_sections['i']['index']]['demand_date']; ?>
</td>
	  <td height="25" align="center" valign="middle" class="table_td_02"><?php echo $this->_tpl_vars['umDemand'][$this->_sections['i']['index']]['demand_na']; ?>
</td>
	  <td height="25" align="center" valign="middle" class="table_td_02"><?php echo $this->_tpl_vars['umDemand'][$this->_sections['i']['index']]['demand_state']; ?>
</td>
      <td height="25" valign="middle" align="center" class="table_td_02"><a href="<?php echo $this->_tpl_vars['umDemand'][$this->_sections['i']['index']]['demand_url']; ?>
"><?php echo $this->_tpl_vars['DemandEdit']; ?>
</a>&nbsp;|&nbsp;<a href="<?php echo $this->_tpl_vars['umDemand'][$this->_sections['i']['index']]['deldemand_url']; ?>
" onclick="return confirm('<?php echo $this->_tpl_vars['cheDelete']; ?>
?');"><?php echo $this->_tpl_vars['DemandDelete']; ?>
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
&selcatid=<?php echo $this->_tpl_vars['selcatid']; ?>
&selcatid2=<?php echo $this->_tpl_vars['selcatid2']; ?>
&selcatid3=<?php echo $this->_tpl_vars['selcatid3']; ?>
&textfield=<?php echo $this->_tpl_vars['textfield']; ?>
&textfield2=<?php echo $this->_tpl_vars['textfield2']; ?>
" selected><?php echo $this->_sections['i']['rownum']; ?>
</option>
			<?php else: ?>
				<option value="?perpagenum=<?php echo $this->_tpl_vars['perpagenum_value']; ?>
&num_page=<?php echo $this->_sections['i']['rownum']; ?>
&selcatid=<?php echo $this->_tpl_vars['selcatid']; ?>
&selcatid2=<?php echo $this->_tpl_vars['selcatid2']; ?>
&selcatid3=<?php echo $this->_tpl_vars['selcatid3']; ?>
&textfield=<?php echo $this->_tpl_vars['textfield']; ?>
&textfield2=<?php echo $this->_tpl_vars['textfield2']; ?>
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
<?php echo '
<script type="text/javascript">
<!--
	today = new Date();
	
	function catcalc(cal) {
        var date = cal.date;
        var time = date.getTime()
        var date1 = new Date(time);
        //field.value = date2.print("%Y/%m/%d");
		document.getElementById("selcatid").innerText=date1.print("%Y-%m-%d");
    }
    Calendar.setup({
    inputField     :    "selcatid",   // id of the input field
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
		document.getElementById("selcatid2").innerText=date2.print("%Y-%m-%d");
    }
    Calendar.setup({
    inputField     :    "selcatid2",   // id of the input field
    ifFormat       :    "%Y-%m-%d",       // format of the input field
    showsTime      :    false,
    timeFormat     :    "24",
    range          :    [today.getYear()-100,today.getYear()+100],
    onUpdate       :    catcald
    });
//-->
</script>
'; ?>

<?php echo $this->_tpl_vars['temp_log']; ?>
</body>
</html>
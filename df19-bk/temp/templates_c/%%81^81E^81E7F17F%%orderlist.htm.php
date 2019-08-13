<?php /* Smarty version 2.6.26, created on 2015-09-21 16:24:30
         compiled from orderlist.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'orderlist.htm', 104, false),)), $this); ?>
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
	│	程式用途	│	orderlist.htm		後台訂單管理列表 的 htm檔
	│	開發者		│	廷俊
	│	版本		│	v1.0.1.0082501
	├=======================================================================================┤
	│	1.	v1.0.1.0082501	2010/08/25	廷俊	建立訂單管理
	│	2.	v1.0.1.0082601	2010/08/26	廷俊	訂貨人的資料從會員資料撈
	│	3.	v1.0.1.0082701	2010/08/27	廷俊	列表增加搜尋條件：訂單列表搜尋條件有訂貨時間的區間、訂貨人、產品名稱
	│	4.	v2.0.1.0112301	2010/11/23	娜娜	列表增加搜尋條件：訂單狀態
	│	5.	v2.0.8.1031001	2011/03/10	廷俊	a.新增付款狀態搜尋條件
	│											b.新增出貨狀態搜尋條件
	│											c.調整搜尋條件區塊的版面配置
	│											d.頁碼模組新增查詢條件的網址帶值
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

<!-- 
 	2011-03-10 edit by 廷俊
	----------------------------------------------------
	a.新增付款狀態搜尋條件
	b.新增出貨狀態搜尋條件
	c.調整搜尋條件區塊的版面配置
	----------------------------------------------------  
 -->
<form name="seachfrm" method="post" action="orderlist.php?act=list">
<div id="search_block">
<table width="" height="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td align="left">
	  <?php echo $this->_tpl_vars['OrderDate']; ?>

      <input name="selcatid" type="text" id="selcatid" size="8" value="<?php echo $this->_tpl_vars['selcatid']; ?>
" readonly>
	  <?php echo $this->_tpl_vars['OrderTo']; ?>

      <input name="selcatid2" type="text" id="selcatid2" size="8" value="<?php echo $this->_tpl_vars['selcatid2']; ?>
" readonly>
	  <?php echo $this->_tpl_vars['OrderState']; ?>

	  <?php echo $this->_tpl_vars['info_sel']; ?>

	  <?php echo $this->_tpl_vars['PaymentState']; ?>

	  <?php echo $this->_tpl_vars['pay_sel']; ?>

	  <?php echo $this->_tpl_vars['ShipState']; ?>

	  <?php echo $this->_tpl_vars['ship_sel']; ?>

	</td>
	<td align="left" valign="top" rowspan="2">
	  <img src="images/search_1.gif" width="20" height="20">
	  <input type="hidden" name="perpagenum" value="<?php echo $this->_tpl_vars['perpagenum_value']; ?>
">
	  <input name="button2" type="submit" class="search_btn" id="button2" value="<?php echo $this->_tpl_vars['OrderSearch']; ?>
">
	</td>	
  </tr>
  <tr>
	  <td align="left">
		<?php echo $this->_tpl_vars['OrderNa']; ?>

		<input name="textfield" type="text" id="textfield" value="<?php echo $this->_tpl_vars['textfield']; ?>
">
		<?php echo $this->_tpl_vars['ProductNa']; ?>

		<input name="textfield2" type="text" id="textfield2" value="<?php echo $this->_tpl_vars['textfield2']; ?>
">
	  </td>
  </tr>
</table>
</div>
</form>

<div id="show_table4" class="main_link">
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>     
	  <td width="30px" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['OrderListId']; ?>
</td>
	  <td width="90px" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['OrderId']; ?>
</td>
	  <td width="100px" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['OrderDate']; ?>
</td>
	  <td width="" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['OrderNa']; ?>
</td>
	  <td width="90px" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['OrderTotal']; ?>
</td>
	  <td width="105px" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['OrderPrice']; ?>
</td>
	  <td width="60px" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['OrderState']; ?>
</td>	
	  <td width="60px" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['PaymentState']; ?>
</td>	
	  <td width="60px" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['ShipState']; ?>
</td>	
      <td width="90px" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['OrderOperator']; ?>
</td>
    </tr>
    <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['umOrder']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	  <td height="25" align="left" valign="middle" class="table_td_02"><?php echo $this->_tpl_vars['umOrder'][$this->_sections['i']['index']]['order_id']; ?>
</td>
	  <td height="25" align="left" valign="middle" class="table_td_02"><?php echo $this->_tpl_vars['umOrder'][$this->_sections['i']['index']]['order_date']; ?>
</td>
	  <td height="25" align="left" valign="middle" class="table_td_02"><?php echo $this->_tpl_vars['umOrder'][$this->_sections['i']['index']]['order_na']; ?>
</td>
	  <td height="25" align="left" valign="middle" class="table_td_02"><?php echo $this->_tpl_vars['umOrder'][$this->_sections['i']['index']]['order_total']; ?>
</td>
	  <td height="25" align="left" valign="middle" class="table_td_02"><?php echo $this->_tpl_vars['umOrder'][$this->_sections['i']['index']]['order_price']; ?>
</td>
	  <td height="25" align="center" valign="middle" class="table_td_02"><?php echo $this->_tpl_vars['umOrder'][$this->_sections['i']['index']]['order_state']; ?>
</td>
	  <td height="25" align="center" valign="middle" class="table_td_02"><?php echo $this->_tpl_vars['umOrder'][$this->_sections['i']['index']]['payment_state']; ?>
</td>
	  <td height="25" align="center" valign="middle" class="table_td_02"><?php echo $this->_tpl_vars['umOrder'][$this->_sections['i']['index']]['ship_state']; ?>
</td>
      <td height="25" valign="middle" align="center" class="table_td_02"><a href="<?php echo $this->_tpl_vars['umOrder'][$this->_sections['i']['index']]['order_url']; ?>
"><?php echo $this->_tpl_vars['OrderEdit']; ?>
</a>&nbsp;|&nbsp;<a href="<?php echo $this->_tpl_vars['umOrder'][$this->_sections['i']['index']]['delorder_url']; ?>
" onclick="return confirm('<?php echo $this->_tpl_vars['cheDelete']; ?>
?');"><?php echo $this->_tpl_vars['OrderDelete']; ?>
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
 	2011-03-10 edit by 廷俊
	----------------------------------------------------
	頁碼模組新增查詢條件的網址帶值
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
&textfield=<?php echo $this->_tpl_vars['textfield']; ?>
&textfield2=<?php echo $this->_tpl_vars['textfield2']; ?>
&selcatid3=<?php echo $this->_tpl_vars['selcatid3']; ?>
&selcatid4=<?php echo $this->_tpl_vars['selcatid4']; ?>
&selcatid5=<?php echo $this->_tpl_vars['selcatid5']; ?>
" selected><?php echo $this->_sections['i']['rownum']; ?>
</option>
			<?php else: ?>
				<option value="?perpagenum=<?php echo $this->_tpl_vars['perpagenum_value']; ?>
&num_page=<?php echo $this->_sections['i']['rownum']; ?>
&selcatid=<?php echo $this->_tpl_vars['selcatid']; ?>
&selcatid2=<?php echo $this->_tpl_vars['selcatid2']; ?>
&textfield=<?php echo $this->_tpl_vars['textfield']; ?>
&textfield2=<?php echo $this->_tpl_vars['textfield2']; ?>
&selcatid3=<?php echo $this->_tpl_vars['selcatid3']; ?>
&selcatid4=<?php echo $this->_tpl_vars['selcatid4']; ?>
&selcatid5=<?php echo $this->_tpl_vars['selcatid5']; ?>
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
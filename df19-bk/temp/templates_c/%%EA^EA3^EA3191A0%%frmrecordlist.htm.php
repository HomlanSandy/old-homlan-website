<?php /* Smarty version 2.6.26, created on 2012-07-30 09:56:01
         compiled from frmrecordlist.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'frmrecordlist.htm', 157, false),)), $this); ?>
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
<!--
	┌======================================┌───────┐========================================┐
	├======================================│ 宣 告 │========================================┤
	├======================================└───────┘========================================┤
	│	程式用途	│	frmrecordlist.htm	後台"表單記錄查詢"列表的HTML頁面
	│	開發者		│	玉玲、Fish、智倩
	│	版本		│	v1.0.0.0062401
	├=======================================================================================┤
	│	1.	v1.0.1.0062401	2010/06/24	廷俊	將此頁面右上角的查詢按鈕(無動作)註解掉
	│	2.	v1.0.1.0080601	2010/08/06	廷俊	輸入查詢條件後 與 下拉式選擇頁碼，都必須selected查詢條件的值
	│	3.	v03.00.02.1040801	2011/04/25	廷俊	1.顯示表單名稱的下拉式選單搜尋條件
	│												2.顯示記錄狀態的下拉式選單搜尋條件
	│												3.若表單有啟用付款設定，則顯示付款狀態的下拉式選單搜尋條件
	│												4.表單記錄列表標題，若表單有啟用付款設定，則顯示付款表單的預設欄位
	│												5.顯示表單記錄列表內容，加入表單名稱、記錄狀態、付款狀態、記錄日期的區間搜尋條件
	│	4.	v03.00.02.1040801	2011/05/02	廷俊	1.表單記錄新增匯出CSV功能
	│												2.新增動態處理函數
	│												3.若勾選匯出CSV檔，則動態修改表單儲存路徑帶參數值
	└=======================================================================================┘
*/-->
</head>
<script language="javascript">
<!--
var form_action="<?php echo $this->_tpl_vars['form_action']; ?>
";
var form_action2="<?php echo $this->_tpl_vars['form_action2']; ?>
";
<?php echo '
/*
	2011-05-02 edit by 廷俊
	------------------------------------------------------
	1.新增動態處理函數
	2.若勾選匯出CSV檔，則動態修改表單儲存路徑帶參數值
	------------------------------------------------------		
*/
	//動態處理函數
	function dynamic(){
		var chkexport=document.getElementById("chkexport").checked;
		//若勾選匯出CSV檔，則動態修改表單儲存路徑帶參數值
		if(chkexport){
			document.getElementById("queryfrm").action=form_action2;
		}else{
			document.getElementById("queryfrm").action=form_action;
		}
	}
'; ?>

-->
</script>
<body>

<div id="use_title">
  <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="72%" align="left"><?php echo $this->_tpl_vars['PageTitle']; ?>
</td>
<!--
	2010-06-24 edit by 廷俊
	------------------------------------------------------
	將此頁面右上角的查詢按鈕(無動作)註解掉
	----------------------------------------------------		
      <td width="12%" align="right">
        <input name="button" type="submit" class="set_new_btn" id="button" value="<?php echo $this->_tpl_vars['Btn_Query']; ?>
">
	  </td>
-->
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

<!--
	2011-04-25 edit by 廷俊
	----------------------------------------------------
	1.顯示表單名稱的下拉式選單搜尋條件
	2.顯示記錄狀態的下拉式選單搜尋條件
	3.若表單有啟用付款設定，則顯示付款狀態的下拉式選單搜尋條件
	---------------------------------------------------- 
	2011-05-02 edit by 廷俊
	------------------------------------------------------
	表單記錄新增匯出CSV功能
	------------------------------------------------------		
-->
<!-- 條件搜尋 -->
<div id="search_block">
<form name="queryfrm" id="queryfrm" method="post" action="<?php echo $this->_tpl_vars['form_action']; ?>
">
<table width="" height="100%" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td align="left">
		<?php echo $this->_tpl_vars['List_na']; ?>

		<select name="selcatid" id="selcatid">
		<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['umFormList']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<option value="<?php echo $this->_tpl_vars['umFormList'][$this->_sections['i']['index']]['form_id']; ?>
" <?php echo $this->_tpl_vars['umFormList'][$this->_sections['i']['index']]['seltype']; ?>
><?php echo $this->_tpl_vars['umFormList'][$this->_sections['i']['index']]['form_cat_name']; ?>
-><?php echo $this->_tpl_vars['umFormList'][$this->_sections['i']['index']]['form_name']; ?>
</option>
		<?php endfor; endif; ?>
		</select>
		<?php echo $this->_tpl_vars['list_record_time']; ?>

		<input name="textfield" type="text" id="textfield" size="6" value="<?php echo $this->_tpl_vars['textfield']; ?>
" readonly>
		<?php echo $this->_tpl_vars['RecordTo']; ?>

		<input name="textfield2" type="text" id="textfield2" size="6" value="<?php echo $this->_tpl_vars['textfield2']; ?>
" readonly>
	</td>
	<td align="left" valign="top" rowspan="2">
		<img src="images/search_1.gif" width="20" height="20">
		<input type="hidden" name="perpagenum" value="<?php echo $this->_tpl_vars['perpagenum_value']; ?>
">
		<input name="button2" type="submit" class="search_btn" id="button2" value="<?php echo $this->_tpl_vars['Btn_Query']; ?>
" onclick="dynamic();">
	</td>	
  </tr>
  <tr>
	<td align="left">
		<?php echo $this->_tpl_vars['list_record_state']; ?>

		<?php echo $this->_tpl_vars['infoSel']; ?>

		<?php echo $this->_tpl_vars['Payment_State']; ?>

		<?php echo $this->_tpl_vars['pay_state']; ?>

		<input type="checkbox" id="chkexport"><?php echo $this->_tpl_vars['Export_CSV']; ?>

	</td>
  </tr>
</table>
</form>
</div>
<!-- 
	2011-04-25 edit by 廷俊
	----------------------------------------------------
	1.表單記錄列表標題，若表單有啟用付款設定，則顯示付款表單的預設欄位
	2.顯示表單記錄列表內容，加入表單名稱、記錄狀態、付款狀態、記錄日期的區間搜尋條件
	---------------------------------------------------- 		
 -->
<!-- 列表 -->
<div id="show_table4">
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
	<!-- 顯示表單記錄列表標題 -->
    <tr>
		<td width="60px" height="" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['ListNo']; ?>
</td>
		<td width="" height="" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['list_record_time']; ?>
</td>	
		<?php if ($this->_tpl_vars['Payment_State']): ?>
			<td width="90px" height="" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['frmpay_id']; ?>
</td>
			<td width="90px" height="" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['frmpay_price']; ?>
</td>
			<td width="120px" height="" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['frmpay_na']; ?>
</td>
			<td width="90px" height="" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['Payment_State']; ?>
</td>
		<?php endif; ?>
		<td width="90px" height="" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['list_record_state']; ?>
</td>
		<td width="120px" height="" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['listoperator']; ?>
</td>
    </tr>
	
	<!-- 顯示表單記錄列表內容 -->
	<?php unset($this->_sections['k']);
$this->_sections['k']['name'] = 'k';
$this->_sections['k']['loop'] = is_array($_loop=$this->_tpl_vars['umListRecord']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['k']['show'] = true;
$this->_sections['k']['max'] = $this->_sections['k']['loop'];
$this->_sections['k']['step'] = 1;
$this->_sections['k']['start'] = $this->_sections['k']['step'] > 0 ? 0 : $this->_sections['k']['loop']-1;
if ($this->_sections['k']['show']) {
    $this->_sections['k']['total'] = $this->_sections['k']['loop'];
    if ($this->_sections['k']['total'] == 0)
        $this->_sections['k']['show'] = false;
} else
    $this->_sections['k']['total'] = 0;
if ($this->_sections['k']['show']):

            for ($this->_sections['k']['index'] = $this->_sections['k']['start'], $this->_sections['k']['iteration'] = 1;
                 $this->_sections['k']['iteration'] <= $this->_sections['k']['total'];
                 $this->_sections['k']['index'] += $this->_sections['k']['step'], $this->_sections['k']['iteration']++):
$this->_sections['k']['rownum'] = $this->_sections['k']['iteration'];
$this->_sections['k']['index_prev'] = $this->_sections['k']['index'] - $this->_sections['k']['step'];
$this->_sections['k']['index_next'] = $this->_sections['k']['index'] + $this->_sections['k']['step'];
$this->_sections['k']['first']      = ($this->_sections['k']['iteration'] == 1);
$this->_sections['k']['last']       = ($this->_sections['k']['iteration'] == $this->_sections['k']['total']);
?>
	<tr>	
		<td height="" valign="middle" align="center" class="table_td_02"><?php echo smarty_function_math(array('equation' => "x+(y-1)*z",'x' => $this->_sections['k']['rownum'],'y' => $this->_tpl_vars['num_page'],'z' => $this->_tpl_vars['perpagenum_value']), $this);?>
&nbsp;</td>
		<td height="" valign="middle" align="center" class="table_td_02"><?php echo $this->_tpl_vars['umListRecord'][$this->_sections['k']['index']]['frm_create_date']; ?>
&nbsp;</td>
		<?php if ($this->_tpl_vars['Payment_State']): ?>
			<td height="" valign="middle" align="center" class="table_td_02"><?php echo $this->_tpl_vars['umListRecord'][$this->_sections['k']['index']]['frmpay_id']; ?>
&nbsp;</td>
			<td height="" valign="middle" align="center" class="table_td_02"><?php echo $this->_tpl_vars['umListRecord'][$this->_sections['k']['index']]['frmpay_price']; ?>
&nbsp;</td>
			<td height="" valign="middle" align="center" class="table_td_02"><?php echo $this->_tpl_vars['umListRecord'][$this->_sections['k']['index']]['frmpay_na']; ?>
&nbsp;</td>
			<td height="" valign="middle" align="center" class="table_td_02"><?php echo $this->_tpl_vars['umListRecord'][$this->_sections['k']['index']]['payment_state']; ?>
&nbsp;</td>
		<?php endif; ?>
		<td height="" valign="middle" align="center" class="table_td_02"><?php echo $this->_tpl_vars['umListRecord'][$this->_sections['k']['index']]['infos_state']; ?>
&nbsp;</td>
		<td height="" valign="middle" align="center" class="table_td_02">
			<a href="<?php echo $this->_tpl_vars['umListRecord'][$this->_sections['k']['index']]['edit_link']; ?>
"><?php echo $this->_tpl_vars['list_Edit']; ?>
</a>&nbsp;|&nbsp;
			<a href="<?php echo $this->_tpl_vars['umListRecord'][$this->_sections['k']['index']]['delete_link']; ?>
" onclick="return confirm('<?php echo $this->_tpl_vars['cheDelete']; ?>
?');"><?php echo $this->_tpl_vars['list_remove']; ?>
</a>
		</td>
	</tr>
	<?php endfor; endif; ?>     
  </table>
<!--
	2010-06-01 edit by 廷俊
	------------------------------------------------------
	列表分頁顯示
	------------------------------------------------------	
	2010-08-06 edit by 廷俊
	----------------------------------------------------
	輸入查詢條件後 與 下拉式選擇頁碼，都必須selected查詢條件的值
	---------------------------------------------------- 			
-->
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
		document.getElementById("textfield").innerText=date1.print("%Y-%m-%d");
    }
    Calendar.setup({
    inputField     :    "textfield",   // id of the input field
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
		document.getElementById("textfield2").innerText=date2.print("%Y-%m-%d");
    }
    Calendar.setup({
    inputField     :    "textfield2",   // id of the input field
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
<?php /* Smarty version 2.6.26, created on 2015-12-23 11:00:56
         compiled from module_position_all.htm */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>無標題文件</title>
<link href="css/style1.css" rel="stylesheet" type="text/css">
<script src="themes/default/css/PagePosition.js" type="text/javascript"></script>
</head>
<!--
	┌======================================┌───────┐========================================┐
	├======================================│ 宣 告 │========================================┤
	├======================================└───────┘========================================┤
	│	程式用途	│	module_position_all.htm		後台個別版面設定 的HTML樣板頁面
	│	開發者		│	玉玲、Fish、智倩
	│	版本		│	v03.00.02.1040801
	├=======================================================================================┤
	│	1.	v03.00.02.1040801	2011/04/29	廷俊	驗證版面頁面設定不可重複設定會員登入區模組
	│	2.	v03.00.10.1062001	2011-06-29	玉玲	1.新增css樣式項目說明text_note。
	└=======================================================================================┘
-->
<script type="text/javascript">
	var warming_pa = "<?php echo $this->_tpl_vars['warming_pa']; ?>
";
	var warming_small = "<?php echo $this->_tpl_vars['warming_small']; ?>
";
	var warming_sum = "<?php echo $this->_tpl_vars['warming_sum']; ?>
";	
	var warming_userlogin = "<?php echo $this->_tpl_vars['warming_userlogin']; ?>
";	
<?php echo '
/*
	2010-05-12 edit by 廷俊
	------------------------------------------------------
	使用者設定頁面寬度的驗證錯誤訊息
	------------------------------------------------------
	2011-04-29 edit by 廷俊
	------------------------------------------------------
	驗證版面頁面設定不可重複設定會員登入區模組
	------------------------------------------------------		
*/
	//表單驗證
	function chkpost(){
		msg="";
		var container = parseInt(document.getElementById(\'container_w\').value);
		var container_s = document.getElementById(\'container_s\').value;
		var left = parseInt(document.getElementById(\'left_w\').value);
		var center = parseInt(document.getElementById(\'center_w\').value);
		var right = parseInt(document.getElementById(\'right_w\').value);
		//驗證版面設定的寬度比率值不可大於100%
		if(container_s =="%" && container >100){
			msg += warming_pa + "\\r\\n";
		}
		//驗證版面設定的寬度值不可小於0
		if(container <0 || left <0 || center <0 || right <0){
			msg += warming_small + "\\r\\n";
		}
		//驗證左、中、右欄區域寬度和必須等於版面總寬度
		if(left + center + right != container){
			msg += warming_sum + "\\r\\n";
		}
		
		//驗證版面頁面設定不可重複設定會員登入區模組
		var ck_userlogin = 0;
		var ck_A7 = new RegExp("A7");
		var ReadGroupId = document.getElementById(\'ReadGroupId\').value;
		var ReadGroupId2 = document.getElementById(\'ReadGroupId2\').value;
		var ReadGroupId3 = document.getElementById(\'ReadGroupId3\').value;
		if(ck_A7.test(ReadGroupId.replace(/\\s/g,""))){
			ck_userlogin++;
		}
		if(ck_A7.test(ReadGroupId2.replace(/\\s/g,""))){
			ck_userlogin++;
		}
		if(ck_A7.test(ReadGroupId3.replace(/\\s/g,""))){
			ck_userlogin++;
		}
		if(ck_userlogin > 1){
			msg += warming_userlogin + "\\r\\n";
		}
		if(msg==\'\'){
			return true;
		}else{
			alert(msg);
			return false;
		}
	}
/*
	2010-05-12 edit by 廷俊
	------------------------------------------------------
	只開放頁面寬度可選擇px或%,左、中、右欄區域不開放
	------------------------------------------------------		
*/
	//動態設定頁面寬度單位	
	function select_width(){ 
		if (document.getElementById(\'container_s\').value=="px"){
			document.getElementById(\'left_span\').innerHTML = "px";
			document.getElementById(\'center_span\').innerHTML = "px";
			document.getElementById(\'right_span\').innerHTML = "px";
			document.getElementById(\'left_s\').value = "px";
			document.getElementById(\'center_s\').value = "px";
			document.getElementById(\'right_s\').value = "px";
		}else if(document.getElementById(\'container_s\').value=="%"){
			document.getElementById(\'left_span\').innerHTML = "%";
			document.getElementById(\'center_span\').innerHTML = "%";
			document.getElementById(\'right_span\').innerHTML = "%";
			document.getElementById(\'left_s\').value = "%";
			document.getElementById(\'center_s\').value = "%";
			document.getElementById(\'right_s\').value = "%";
		}
	}
'; ?>

</script>

<body>

<div id="use_title">
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><?php echo $this->_tpl_vars['PageTitle_position']; ?>
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
	<form name="form" method="post" action="<?php echo $this->_tpl_vars['savefrm_url']; ?>
&page_id=<?php echo $_GET['page_id']; ?>
" onsubmit="return chkpost();">
    <table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="5%" height="40" align="left" valign="middle">&nbsp;</td>
      <td width="95%" height="40" align="left" valign="middle">
      <?php echo $this->_tpl_vars['infoSel']; ?>
&nbsp;<?php echo $this->_tpl_vars['infoDet']; ?>
&nbsp;<?php echo $this->_tpl_vars['infoCm']; ?>

      </td>
      </tr>
    <tr>
      <td colspan="2">
      <br>
<?php if ($_GET['page_id'] != ''): ?>
<table width="90%" height="400" border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="#CCCCCC">
    <tr>
    <td width="30%" height="30" colspan="5" align="center" valign="middle" bgcolor="#FFFFFF"><?php echo $this->_tpl_vars['page_width']; ?>

<!--
	2010-05-12 edit by 廷俊
	------------------------------------------------------
	只開放頁面寬度可選擇px或%,左、中、右欄區域不開放
	------------------------------------------------------		
-->
	<input id="container_w" name="container_w" type="text" style="width:60px;" value="<?php echo $this->_tpl_vars['container']; ?>
">
	<select id="container_s" name="container_s" onChange="select_width()">
		<?php if ($this->_tpl_vars['container_s'] == 'px'): ?>
		<option value="px" checked>px</option>
		<option value="%">%</option>
		<?php else: ?>
		<option value="%" checked>%</option>		
		<option value="px">px</option>
		<?php endif; ?>
	</select>
    </td>
    </tr>
    <tr>
    <td width="30%" height="30" colspan="2" align="center" valign="middle" bgcolor="#AADDDD"><?php echo $this->_tpl_vars['left_width']; ?>
</td>
    <td width="30%" height="30" colspan="2" align="center" valign="middle" bgcolor="#AADDDD"><?php echo $this->_tpl_vars['center_width']; ?>
</td>
    <td width="30%" height="30" align="center" valign="middle" bgcolor="#AADDDD"><?php echo $this->_tpl_vars['right_width']; ?>
</td>
    </tr>
    <tr>
    <td width="30%" height="30" colspan="2" align="center" valign="middle"><?php echo $this->_tpl_vars['width']; ?>

	<input id="left_w" name="left_w" type="text" style="width:60px;" value="<?php echo $this->_tpl_vars['left']; ?>
">
	<span id="left_span"><?php echo $this->_tpl_vars['left_s']; ?>
</span>
	<input type="hidden" id="left_s" name="left_s" value=<?php echo $this->_tpl_vars['container_s']; ?>
>
    </td>
    <td width="30%" height="30" colspan="2" align="center" valign="middle"><?php echo $this->_tpl_vars['width']; ?>

	<input id="center_w" name="center_w" type="text" style="width:60px;" value="<?php echo $this->_tpl_vars['center']; ?>
">
	<span id="center_span"><?php echo $this->_tpl_vars['center_s']; ?>
</span>
	<input type="hidden" id="center_s" name="center_s" value=<?php echo $this->_tpl_vars['container_s']; ?>
>
    </td>
    <td width="30%" height="30" align="center" valign="middle"><?php echo $this->_tpl_vars['width']; ?>

	<input id="right_w" name="right_w" type="text" style="width:60px;" value="<?php echo $this->_tpl_vars['right']; ?>
">
	<span id="right_span"><?php echo $this->_tpl_vars['right_s']; ?>
</span>
	<input type="hidden" id="right_s" name="right_s" value=<?php echo $this->_tpl_vars['container_s']; ?>
>
    </td>
    </tr>
<tr>
<!-- 頁身 左方 區域位置設定 -->
<td width="30%" height="200" align="center" valign="top" bgcolor="#EEEEEE" id="left">
  <br>
<p>
<?php echo $this->_tpl_vars['select']; ?>

<br>
<select name="users_group">
<?php unset($this->_sections['m']);
$this->_sections['m']['name'] = 'm';
$this->_sections['m']['loop'] = is_array($_loop=$this->_tpl_vars['md']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['m']['show'] = true;
$this->_sections['m']['max'] = $this->_sections['m']['loop'];
$this->_sections['m']['step'] = 1;
$this->_sections['m']['start'] = $this->_sections['m']['step'] > 0 ? 0 : $this->_sections['m']['loop']-1;
if ($this->_sections['m']['show']) {
    $this->_sections['m']['total'] = $this->_sections['m']['loop'];
    if ($this->_sections['m']['total'] == 0)
        $this->_sections['m']['show'] = false;
} else
    $this->_sections['m']['total'] = 0;
if ($this->_sections['m']['show']):

            for ($this->_sections['m']['index'] = $this->_sections['m']['start'], $this->_sections['m']['iteration'] = 1;
                 $this->_sections['m']['iteration'] <= $this->_sections['m']['total'];
                 $this->_sections['m']['index'] += $this->_sections['m']['step'], $this->_sections['m']['iteration']++):
$this->_sections['m']['rownum'] = $this->_sections['m']['iteration'];
$this->_sections['m']['index_prev'] = $this->_sections['m']['index'] - $this->_sections['m']['step'];
$this->_sections['m']['index_next'] = $this->_sections['m']['index'] + $this->_sections['m']['step'];
$this->_sections['m']['first']      = ($this->_sections['m']['iteration'] == 1);
$this->_sections['m']['last']       = ($this->_sections['m']['iteration'] == $this->_sections['m']['total']);
?>
<option value="<?php echo $this->_tpl_vars['md'][$this->_sections['m']['index']]['md_id']; ?>
"><?php echo $this->_tpl_vars['md'][$this->_sections['m']['index']]['md_na']; ?>
</option>
<?php endfor; endif; ?>
</select>
<input type="button" value="<?php echo $this->_tpl_vars['Btn_add']; ?>
" onClick="addgroup();">
</p>
  <table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td align="right">
  <input type="hidden" name="ReadGroupId" id="ReadGroupId" value="<?php echo $this->_tpl_vars['readgroupid']; ?>
">
  <input type="hidden" name="ReadGroupNa[]" id="ReadGroupNa" value="<?php echo $this->_tpl_vars['readgroupna']; ?>
">
  <?php echo $this->_tpl_vars['selectedgp']; ?>

        </td>
  <td align="left" valign="middle">
  <INPUT TYPE="button" VALUE="&#8593;" onClick="move('-',1);">
  <br>
  <INPUT TYPE="button" VALUE="&#8595;" onClick="move('+',1);">
  <br>
  <input type="button" value="<?php echo $this->_tpl_vars['Btn_del']; ?>
" onClick="delgroup();">
  </td>
      </tr>
  </table>

</td>
<td width="5%" align="center" valign="middle" bgcolor="#EEEEEE" id="left">
<input type="button" value=">" onClick="movea()" name="B1"><BR>
<input type="button" value="<" onClick="BumpUpa()" name="B2">
</td>

<!-- 頁身 中間 主要區域位置設定 --> 
<td width="30%" height="200" align="center" valign="top" bgcolor="#EEEEEE" id="main">
<br>
<p>
<?php echo $this->_tpl_vars['select']; ?>

<br>
<select name="users_group2">
<?php unset($this->_sections['m']);
$this->_sections['m']['name'] = 'm';
$this->_sections['m']['loop'] = is_array($_loop=$this->_tpl_vars['md']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['m']['show'] = true;
$this->_sections['m']['max'] = $this->_sections['m']['loop'];
$this->_sections['m']['step'] = 1;
$this->_sections['m']['start'] = $this->_sections['m']['step'] > 0 ? 0 : $this->_sections['m']['loop']-1;
if ($this->_sections['m']['show']) {
    $this->_sections['m']['total'] = $this->_sections['m']['loop'];
    if ($this->_sections['m']['total'] == 0)
        $this->_sections['m']['show'] = false;
} else
    $this->_sections['m']['total'] = 0;
if ($this->_sections['m']['show']):

            for ($this->_sections['m']['index'] = $this->_sections['m']['start'], $this->_sections['m']['iteration'] = 1;
                 $this->_sections['m']['iteration'] <= $this->_sections['m']['total'];
                 $this->_sections['m']['index'] += $this->_sections['m']['step'], $this->_sections['m']['iteration']++):
$this->_sections['m']['rownum'] = $this->_sections['m']['iteration'];
$this->_sections['m']['index_prev'] = $this->_sections['m']['index'] - $this->_sections['m']['step'];
$this->_sections['m']['index_next'] = $this->_sections['m']['index'] + $this->_sections['m']['step'];
$this->_sections['m']['first']      = ($this->_sections['m']['iteration'] == 1);
$this->_sections['m']['last']       = ($this->_sections['m']['iteration'] == $this->_sections['m']['total']);
?>
<option value="<?php echo $this->_tpl_vars['md'][$this->_sections['m']['index']]['md_id']; ?>
"><?php echo $this->_tpl_vars['md'][$this->_sections['m']['index']]['md_na']; ?>
</option>
<?php endfor; endif; ?>
</select>
<input type="button" value="<?php echo $this->_tpl_vars['Btn_add']; ?>
" onClick="addgroup2();">
</p>
<table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td align="right">
  <input type="hidden" name="ReadGroupId2" id="ReadGroupId2" value="<?php echo $this->_tpl_vars['readgroupid2']; ?>
"><?php echo $this->_tpl_vars['selectedgp2']; ?>

        </td>
  <td align="left" valign="middle">
  <INPUT TYPE="button" VALUE="&#8593;" onClick="move('-',2);">
  <br>
  <INPUT TYPE="button" VALUE="&#8595;" onClick="move('+',2);">
  <br>
  <input type="button" value="<?php echo $this->_tpl_vars['Btn_del']; ?>
" onClick="delgroup2();">
  </td>
      </tr>
  </table>

</td>
<td width="5%" align="center" valign="middle" bgcolor="#EEEEEE" id="main">
<input type="button" value=">" onClick="moveb()" name="B3"><BR>
<input type="button" value="<" onClick="BumpUpb()" name="B4">
</td>

<!-- 頁身 右方 主要區域位置設定 --> 
<td width="30%" height="200" align="center" valign="top" bgcolor="#EEEEEE" id="right">
<br>
<p>
<?php echo $this->_tpl_vars['select']; ?>

<br>
<select name="users_group3">
<?php unset($this->_sections['m']);
$this->_sections['m']['name'] = 'm';
$this->_sections['m']['loop'] = is_array($_loop=$this->_tpl_vars['md']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['m']['show'] = true;
$this->_sections['m']['max'] = $this->_sections['m']['loop'];
$this->_sections['m']['step'] = 1;
$this->_sections['m']['start'] = $this->_sections['m']['step'] > 0 ? 0 : $this->_sections['m']['loop']-1;
if ($this->_sections['m']['show']) {
    $this->_sections['m']['total'] = $this->_sections['m']['loop'];
    if ($this->_sections['m']['total'] == 0)
        $this->_sections['m']['show'] = false;
} else
    $this->_sections['m']['total'] = 0;
if ($this->_sections['m']['show']):

            for ($this->_sections['m']['index'] = $this->_sections['m']['start'], $this->_sections['m']['iteration'] = 1;
                 $this->_sections['m']['iteration'] <= $this->_sections['m']['total'];
                 $this->_sections['m']['index'] += $this->_sections['m']['step'], $this->_sections['m']['iteration']++):
$this->_sections['m']['rownum'] = $this->_sections['m']['iteration'];
$this->_sections['m']['index_prev'] = $this->_sections['m']['index'] - $this->_sections['m']['step'];
$this->_sections['m']['index_next'] = $this->_sections['m']['index'] + $this->_sections['m']['step'];
$this->_sections['m']['first']      = ($this->_sections['m']['iteration'] == 1);
$this->_sections['m']['last']       = ($this->_sections['m']['iteration'] == $this->_sections['m']['total']);
?>
<option value="<?php echo $this->_tpl_vars['md'][$this->_sections['m']['index']]['md_id']; ?>
"><?php echo $this->_tpl_vars['md'][$this->_sections['m']['index']]['md_na']; ?>
</option>
<?php endfor; endif; ?>
</select>
<input type="button" value="<?php echo $this->_tpl_vars['Btn_add']; ?>
" onClick="addgroup3();">
</p>
<table border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td align="right">
  <input type="hidden" name="ReadGroupId3" id="ReadGroupId3" value="<?php echo $this->_tpl_vars['readgroupid3']; ?>
"><?php echo $this->_tpl_vars['selectedgp3']; ?>

        </td>
      <td align="left" valign="middle">
  <INPUT TYPE="button" VALUE="&#8593;" onClick="move('-',3);">
  <br>
  <INPUT TYPE="button" VALUE="&#8595;" onClick="move('+',3);">
  <br>
  <input type="button" value="<?php echo $this->_tpl_vars['Btn_del']; ?>
" onClick="delgroup3();">
  </td>
      </tr>
  </table>
  
  </td>
</tr>
<tr>
<td colspan="5" align="center" valign="middle">
<INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
" style="width:140px;">&nbsp;<INPUT TYPE="reset" value="<?php echo $this->_tpl_vars['reset_y']; ?>
" onClick="location.href='module_position_all.php?page_id=<?php echo $_GET['page_id']; ?>
'">&nbsp;<INPUT TYPE="button" value="<?php echo $this->_tpl_vars['default_y']; ?>
" onClick="location='module_position_all.php?default=y&page_id=<?php echo $_GET['page_id']; ?>
'">
</td>
</tr>
</table>
<?php endif; ?>
    <br>
    </td></tr>
    <tr>
    <td width="5%" align="left" valign="middle">&nbsp;</td>
    <td width="95%" align="left" valign="middle" class="text_note"><?php echo $this->_tpl_vars['ps']; ?>
</td>
    </tr>
    </table>
	</form>
</div>

<?php echo $this->_tpl_vars['temp_log']; ?>
</body>
</html>
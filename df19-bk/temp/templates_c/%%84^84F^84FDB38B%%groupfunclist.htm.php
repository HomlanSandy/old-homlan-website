<?php /* Smarty version 2.6.26, created on 2012-07-19 20:53:09
         compiled from groupfunclist.htm */ ?>
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
	│	程式用途	│	groupfunclist.htm	群組權限編輯 的HTML頁面
	│	開發者		│	玉玲、Fish、智倩
	│	版本		│	v1.0.1.0091501
	├=======================================================================================┤
	│	1.	v1.0.1.0091501	2010/09/15	廷俊	a.修改成功提示訊息
	│											b.群組權限編輯時，預設頁面不顯示功能列表，選擇群組後再顯示功能列表
	│											c.更改語言別的說明文字
	│	2.	v2.0.7.1010501	2011/01/05	廷俊	a.群組權限的編輯畫面，將功能清單細分為有效的多國語言別，用checkbox勾選權限設定的方式
	│											b.勾選語言標題旁的checkbox，則觸發全選同語言的功能清單
	│											c.調整群組權限的編輯畫面的版面設定
	│	3.	v2.0.8.1021801	2011/02/18	廷俊	調整群組權限的編輯畫面的版面設定
	│	4.	v2.0.8.1030301	2011/03/03	廷俊	1.修正版面配置與語言設定
	│											2.修正預設載入為群組權限設定頁面
	│											3.修正預設載入群組權限設定頁面時，執行選取群組後，才顯示列表供編輯設定
	│											4.修正程式寫法，流程順暢、易閱讀等
	└=======================================================================================┘
*/-->
<script>
	//勾選語言標題旁的checkbox，則觸發全選同語言的功能清單
	function chkList(k){	
		var schkvalue=document.getElementById("chkall"+k).checked;
		var theform=document.updatefrm.elements;
		for(var i=0;i<theform.length;i++){
			if(theform[i].type == "checkbox" && theform[i].name.indexOf('list_id'+k+'[]')!= "-1"){  
				theform[i].checked = schkvalue;   
			}   
		}
	}
</script>
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
	2010-09-15 edit by 廷俊
	----------------------------------------------------
	修改成功提示訊息
	---------------------------------------------------- 			
-->
<?php echo $this->_tpl_vars['Message']; ?>


<form name="seachfrm" method="post" action="<?php echo $this->_tpl_vars['frm_queryact']; ?>
">
<div id="search_block">
<table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left">
		<?php echo $this->_tpl_vars['Group']; ?>

		<select name="selcatid" class="select_btn" id="selcatid">		
		<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['umGroupLists']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
			<option value="<?php echo $this->_tpl_vars['umGroupLists'][$this->_sections['i']['index']]['group_id']; ?>
" <?php echo $this->_tpl_vars['umGroupLists'][$this->_sections['i']['index']]['fgroup_sel']; ?>
><?php echo $this->_tpl_vars['umGroupLists'][$this->_sections['i']['index']]['group_na']; ?>
</option>
		<?php endfor; endif; ?>
        </select>           
		<img src="images/search_1.gif" width="20" height="20">
		<input name="button2" type="submit" class="search_btn" id="button2" value="<?php echo $this->_tpl_vars['Btn_Query']; ?>
">
	</td>
  </tr>
</table>
</div>
</form>
<!--
	2010-09-15 edit by 廷俊
	----------------------------------------------------
	群組權限編輯時，預設頁面不顯示功能列表，選擇群組後再顯示功能列表
	----------------------------------------------------
	2011-01-05 edit by 廷俊
	----------------------------------------------------	
	1.調整群組權限的編輯畫面的版面設定
	2.群組權限的編輯畫面，將功能清單細分為有效的多國語言別，用checkbox勾選權限設定的方式	
	----------------------------------------------------
	2011-02-18 edit by 廷俊
	----------------------------------------------------	
	調整群組權限的編輯畫面的版面設定	
	----------------------------------------------------
-->
<div id="show_table4" class="main_link">
<form name="updatefrm" method="post" action="<?php echo $this->_tpl_vars['frm_act']; ?>
">
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <!-- 標題 -->
	<tr>     
	  <td width="300" height="25" align="center" valign="middle" class="table_td_01">
	    <input type="hidden" name="group_id" value="<?php echo $this->_tpl_vars['group_id_value']; ?>
">
		<?php echo $this->_tpl_vars['FlistNa']; ?>

	  </td>
	  <td width="300" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['FlistCat']; ?>
</td>  
	  <!-- 語言別的權限設定 -->
	  <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['umLanglists']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	  <td width="90" height="25" align="center" valign="middle" class="table_td_01">	  
		  <?php if ($this->_tpl_vars['group_id_value'] != 0): ?>
		    <input type="checkbox" id="chkall<?php echo $this->_tpl_vars['umLanglists'][$this->_sections['i']['index']]['lang_id']; ?>
" onclick="chkList(<?php echo $this->_tpl_vars['umLanglists'][$this->_sections['i']['index']]['lang_id']; ?>
);">
		  <?php endif; ?>
		  <?php echo $this->_tpl_vars['umLanglists'][$this->_sections['i']['index']]['lang_na']; ?>

	  </td>
	  <?php endfor; endif; ?>	  
    </tr>
	<!-- 列表 -->
<?php if ($this->_tpl_vars['group_id_value'] != 0): ?>
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
	  <td height="25" valign="middle" align="left" class="table_td_02"><?php echo $this->_tpl_vars['umLists'][$this->_sections['j']['index']]['list_na']; ?>
&nbsp;</td>
	  <td height="25" valign="middle" align="left" class="table_td_02"><?php echo $this->_tpl_vars['umLists'][$this->_sections['j']['index']]['listcat_na']; ?>
&nbsp;</td>
	  <!-- 語言別的權限設定 -->
	  <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['umLanglists']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	  <td height="25" valign="middle" align="center" class="table_td_02">
		<input type="checkbox" name="list_id<?php echo $this->_tpl_vars['umLanglists'][$this->_sections['i']['index']]['lang_id']; ?>
[]" value="<?php echo $this->_tpl_vars['umLists'][$this->_sections['j']['index']]['list_id']; ?>
" <?php echo $this->_tpl_vars['umLists'][$this->_sections['i']['index']][$this->_sections['j']['index']]['list_chk']; ?>
>
	  </td>
	  <?php endfor; endif; ?>
	</tr>
	<?php endfor; endif; ?>	
	<tr>     
	  <td colspan="4" align="center">&nbsp;</td>
    </tr>	
	<tr>     
	  <td colspan="4" align="center">
	    <input name="button2" type="submit" class="search_btn" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
">
	    <input name="button2" type="reset" class="search_btn">
	  </td>
    </tr>	
	<tr>     
	  <td colspan="4" align="center">&nbsp;</td>
    </tr>
<?php endif; ?>
  </table>
</form>  
</div>
<?php echo $this->_tpl_vars['temp_log']; ?>
</body>
</html>
<?php /* Smarty version 2.6.26, created on 2015-04-07 20:50:21
         compiled from usrconfig.htm */ ?>
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
	│	程式用途	│	usrconfig.htm		會員登記項目 的 HTM頁面
	│	開發者		│	玉玲、Fish、智倩
	│	版本		│	v1.0.1.0081001
	├=======================================================================================┤
	│	1.	v1.0.1.0081001	2010/08/10	廷俊	修改成功訊息
	│	2.	v2.0.8.1031601	2011/03/16	廷俊	1.調整會員登記項目的版面配置
	│											2.會員登記項目增加欄位格式設定
	└=======================================================================================┘
*/ -->
<script language="javascript">
	function chkList(){		
			var schkvalue=document.updatefrm.chkall.checked;
			var theform=document.updatefrm.elements;
			for(var i=0;i<theform.length;i++){
				 if(theform[i].type == "checkbox" && theform[i].name.indexOf('list_id[]')!= "-1"){  
					theform[i].checked = schkvalue;   
			}   

			}
	}
</script>
<body>

<div id="use_title">
  <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="72%" align="left"><?php echo $this->_tpl_vars['PageTitle2']; ?>
</td>
      <td width="12%" align="right">&nbsp;</td>
    </tr>
  </table>
</div>
<!--
	2010-08-10 edit by 廷俊
	----------------------------------------------------
	修改成功訊息
	---------------------------------------------------- 			
-->
<?php echo $this->_tpl_vars['Message']; ?>

<!--
 	2011-03-16 edit by 廷俊
	------------------------------------------------------
	1.調整會員登記項目的版面配置
	2.會員登記項目增加欄位格式設定
	------------------------------------------------------
-->
<div id="show_table2" class="main_link">
<form name="updatefrm" method="post" action="<?php echo $this->_tpl_vars['frm_act']; ?>
">
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
	<tr>     
	  <td colspan="7" align="center">&nbsp;</td>
    </tr>
    <tr>     
	  <td width="10%" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['OrderTitle']; ?>
</td>
	  <td width="15%" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['SysDefinedNaTitle']; ?>
</td>
	  <td width="20%" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['UsrDefinedNaTitle']; ?>
</td>  
	  <td width="10%" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['DisplayTitle']; ?>
</td>	 
	  <td width="10%" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['NotNUullTitle']; ?>
</td>	   
	  <td width="10%" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['ColTypeTitle']; ?>
</td>
	  <td width="25%" height="25" align="center" valign="middle" class="table_td_01"><?php echo $this->_tpl_vars['TypeForm']; ?>
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
	   <td height="25" valign="middle" align="center" class="table_td_02"><?php echo $this->_tpl_vars['umLists'][$this->_sections['j']['index']]['cols_order']; ?>
</td>
	   <td height="25" valign="middle" align="center" class="table_td_02"><?php echo $this->_tpl_vars['umLists'][$this->_sections['j']['index']]['sys_na']; ?>
</td>
	   <td height="25" valign="middle" align="center" class="table_td_02"><?php echo $this->_tpl_vars['umLists'][$this->_sections['j']['index']]['usr_na']; ?>
</td>
	   <td height="25" valign="middle" align="center" class="table_td_02"><?php echo $this->_tpl_vars['umLists'][$this->_sections['j']['index']]['show_state']; ?>
</td>    
	   <td height="25" valign="middle" align="center" class="table_td_02"><?php echo $this->_tpl_vars['umLists'][$this->_sections['j']['index']]['null_state']; ?>
</td>   
	   <td height="25" valign="middle" align="center" class="table_td_02"><?php echo $this->_tpl_vars['umLists'][$this->_sections['j']['index']]['cols_type']; ?>
</td> 	   
	   <td height="25" valign="middle" align="center" class="table_td_02"><?php echo $this->_tpl_vars['umLists'][$this->_sections['j']['index']]['type_form']; ?>
</td> 	   
	</tr>
	<?php endfor; endif; ?>
	<tr>     
	  <td colspan="7" align="center">&nbsp;</td>
    </tr>
	<tr>     
	  <td colspan="7" align="center">
		<input name="button2" type="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
">
		<input name="button2" type="reset">
	  </td>
    </tr>		
	<tr>     
	  <td colspan="7" align="center">&nbsp;</td>
    </tr>	
  </table>
</form>  
</div>
<?php echo $this->_tpl_vars['temp_log']; ?>
</body>
</html>
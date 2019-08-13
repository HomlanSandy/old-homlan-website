<?php /* Smarty version 2.6.26, created on 2014-08-22 10:26:29
         compiled from lcsregister.htm */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $this->_config[0]['vars']['website_title']; ?>
</title>
<link href="css/style1.css" rel="stylesheet" type="text/css">
</head>
<!-- 
	┌======================================┌───────┐========================================┐
	├======================================│ 宣 告 │========================================┤
	├======================================└───────┘========================================┤
	│	程式用途	│	lcsregister.htm		後台序號註冊	htm頁面
	│	開發者		│	玉玲、Fish、智倩
	│	版本		│	v1.0.0.0071501
	├=======================================================================================┤
	│	1.	v1.0.1.0071501	2010/07/15	廷俊	新增查詢啟用碼的功能
	│	2.	v2.0.0.0102001	2010/10/20	廷俊	正式版畫面也新增查詢啟用碼的功能
	│	3.	v03.00.08.1060201	2011/06/08	廷俊	1.調整版面、統一程式架構
	│												2.新增序號升級功能
	│												3.新增續約保固功能
	│												4.新增延保驗證碼備註說明
	│												5.輸入續約保固的延保驗證碼畫面
	│	4.	v03.00.08.1060201	2011/06/09	廷俊	1.若註冊錯誤滿5次
	│												2.驗證錯誤輸入時間，鎖5分鐘
	│												3.驗證錯誤輸入時間，鎖5分鐘後，回復錯誤次數、清除錯誤輸入時間
	│												4.顯示註冊錯誤剩餘機會的次數
	└=======================================================================================┘
*/-->
<body>
<div id="use_title">
  <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="72%" align="left"><?php echo $this->_tpl_vars['lcs_register']; ?>
</td>
      <td width="12%" align="right">&nbsp;</td>
    </tr>
  </table>
</div>

<!--
	2010-06-08 edit by 廷俊
	------------------------------------------------------
	EzPortal使用條款設為唯讀
	------------------------------------------------------
	2010-06-17 edit by 廷俊
	------------------------------------------------------
	序號註冊頁面，測試版、正式版、啟用碼要說明清楚
	------------------------------------------------------	
 	2010-07-15 edit by 廷俊
	------------------------------------------------------
	新增查詢啟用碼的功能
	------------------------------------------------------
 	2010-10-20 edit by 廷俊
	------------------------------------------------------
	正式版畫面也新增查詢啟用碼的功能
	------------------------------------------------------ 
	2011-06-08 edit by 廷俊
	------------------------------------------------------
	1.調整版面、統一程式架構
	2.新增序號升級功能
	3.新增續約保固功能
	4.新增延保驗證碼備註說明
	5.輸入續約保固的延保驗證碼畫面
	------------------------------------------------------
	2011-06-09 edit by 廷俊
	------------------------------------------------------
	1.若註冊錯誤滿5次
	2.驗證錯誤輸入時間，鎖5分鐘
	3.驗證錯誤輸入時間，鎖5分鐘後，回復錯誤次數、清除錯誤輸入時間
	4.顯示註冊錯誤剩餘機會的次數
	------------------------------------------------------
-->
<div id="show_table3">	
	<table border="0" cellpadding="1" cellspacing="1" align="center"  width="100%">	
		<tr>				
			<td align="left" colspan="2">&nbsp;</td>
		</tr>
	<!-- 輸入序號、註冊碼畫面 -->
	<?php if ($this->_tpl_vars['step'] == 'regist'): ?>
	<form name="savefrm" method="post" action="lcsregister.php?act=save_regist">
		<?php if ($this->_tpl_vars['Error_msg'] != ''): ?>
		<tr>
			<th align="right">&nbsp;</th>
			<td  align="left" style="color:#F00;"><?php echo $this->_tpl_vars['Error_msg']; ?>
</td>
		</tr>
		<tr>			
			<td align="left" colspan="2">&nbsp;</td>
		</tr>
		<?php endif; ?>
		<tr>				
			<th align="right"><?php echo $this->_tpl_vars['lcs_product']; ?>
</th>
			<td align="left">
				<input type="text" name="psn1" size="6" maxlength="6" value="<?php echo $this->_tpl_vars['psn1_value']; ?>
">
				－	
				<input type="text" name="psn2" size="6" maxlength="6" value="<?php echo $this->_tpl_vars['psn2_value']; ?>
">
				－	
				<input type="text" name="psn3" size="6" maxlength="6" value="<?php echo $this->_tpl_vars['psn3_value']; ?>
">
			</td>
		</tr>
		<tr>				
			<th align="right"><?php echo $this->_tpl_vars['lcs_used']; ?>
</th>
			<td align="left">
				<input type="text" name="usn1" size="3" maxlength="3" value="<?php echo $this->_tpl_vars['usn1_value']; ?>
">
				－
				<input type="text" name="usn2" size="3" maxlength="3" value="<?php echo $this->_tpl_vars['usn2_value']; ?>
">
				－
				<input type="text" name="usn3" size="3" maxlength="3" value="<?php echo $this->_tpl_vars['usn3_value']; ?>
">
				&nbsp;<?php echo $this->_tpl_vars['product_register_url']; ?>
&nbsp;|&nbsp;<?php echo $this->_tpl_vars['product_register_check']; ?>

			</td>
		</tr>	
		<tr>			
			<td align="left" colspan="2">&nbsp;</td>
		</tr>
		<tr>
			<th align="right">&nbsp;</th>
			<td align="left" style="color:#F00;"><?php echo $this->_tpl_vars['regist_ps']; ?>
</td>
		</tr>
		<tr>			
			<td align="left" colspan="2">&nbsp;</td>
		</tr>
		<tr>		
			<td align="center" colspan="2"><INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
" <?php echo $this->_tpl_vars['Lock']; ?>
></td>
		</tr>
	</form>	
	
	<!-- 輸入續約保固驗證碼畫面 -->
	<?php elseif ($this->_tpl_vars['step'] == 'verify'): ?>
	<form name="savefrm" method="post" action="lcsregister.php?act=save_verify">
		<?php if ($this->_tpl_vars['Error_msg'] != ''): ?>
		<tr>
			<th align="right">&nbsp;</th>
			<td  align="left" style="color:#F00;"><?php echo $this->_tpl_vars['Error_msg']; ?>
</td>
		</tr>
		<tr>			
			<td align="left" colspan="2">&nbsp;</td>
		</tr>
		<?php endif; ?>
		<tr>				
			<th align="right"><?php echo $this->_tpl_vars['contract_verify']; ?>
</th>
			<td align="left"><input type="text" name="verify" style="width:95%" value=""></td>
		</tr>
		<tr>			
			<td align="left" colspan="2">&nbsp;</td>
		</tr>

		<tr>
			<th align="right">&nbsp;</th>
			<td  align="left" style="color:#F00;"><?php echo $this->_tpl_vars['verify_ps']; ?>
</td>
		</tr>
		<tr>			
			<td align="left" colspan="2">&nbsp;</td>
		</tr>
		<tr>		
			<td align="center" colspan="2"><INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
" <?php echo $this->_tpl_vars['Lock']; ?>
></td>
		</tr>
	</form>	
	
	<!-- 正式版顯示畫面 -->
	<?php else: ?>
		<tr>				
			<th align="right"><?php echo $this->_tpl_vars['lcs_product']; ?>
</th>
			<td align="left"><?php echo $this->_tpl_vars['prd_sn']; ?>
&nbsp;|&nbsp;<?php echo $this->_tpl_vars['prd_sn_upgrade']; ?>
&nbsp;|&nbsp;<?php echo $this->_tpl_vars['Warranty_contract']; ?>
</td>
		</tr>
		<tr>				
			<th align="right"><?php echo $this->_tpl_vars['lcs_used']; ?>
</th>
			<td align="left"><?php echo $this->_tpl_vars['prd_usn']; ?>
&nbsp;|&nbsp;<?php echo $this->_tpl_vars['product_register_check']; ?>
</td>
		</tr>		
		<tr>
			<th align="right" valign="top"><?php echo $this->_tpl_vars['terms_title']; ?>
</th>
			<td align="left"><textarea cols="70" rows="20" style="width:95%" readonly><?php echo $this->_tpl_vars['terms_content']; ?>
</textarea></td>
		</tr>
	<?php endif; ?>
		<tr>			
			<td align="left" colspan="2">&nbsp;</td>
		</tr>
	</table>
</div>

<?php echo $this->_tpl_vars['temp_log']; ?>
</body>
</html>
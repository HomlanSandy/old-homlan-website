<?php /* Smarty version 2.6.26, created on 2013-07-16 15:13:18
         compiled from demand.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http//www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http//www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<script src="js/calendar.js" type="text/javascript"></script>
<script src="js/calendar-en.js" type="text/javascript"></script>
<script src="js/calendar-setup.js" type="text/javascript"></script>
<link href="css/calendar-win2k-cold-1.css" rel="stylesheet" type="text/css" />
<link href="css/style1.css" rel="stylesheet" type="text/css" />
</head> 
<!--
	┌======================================┌───────┐========================================┐
	├======================================│ 宣 告 │========================================┤
	├======================================└───────┘========================================┤
	│	程式用途	│	demand.htm		後台需求單管理編輯 的 htm檔
	│	開發者		│	廷俊
	│	版本		│	v1.0.1.0082701
	├=======================================================================================┤
	│	1.	v1.0.1.0082701	2010/08/27	廷俊	建立需求單管理
	│	2.	v1.0.1.0091301	2010/09/13	廷俊	需求單更改為by單一商品
	│	3.	v2.0.4.0120701	2010/12/07	廷俊	a.需求單設定開放可不限會員
	│											b.需求單新增需求者、電子郵件、聯絡電話、聯絡地址欄位
	│											c.遮蔽需求者的資料從會員資料撈
	│											d.調整需求單列表的版面配置
	└=======================================================================================┘
*/-->
<body>
<div id="use_title">
  <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0">
	<tr>
      <td width="72%" align="left"><?php echo $this->_tpl_vars['PageTitle2']; ?>
</td>
      <td width="12%" align="right">
        <input name="button" type="submit" class="set_new_btn" id="button" value="<?php echo $this->_tpl_vars['Btn_ListDemand']; ?>
" onclick="location.href='<?php echo $this->_tpl_vars['BtnUnfoListUrl']; ?>
';" />
      </td>
    </tr>
  </table>
</div>
<!--
	2010-07-30 edit by 廷俊
	----------------------------------------------------
	新增、修改成功提示訊息
	---------------------------------------------------- 			
-->
<?php echo $this->_tpl_vars['Message']; ?>

<div id="show_table3">
<FORM METHOD=POST enctype="multipart/form-data" ACTION="demandlist.php?act=save" onsubmit="return chkpost();" >
	<table border="0" cellpadding="2" cellspacing="2" align="center" width="80%" height="100%">
		<tr>
			<th align="right">&nbsp;</th>
			<td align="left">&nbsp;</td>
		</tr>
		<tr>
			<th align="right"><?php echo $this->_tpl_vars['DemandId']; ?>
</th>
			<td align="left">
				<INPUT TYPE="text" NAME="demand_id" value="<?php echo $this->_tpl_vars['demand_id']; ?>
" disabled>
				<INPUT TYPE="hidden" NAME="demand_id" id="demand_id" value="<?php echo $this->_tpl_vars['demand_id']; ?>
">
			</td>
		</tr>
		<tr>
			<th align="right"><?php echo $this->_tpl_vars['DemandDate']; ?>
</th>
			<td align="left">
				<INPUT TYPE="text" NAME="demand_date" id="demand_date" value="<?php echo $this->_tpl_vars['demand_date']; ?>
" disabled>
			</td>
		</tr>
<!--
 	2010-09-13 edit by 廷俊
	----------------------------------------------------
	需求單更改為by單一商品
	---------------------------------------------------- 			
-->
		
		<!--
		2011-12-20 edit by 健嘉
		----------------------------------------------------
		需求單商品名稱、數量 可依據個數顯示
		---------------------------------------------------- 	
		-->
		<?php unset($this->_sections['b']);
$this->_sections['b']['name'] = 'b';
$this->_sections['b']['loop'] = is_array($_loop=$this->_tpl_vars['info_num']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['b']['show'] = true;
$this->_sections['b']['max'] = $this->_sections['b']['loop'];
$this->_sections['b']['step'] = 1;
$this->_sections['b']['start'] = $this->_sections['b']['step'] > 0 ? 0 : $this->_sections['b']['loop']-1;
if ($this->_sections['b']['show']) {
    $this->_sections['b']['total'] = $this->_sections['b']['loop'];
    if ($this->_sections['b']['total'] == 0)
        $this->_sections['b']['show'] = false;
} else
    $this->_sections['b']['total'] = 0;
if ($this->_sections['b']['show']):

            for ($this->_sections['b']['index'] = $this->_sections['b']['start'], $this->_sections['b']['iteration'] = 1;
                 $this->_sections['b']['iteration'] <= $this->_sections['b']['total'];
                 $this->_sections['b']['index'] += $this->_sections['b']['step'], $this->_sections['b']['iteration']++):
$this->_sections['b']['rownum'] = $this->_sections['b']['iteration'];
$this->_sections['b']['index_prev'] = $this->_sections['b']['index'] - $this->_sections['b']['step'];
$this->_sections['b']['index_next'] = $this->_sections['b']['index'] + $this->_sections['b']['step'];
$this->_sections['b']['first']      = ($this->_sections['b']['iteration'] == 1);
$this->_sections['b']['last']       = ($this->_sections['b']['iteration'] == $this->_sections['b']['total']);
?>
		<tr>
			<th align="right" valign="top"><?php echo $this->_tpl_vars['DemandProduct']; ?>
<?php echo $this->_tpl_vars['umDemand1'][$this->_sections['b']['index']]['num']; ?>
</th>
			<td align="left">
				<INPUT TYPE="text" NAME="infos_id" id="infos_id" size="50" value="<?php echo $this->_tpl_vars['umDemand1'][$this->_sections['b']['index']]['infos_na']; ?>
" disabled>
			</td>
		</tr>
		<tr>
			<th align="right" valign="top"><?php echo $this->_tpl_vars['DemandQuantity']; ?>
<?php echo $this->_tpl_vars['umDemand1'][$this->_sections['b']['index']]['num']; ?>
</th>
			<td align="left">
				<INPUT TYPE="text" NAME="quantity" id="quantity" value="<?php echo $this->_tpl_vars['umDemand1'][$this->_sections['b']['index']]['quantity']; ?>
" disabled>
			</td>
		</tr>
		<?php endfor; endif; ?>
		
		
		<tr>
			<th align="right"><?php echo $this->_tpl_vars['DemandNa']; ?>
</th>
			<td align="left">
				<INPUT TYPE="text" NAME="demand_na" id="demand_na" value="<?php echo $this->_tpl_vars['demand_na']; ?>
" size="50" disabled>
			</td>
		</tr>
		<tr>
			<th align="right"><?php echo $this->_tpl_vars['DemandMail']; ?>
</th>
			<td align="left">
				<INPUT TYPE="text" NAME="demand_mail" id="demand_mail" value="<?php echo $this->_tpl_vars['demand_mail']; ?>
" size="50" disabled>
			</td>
		</tr>
<!--
	2010-08-27 edit by 廷俊
	----------------------------------------------------
	需求者無聯絡電話，則顯示”此需求者的會員資料中，無輸入任何連絡電話。”
	---------------------------------------------------- 
	2010-12-07 edit by 廷俊
	----------------------------------------------------
	1.調整需求單列表的版面配置
	2.需求單設定開放可不限會員
	3.需求單新增需求者、電子郵件、聯絡電話、聯絡地址欄位
	4.遮蔽需求者的資料從會員資料撈
	---------------------------------------------------- 		
-->	
		<tr>
			<th align="right" valign="top"><?php echo $this->_tpl_vars['DemandTel']; ?>
</th>
			<td align="left">
				<INPUT TYPE="text" NAME="demand_tel" id="demand_tel" value="<?php echo $this->_tpl_vars['demand_tel']; ?>
" size="50" disabled>
			</td>
		</tr>
		<tr>
			<th align="right" valign="top"><?php echo $this->_tpl_vars['DemandAddres']; ?>
</th>
			<td align="left">
				<INPUT TYPE="text" NAME="demand_address" id="demand_address" value="<?php echo $this->_tpl_vars['demand_address']; ?>
" size="50" disabled>
			</td>
		</tr>
		<tr>
			<th align="right"><?php echo $this->_tpl_vars['DemandState']; ?>
</th>
			<td align="left">
				<INPUT TYPE="radio" NAME="demand_state" value="1" <?php if ($this->_tpl_vars['demand_state'] == '1'): ?>checked<?php endif; ?>><?php echo $this->_tpl_vars['DemandStateY']; ?>

				<INPUT TYPE="radio" NAME="demand_state" value="0" <?php if ($this->_tpl_vars['demand_state'] == '0'): ?>checked<?php endif; ?>><?php echo $this->_tpl_vars['DemandStateN']; ?>

			</td>
		</tr>
		<tr>
			<th align="right" valign="top"><?php echo $this->_tpl_vars['DemandText']; ?>
</th>
			<td align="left">
				<TEXTAREA NAME="demand_text" id="demand_text" ROWS="5" COLS="40"><?php echo $this->_tpl_vars['demand_text']; ?>
</TEXTAREA>
			</td>
		</tr>	
<!--
	2010-08-27 edit by 廷俊
	----------------------------------------------------
	a.新增建立需求單建立日期、建立者、建立IP、修改日期、修改者、修改IP
	b.需求單編輯頁面顯示修改日期、修改者
	c.修改者從帳號管理資料撈
	d.需求單編輯儲存時，修改者用SESSION管理者編號存
	---------------------------------------------------- 			
-->		
		<?php if ($this->_tpl_vars['alter_date'] != ""): ?>
		<tr>
			<th align="right" valign="top"><?php echo $this->_tpl_vars['AlterDate']; ?>
</th>
			<td align="left">
				<INPUT TYPE="text" NAME="alter_date" id="alter_date" value="<?php echo $this->_tpl_vars['alter_date']; ?>
" disabled>
			</td>
		</tr>	
		<tr>
			<th align="right" valign="top"><?php echo $this->_tpl_vars['AlterUser']; ?>
</th>
			<td align="left">
				<INPUT TYPE="text" NAME="alter_user" id="alter_user" value="<?php echo $this->_tpl_vars['alter_user']; ?>
" disabled>
			</td>
		</tr>	
		<?php endif; ?>
		<tr>
			<td align="center" colspan="2">
				<INPUT TYPE="submit" value="<?php echo $this->_tpl_vars['Btn_Save']; ?>
">
				<INPUT TYPE="reset" value="<?php echo $this->_tpl_vars['Btn_Reset']; ?>
">
			</td>
		</tr>
	</table>
</FORM>
</div>
<?php echo $this->_tpl_vars['temp_log']; ?>
</body>
</html>